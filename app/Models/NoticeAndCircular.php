<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeAndCircular extends Model
{
    use HasFactory;
    protected $table = 'tbl_notice_and_circulars';

    protected $fillable = [
        'circular_translation_id', 
        'created_by', 
        'updated_by'
    ];

    public function translationDetails()
    {
        return $this->hasMany(NoticeAndCircularTranslationDetail::class, 'circular_translation_id', 'circular_translation_id');
    }
}
