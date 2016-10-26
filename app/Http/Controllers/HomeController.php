<?php

namespace Chatty\Http\Controllers;

class HomeController extends Controller
{
	
	function index() {
		return view('home');
	}
}