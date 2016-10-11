<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokemons extends Model
{
    protected $table = 'pokemons';

    public function getFomattedId(){
    	$strid = $this->id . "";
    	if (strlen($strid) == 1) return '00'.$strid ;
		if (strlen($strid) == 2) return '0' .$strid;
		if (strlen($strid) == 3) return $strid ;

    }
}
