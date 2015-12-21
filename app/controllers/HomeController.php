<?php

class HomeController extends BaseController {

    public $hashids;

	public function create()
	{
		return View::make('hello');
	}

    public function __construct(){
        $this->hashids = new Hashids\Hashids('this is my salt');
    }

    public function save()
    {
        $phrase = new Phrase;
        $phrase->phrase = Input::get('phrase');
        $phrase->save();

        $id = $this->hashids->encode($phrase->id, 6);

        return Redirect::to($id);

    }
    public function index()
    {
        $phrases = Phrase::all();
        return View::make('index', compact('phrases', 'title'));
    }

    public function retrieve($phrase_hash)
    {


        $id = $this->hashids->decode($phrase_hash);

        $phrase = Phrase::find($id[0]);

        return View::make('phrase', compact('phrase'));

    }

}
