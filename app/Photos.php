<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model {

	protected $table = "cbs_albums_content";

	public function albums(){
  	return $this->hasOne('App\Albums','id','album');
  }

}
