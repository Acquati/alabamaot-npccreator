<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'ids_array',
        'price_player',
        'price_npc'
    ];

    protected $casts = [
        'ids_array' => 'array'
    ];

    public function npc() {
        return $this->hasMany('App\Npc', 'ids_array');
    }

}
