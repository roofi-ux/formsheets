<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primer extends Model
{
    use HasFactory;
    protected $table = 'users';

    static public function getDat(){
        return primer::all();
    }

}
