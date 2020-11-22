<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    protected $table = 'cycles';

    protected $fillable = [
        'name', 'grade', 'year', 'deleted',
    ];
    public function Users(){
        return $this->hasMany(User::class);
        }
        public function RelRas(){
            return $this->hasManyThrough(ra::class, module::class);
            }
    
}
