<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	public static function strip($url) {
			$string = str_replace(array('?', '!', '#'), '', $url);

			$a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ /1234567890\'';
			$b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--1234567890-';

			$string = utf8_decode($string);
			$string = strtr($string, utf8_decode($a), $b);
			$string = strtolower($string);

			return utf8_encode($string);
		}

		public static function urlstrip($id, $name) {
			return $id.'-'.Controller::strip($name);
		}

		public function user_humanized($user){
			$user->actu = nl2br($user->actu);
			$user->titres = nl2br($user->titres);
			$user->etudes = nl2br($user->etudes);
			return $user;
    }

		public function text_humanized($text){
			$text = nl2br($text);
			return $text;
    }

		public function user_stars($stars){

			$code = ['*' => 'etoile--doree',
			'+' => 'etoile--argent',
			'r' => 'etoile--erasmus',
			'R' => 'etoile--fossile-erasmus',
			'F' => 'etoile--fossile-doree',
			'f' => 'etoile--fossile-argent',
			'b' => 'etoile--bourgeois',
			'/' => 'etoile--palme-doree',
			'!' => 'etoile--palme-argent'];

			$stars = str_split($stars);
			$starClass = [];

			foreach($stars as $star){
				$starCode = strtr($star,$code);
				array_push($starClass,$starCode);
			}

			return $starClass;

		}


}
