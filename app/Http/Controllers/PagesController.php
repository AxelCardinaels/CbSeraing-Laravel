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

		Date::setLocale('fr');
		$date = new Date($lastNews->when);
		$lastNews->when = $date->format('l j F Y');
		$lastNews->hour = $date->format('H:i');
		return view('page/home',['news' => $lastNews]);
	}

	public function comite(){
		$types = Types::all();
		return view('page/comite',['types' => $types]);
	}

	public function chants(){

		$chant = Chants::where('id','24')->get();
		$categories = ChantsCategories::all();

		return view('page/chants', ["chant" => $chant, "categories" => $categories]);
	}

	public function albums(){
		$albums = Albums::where('parent','0')->get();
		return view('page/albums', ["albums" => $albums]);
	}

	public function forum(){
		$categories = ForumCategories::all();
		return view('page/forum', ["categories" => $categories]);
	}


}
