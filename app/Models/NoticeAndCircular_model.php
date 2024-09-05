<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeAndCircular_model extends Model
{
    use HasFactory;
    protected $table = 'tbl_notice_and_circular_translation_details';
    protected $fillable = [
        'language_id',
        'notice_title',
        'document',
        'description',
        'notice_date',
        'leter_no',
        'created_by',
        'updated_by',
    ];
}
