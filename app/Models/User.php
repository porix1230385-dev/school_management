<?php

namespace App\Models;

use App\helpers\Qs;
use App\Models\Eleve;
// use App\Models\Parent;
use App\Models\Enseignant;
use App\Models\Instituteur;
use App\Models\Nationalities;
use App\Models\Administration;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**drop
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
  protected $fillable = [
    'nom','prenom','matricule','email','genre',
    'telephone1','password','photo','adresse','telephone2',
    'etat_user','email_verified_at','is_connected',
    'last_login_at','last_logout_at','last_login_ip',
    'deleted_at','deleted_by','updated_by','created_by',
    'confirmation_token'
];

public $appends = ['profile_image_url',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        public function getProfileImageUrlAttribute(){
            if($this->photo)
            {
                return asset('storage/'.$this->photo);
            }
            else{
                return asset(Qs::getDefaultUserImage());
            }
            // return asset('/storage/uploads/profile_images/'.$this->photo);

        }

        // function administrations
        public function administrations()
        {
            return $this->hasMany(Administration::class);
        }

        // function eleves
        public function eleves()
        {
            return $this->hasMany(Eleve::class);
        }

        // function parents
        // public function parents()
        // {
        //     return $this->hasMany(Parent::class);
        // }

        // function enseignants
        public function enseignants()
        {
            return $this->hasMany(Enseignant::class);
        }
        
        // function instituteurs
        public function instituteurs()
        {
            return $this->hasMany(Instituteur::class);
        }

        // function nationalitie
        public function nationalitie()
        {
            return $this->belongsTo(Nationalities::class);
        }

        // function avoir_profils
        public function avoir_profils()
        {
            return $this->hasMany(AvoirProfil::class);
        }
}
