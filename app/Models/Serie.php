<?php

namespace App\Models;

use App\Models\Cycle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serie extends Model
{
    use HasFactory;

    // function cycle
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

}
