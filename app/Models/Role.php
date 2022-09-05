<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    // function menu
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    // function profil
    public function profil()
    {
        return $this->belongsTo(Profil::class);
    }
}
