<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumMessages extends Model {

	protected $table = 'cbs_forum_messages'


	public function subject(){
		return $this->hasOne('App\forumSubjects','id','subject');
	}

}
