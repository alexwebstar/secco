<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'state';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ef_id', 'key', 'name'];
}
