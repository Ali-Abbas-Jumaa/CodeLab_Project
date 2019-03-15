<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ["name", 'image'];

    public function items()
    {
        return $this->hasMany(Itmem::class);

    }
}
