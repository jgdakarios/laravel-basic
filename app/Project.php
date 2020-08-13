<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table = 'my_table';
    protected $fillable = ['title', 'url', 'description'];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
