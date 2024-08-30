<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_authentication_translation';

    protected $fillable = [
        'name',
        'emailId',
        'mobileNo',
        'password',
        'userType',
        'createdBy',
        'updatedBy',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}