<?php

class Link extends Eloquent {

    protected $table = 'links';

    public static function generateStub()
    {
        $dict = file(app_path() . "/words.italian.txt");
        $maxLength = count($dict);
        $arrStub = array();
        for ($i = 1; $i <= 3; $i++) {
            $extractedWord = $dict[rand(0, $maxLength)];
            $word = trim(preg_replace('/\s\s+/', ' ', $extractedWord));
            $word = Str::title($word);
            array_push($arrStub, $word);
        }
        $newStub = implode('', $arrStub);
        return $newStub;
    }


}
