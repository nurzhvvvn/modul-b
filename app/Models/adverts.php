<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class adverts extends Model
{
        protected $fillable = [
        'title','text','status','price','views_count','category','author','photos','paid_services'
    ];
}
