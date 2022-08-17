<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


        protected $table = 'admins';
        public $timestamps = false;
        protected $fillable = [
            'Name',
            'Email',
            'Phone_Number',
            'Password',
            'D_O_B',
            'Address',

        ];

}
