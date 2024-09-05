<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArbitrationModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_international_arbitration_centers';

    protected $fillable = [
        'title',
        'iac_document',
        'createdBy',
        'updatedBy',
    ];
}