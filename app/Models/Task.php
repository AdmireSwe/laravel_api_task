<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id'
    ];

  //  public function id(): string 
    //{
      //  return(string) $this->id;
    //}
    //public function title(): string 
    //{
      //  return $this->title;
    //}
    //public function description(): string
    //{
      //  return $this->description;
    //}

    public function user(){
       return $this->belongsTo(User::class);
    }
}
