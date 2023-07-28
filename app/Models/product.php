<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $primaryKey  = 'id';
    protected $fillable = ['name', 'price', 'quantity', 'user_id'];
    
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
