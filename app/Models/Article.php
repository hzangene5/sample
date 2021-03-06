<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   use Sluggable;
   // use HasFactory;
   protected $fillable = ['name','status','user_id','description', 'slug' ];
   protected $attributes = [
      'hit' => 300,
  ];

   public function categories()
    {

     return $this->belongsToMany(Category::class);

   }

   public function user(){

      return $this->belongsTo(User::class);
   }

   public function comments(){

    return $this->hasMany(Comment::class);
 }

   public function sluggable(): array
   {
       return [
           'slug' => [
               'source' => ''
           ]
       ];
   }

}
