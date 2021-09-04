<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable=['rating','desc','product_id'];
    
    public function product(){
        return $this->belongsTo(Product::class); //ini adalah syntax foreign //double titik dua berarti manggil kelas
    }
}

