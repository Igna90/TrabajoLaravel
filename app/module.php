<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table = 'modules';

    protected $fillable = [
        'cycle_id', 'name', 'deleted',
    ];
    public function Ras(){
        return $this->hasMany(ra::class);
    }
    public function Cycles(){
        return $this->belongsTo(cycle::class, 'cycle_id');
    }
}