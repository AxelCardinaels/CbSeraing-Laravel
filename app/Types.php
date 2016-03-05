<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model {

	protected $table = 'cbs_types';

	public function users(){
    return $this->hasMany('App\User','type','id')->where('comite',1)->orderBy('ordre', 'desc')->orderBy('anbapt','desc');
  }

}
