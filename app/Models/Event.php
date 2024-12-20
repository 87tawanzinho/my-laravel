<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = [
    "title","description","text","private", "main"
   ];

   protected $casts = [
      "items" => "array"
   ];
   
   public function user() {
      return  $this->belongsTo('App\Models\User');
   }

   public function users() {
      return $this->belongsToMany(User::class);
   }
}
