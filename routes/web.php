<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/redirect', function (){

    $query = http_build_query([
        'client_id' => env('INSTAGRAM_CLIENT_ID'),
        'redirect_uri' => url('/') . '/callback',
        'response_type' => 'code',
        'scope' => 'public_content',
    ]);

    return redirect('https://api.instagram.com/oauth/authorize/?' . $query);
});

Route::get('/callback', function (Illuminate\Http\Request $request) {

    $request->validate([
        'code' => 'required'
    ]);

    $http = new GuzzleHttp\Client;

    try{

        $response = $http->post('https://api.instagram.com/oauth/access_token/', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => env('INSTAGRAM_CLIENT_ID'),
                'client_secret' => env('INSTAGRAM_SECRET'),
                'redirect_uri' => url('/') . '/callback',
                'code' => $request->code,
            ],
        ]);

    }catch(\Exception $e) {

        $response = json_decode((string) $e->getResponse()->getBody()->getContents(), true);

        return redirect(url('/'))->withErrors($response['error_message']);

    }

    $data = json_decode((string) $response->getBody(), true);

    return view('redirect', $data);
});
