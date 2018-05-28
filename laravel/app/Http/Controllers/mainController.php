<?php

namespace App\Http\Controllers;
use App\mainDataModel;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
		return View('home');
	}
}
?>
