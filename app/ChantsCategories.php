<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ChantsCategories extends Model {

	protected $table = "cbs_chants_cats";


	public function chants(){
  	return $this->hasMany('App\Chants','cat','id');
  }

}
