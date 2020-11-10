<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'tracing_id', 'enterpise_id', 'date', 'kms', 'accepted', 'deleted',
    ];
}
