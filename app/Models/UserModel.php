<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';

     protected $table = 'tbl_user_master';
     protected $fillable = ['id', 'user_unique_id','status' ,'user_name', 'contact_no', 'email_id','user_type','user_password','c_by','d_by'];

     public static function user_list($id)
     {
        $query = self::select('*')->where('status', 1); 
        if ($id) {
            $query->where('id', $id);
        }
        return $query->get();
     }
}
