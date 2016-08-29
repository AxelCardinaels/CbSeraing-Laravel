<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ForumCategories;
use App\ForumSubjects;
use App\ForumMessages;
use Jenssegers\Date\Date;

class ForumSujetsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sujet = ForumSubjects::where("id",$id)->first();
		$categorie = ForumCategories::find($sujet->category);



		foreach($sujet->messages as $message){
			Date::setLocale('fr');
			$date = new Date($message->created);
			$message->when = $date->format('j F Y');

			$message->message = $this::text_humanized($message->message);
		}


		return view('forum.sujets.show',['categorie' => $categorie, "sujet" => $sujet]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
