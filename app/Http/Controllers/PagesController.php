<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\News;
use App\Types;
use App\Chants;
use App\ChantsCategories;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		$lastNews = News::orderBy('id', 'desc')->first();
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


}
