<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeAndCircularTranslationDetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_notice_and_circular_translation_details';

    protected $fillable = [
        'circular_translation_id', 
        'language_id', 
        'leter_no', 
        'notice_title', 
        'document', 
        'description', 
        'notice_date', 
        'status'
    ];

    public function noticeAndCircular()
    {
        return $this->belongsTo(NoticeAndCircular::class, 'circular_translation_id', 'circular_translation_id');
    }
}
