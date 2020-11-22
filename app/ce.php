<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ce extends Model
{
    protected $table = 'ces';

    protected $fillable = [
        'ra_id', 'task_id', 'word', 'description', 'mark', 'deleted',
    ];
    public function ras(){
        return $this->belongsTo(ra::class, 'ra_id');
    }
    public function relTask(){
        return $this->belongsTo(task::class, 'task_id');
    }
}
