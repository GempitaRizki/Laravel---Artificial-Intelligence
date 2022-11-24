<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class AIController extends Controller
{
    public function index(){
        return view('ai.index');
    }

    public function result(Request $request){

        $kalimat = $request->kalimat;

        $open_ai = new OpenAi(getenv('OPENAI_API_KEY'));
        $prompt = "Membuat Kalimat Palsu dari sebuah kata" .
        $kalimat. "\n" ;

        $openAiOutput = $open_ai->complete([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => 'Hello',
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);

        $output = json_decode($openAiOutput, true);
        $outputText = $output["choices"][0]["text"];

        return view('ai.index', ['result' => $outputText ]);
    }
}
