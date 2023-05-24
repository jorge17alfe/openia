<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OpenaiChatRequest;
use Illuminate\View\View;
use Nette\Utils\Json;
use OpenAI;

class OpenAiController extends Controller
{
    
    public function chat():View
    {
        return view("openai.create-chat");
      
    }


    public function image():View
    {
        return view("openai.create-image");
      
    }

    public function example():View
    {
        return view("openai.create-example");
      
    }


    public function createChat(Request $request)
    {
        $client = OpenAI::client(getenv("OPENAI_KEY"));
        $query = $request->chat;
      
        $result = $client->chat()->create(
            [
                "model" => "gpt-3.5-turbo",
                "messages" => [
                    [
                        "role" => "system",
                        "content" => "You are a helpful assistant."
                    ],
                    [
                        "role" => "user",
                        "content" => $query
                    ]
                ]
            ]
        );

      echo   json_encode($result ['choices'][0]['message']['content']);
      
    }

   
    public function createImage(Request $request)
    {
        $client = OpenAI::client(getenv("OPENAI_KEY"));
        $query = $request->image;
        $size = $request->size;

        $response = $client->images()->create([
            'prompt' => $query,
            'n' => 1,
            'size' => $size,
            'response_format' => 'url',
        ]);
        
        echo json_encode($response->data[0]->url); // 1589478378
        
    }





    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
