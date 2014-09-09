<?php

class LinksController extends \BaseController {

	public function home()
	{
		return View::make('links.home');
	}

	public function store()
	{

		$newLink = new Link;
		$newLink->url = Input::get('url');
		$newLink->stub = Link::generateStub();
		$newLink->save();

		return View::make('links.show', ['link' => $newLink]);

	}

	public function go($stub)
	{
		$link = Link::where('stub', '=', $stub)->get()[0];
		return Redirect::to($link->url);
	}



}
