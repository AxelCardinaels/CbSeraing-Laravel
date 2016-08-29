<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumSubjects extends Model {

	protected $table = 'cbs_forum_subjects';

	public function category(){
		return $this->hasOne('App\ForumCategories','id','category');
	}

	public function messages(){
		return $this->hasMany('App\ForumMessages','subject','id')->orderBy('created');
	}

	public function autheur(){
		return $this->hasOne('App\User','id','author');
	}

}
