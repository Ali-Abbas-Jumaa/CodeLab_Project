<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ["name", 'price','group_id'];
    protected $with = ['group'];

    public function group()
    {
        return $this->belongsTo(Group::class);

    }
}
