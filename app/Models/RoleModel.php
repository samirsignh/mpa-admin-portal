<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_roles';

    protected $fillable = [
        'role',
        'creadtedBy',
        'updatedBy',
    ];
}