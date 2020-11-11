<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'number', 'description', 'deleted',
    ];
    public function task_dones(){
        return $this->hasMany(task_done::class);
    }
    public function ces(){
        return $this->hasMany(ce::class);
    }
}
