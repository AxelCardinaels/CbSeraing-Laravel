<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumMessages extends Model {

	protected $table = 'cbs_forum_messages';


	public function subject(){
		return $this->hasMany('App\ForumSubjects','id','subject');
	}

	public function auteur(){
		return $this->hasOne('App\User','id','author');
	}

}
