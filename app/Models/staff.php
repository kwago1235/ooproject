<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staffs';
    protected $primaryKey  = 'id';
    protected $fillable = ['name', 'gender', 'age', 'user_id'];
    
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
