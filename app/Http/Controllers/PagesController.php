<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\News;
use App\Types;
use App\Chants;
use App\ChantsCategories;
use App\Albums;
use App\Photos;
use App\ForumCategories;
use Jenssegers\Date\Date;


class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function home()
	{
		$lastNews = News::orderBy('id', 'desc')->first();
		$lastNews->description = Controller::text_humanized($lastNews->description);

		Date::setLocale('fr');
		$date = new Date($lastNews->when);
		$lastNews->when = $date->format('l j F Y');
		$lastNews->hour = $date->format('H:i');
		return view('page/home',['news' => $lastNews]);
	}

	public function comite(){
		$types = Types::whereNotIn('id', [5, 99])->get();
		return view('page/comite',['types' => $types]);
	}

	public function chants(){

		$chant = Chants::where('id','24')->get();
		$categories = ChantsCategories::all();

		return view('page/chants', ["chant" => $chant, "categories" => $categories]);
	}

	public function albums(){
		$albums = Albums::where('parent','0')->get();

		foreach($albums as $parent){
			foreach($parent->childrens as $babies){
				$picture = $babies->photos->random(1);
				$parent->randomPicture = $picture;
			}
		}
		return view('page/albums', ["albums" => $albums]);
	}

	public function forum(){
		$categories = ForumCategories::all();
		return view('page/forum', ["categories" => $categories]);
	}

	public function contact(){
		return view('page/contact');
	}

	public function login(){
		return view('page/login');
	}


}
