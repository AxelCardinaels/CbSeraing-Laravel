<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model {

	protected $table = "cbs_albums";

	public function photos(){
  	return $this->hasMany('App\Photos','album','id');
  }

	public function childrens(){
		return $this->hasMany('App\Albums','parent','id');
	}

	public function parents(){
		return $this->hasMany('App\Albums','id','parents');
	}

}
