<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $table = 'npcs';

    // TODO: acertar campos de posição/deslocamento e validar se está faltando algum outro campo importante
    protected $fillable = [
        'script',
        'name',
        'ids_sell',
        'ids_buy',
        'position_x',
        'position_y',
    ];

    private function script() {
        return $this->hasOne('App\Script');
    }

    public function buys() {
        return $this->hasMany('App\Item', 'ids_array');
    }

    public function sells()
    {
        return $this->hasMany('App\Item', 'ids_array');
    }

}
