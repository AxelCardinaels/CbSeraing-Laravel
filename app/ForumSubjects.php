<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumSubjects extends Model {

	protected $table = 'cbs_forum_subjects';

	public function category(){
		return $this->hasOne('App\forumCategories','id','category');
	}

	public function messages(){
		return $this->hasMany('App\forumMessages','subject','id');
	}

	public function author(){
		return $this->hasOne('App\User','id','author');
	}

}
