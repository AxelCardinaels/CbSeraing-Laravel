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
			$user->actu = str_replace("\n", "</p><p>", preg_replace("/[\r\n]+/", "\n", $user->actu));
			$user->titres = str_replace("\n", "</p><p>", preg_replace("/[\r\n]+/", "\n", $user->titres));
			$user->etudes = str_replace("\n", "</p><p>", preg_replace("/[\r\n]+/", "\n", $user->etudes));
			return $user;
    }

		public function text_humanized($text){
			$text = str_replace("\n", "</p><p>", preg_replace("/[\r\n]+/", "\n", $text));
			return $text;
    }


}
