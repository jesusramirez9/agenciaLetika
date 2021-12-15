<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
        // protected $fillable = ['name','slug'];
        protected $guarded = ['id','created_at','update_at'];

        public function getRouteKeyName()
        {
          return "slug";
        }
    

    // relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }

    // relacion muchos a muchos

   
    // relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne(BlogImage::class, 'imageable');
    }
}
