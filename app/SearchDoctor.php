<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchDoctor extends Model
{

    protected $fillable = ['drName_id','contact','department','fee','yourName','mobile','email','gender','symptoms','date','time','payment'];

    public static function saveNewSearchInfo($request) {
        SearchDoctor::create($request->all());
    }
}
