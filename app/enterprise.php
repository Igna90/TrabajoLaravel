<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    protected $table = 'enterprises';

    protected $fillable = [
        'name', 'email', 'deleted',
    ];

    public function belongs(){
        return $this->hasMany(belong::class);
        }
    
    public function Users(){
        return $this->hasMany(User::class);
        }

    public function visits(){
        return $this->hasMany(visit::class);
        }
        
}
