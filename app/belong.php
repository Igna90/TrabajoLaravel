<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belong extends Model
{
    protected $table = 'belongs';

    protected $fillable = [
        'student_id', 'enterprise_id', 'deleted',
    ];

    public function enterprises(){
        return $this->belongsTo(enterprise::class, 'enterprise_id');
        }
}
