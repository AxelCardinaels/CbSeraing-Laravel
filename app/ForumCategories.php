<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumCategories extends Model {

	protected $table = 'cbs_forum_categories';

	public function subjects(){
		return $this->hasMany('App\ForumSubjects','category','id');
	}

}
