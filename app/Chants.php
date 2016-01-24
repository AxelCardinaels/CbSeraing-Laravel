<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Chants extends Model {

	protected $table = "cbs_chants";


	public function categorie(){
        return $this->hasOne('App\ChantsCategories','id','cat');
  }

}
