<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Npc extends Model
{
    protected $table = 'npcs';

    private function script() {
        return $this->hasOne('App\Script');
    }

    public function buys() {
        return $this->hasMany('App\Item', 'id_global');
    }

    public function sells()
    {
        return $this->hasMany('App\Item', 'id_global');
    }

}
