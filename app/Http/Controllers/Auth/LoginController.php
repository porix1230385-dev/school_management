<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\AvoirProfil;
use App\Models\User as UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void$field
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     *  Login with username or Email
     */
    public function username()
    {
        $identity = request()->identity;
        $field = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'matricule';
        request()->merge([$field => $identity]);
        return $field;
    }
    
    // function login index
    public function index() {
        return view('auth.login');
    }
    // password porix = porix8936
    public function login(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'profile' => "required",
            'identity' => "required",
            'password' => 'required',
        ]);
        // dd($request);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        $profile = $request->get('profile');
        $request['email'] = $request['matricule'] = $request->get('identity');
        
        $credentials =  [
            'with_email' => request(['email','password']),
            'with_matricule' => request(['matricule','password']),
        ];
        if (!Auth::attempt($credentials['with_email']) && !Auth::attempt($credentials['with_matricule'])){
            return redirect()->back()
                            ->with('error','Vous avez fourni des mauvais identifiants');
        }

        // checking profile 
        $profile = $request['profile'];
        $checkProfile = AvoirProfil::join('profils','profils.id','=','avoir_profils.profil_id')
        ->where(
                [
                'profil_id'=>$profile,
                'user_id' =>$request->user()->id
                ]
            )
            ->select(
                    'profils.id as IDProfile',
                    'profils.lib_profil as profileName'
                )
            ->first();
        // dd($checkProfile);
        if(!$checkProfile || $checkProfile == null)
        {
            return redirect()->back()
            ->with('error','Vous n\'êtes pas associé a se profile');
        }

        // // if remember me is checked
        // if ($request->remember_me)
        // $token->expires_at = Carbon::now()->addWeeks(1);
        // $token->save();
         // add profile attribute to auth session 
        //  $my_profile = Auth::user()->setAttribute('my_profile',$checkProfile);
        $my_profile = session(['my_profile' => $checkProfile]);
        // update user connection datas
        $user = UserModel::find($request->user()->id);
        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp(),
            'is_connected' => true,
        ]);
        
        if(Auth::check())
        // return redirect()->route('dashboard', [$checkProfile]);
            return redirect()->route('dashboard');
            // return view('pages.support_team.dashboard');
        
    }

    // public function logout()
    // {
    //     auth()->logout();
    //     return redirect()->route('login');
    // }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
