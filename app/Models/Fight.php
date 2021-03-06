<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{

    public function character()
    {
        return $this->belongsTo('App\Models\Character');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id', 'opponent_id', 'status', 'experience'
    ];
    
    
}
