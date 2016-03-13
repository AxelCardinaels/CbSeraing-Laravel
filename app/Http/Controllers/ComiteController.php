<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use App\Types;

class ComiteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

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


		$type = Types::where('type',$id)->first();
		$types = Types::whereNotIn('id', [5, 99])->get();

		foreach ($type->users as $user){
			$user = controller::user_humanized($user);
			$user->etoileCode = controller::user_stars($user->etoiles);
		}

		if($id == "honneur"){
			$users = User::where('honneur','1')->orderBy('ordre', 'desc')->orderBy('anbapt','desc')->get();
			foreach ($users as $user){
				$user = controller::user_humanized($user);
				$user->etoileCode = controller::user_stars($user->etoiles);
			}

			return view('comite.show',['type' => $type, 'users' => $users, 'types' => $types]);
		}else{
			return view('comite.show',['type' => $type, 'types' => $types]);
		}



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
