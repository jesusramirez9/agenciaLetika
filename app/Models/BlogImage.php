<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;
  // relacion polimorfica
  protected $fillable = ['url'];
     // relacion polimorfica

     public function imageable(){
        return $this->morphTo();
    }
}
