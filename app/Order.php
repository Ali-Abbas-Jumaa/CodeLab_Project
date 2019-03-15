<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ["user_id", 'item_id','completed'];
    protected $with = ['user','item'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function item()
    {
        return $this->belongsTo(Item::class);

    }

}
