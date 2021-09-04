<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=['user_id','nama','harga','desc'];

    public function user(){
        return $this->belongsTo(User::class); //ini adalah syntax foreign //double titik dua berarti manggil kelas
    }
    public function reviews(){
        return $this->hasMany(Review::class); //ini adalah relationship many to many
    }
}

