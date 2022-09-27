<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Helpers\Qs;
use App\Models\Setting;
use App\Repositories\MyClassRepo;
use App\Repositories\SettingRepo;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdate;

class SettingController extends Controller
{
    protected $setting, $my_class;

    public function __construct(SettingRepo $setting, MyClassRepo $my_class)
    {
        $this->setting = $setting;
        $this->my_class = $my_class;
    }

    public function index()
    {
         $s = $this->setting->all();
        //  $d['class_types'] = $this->my_class->getTypes();
         $d['s'] = $s->flatMap(function($s){
            return [$s->type => $s->description];
        });
        // dd($d);
        return view('pages.super_admin.settings', $d);
    }

    public function update(SettingUpdate $req)
    {
        $sets = $req->except('_token', '_method', 'logo');
        $sets['lock_exam'] = $sets['lock_exam'] == 1 ? 1 : 0;
        $keys = array_keys($sets);
        $values = array_values($sets);
        for($i=0; $i<count($sets); $i++){
            $this->setting->update($keys[$i], $values[$i]);
        }

        if($req->hasFile('logo')) {
            $logo = $req->file('logo');
            $f = Qs::getFileMetaData($logo);
            $f['name'] = 'logo.' . $f['ext'];
            $f['path'] = $logo->storeAs(Qs::getPublicUploadPath(), $f['name']);
            $logo_path = asset('storage/' . $f['path']);
            $this->setting->update('logo', $logo_path);
        }

        return back()->with('flash_success', __('msg.update_ok'));

    }

    // store 
    public function store(Request $request)
    {
        $request->validate([
            'type' =>['bail','string','unique:settings'],
            'description'=>['bail','string'],
        ]);

        // $type = $request->type;
        // $description = $request->description;
        $setting =  new Setting();
        $setting->type = $request->type;
        $setting->description = $request->description;
        $save = $setting->save();
        // return $save;
        if($save)
            return response()->json($setting); 
        else
            return "ce type d'incident existe deja";
    }
}
