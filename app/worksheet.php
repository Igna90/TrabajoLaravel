<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worksheet extends Model
{
    protected $table = 'worksheets';

    protected $fillable = [
        'date', 'description', 'student_id', 'accepted', 'deleted',
    ];
    public function Users(){
        return $this->belongsTo(User::class, 'student_id');
    }
}
