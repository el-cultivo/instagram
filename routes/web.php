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
        'client_id' => config('services.instagram.client_id'),
        'redirect_uri' => config('services.instagram.redirect'),
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
                'client_id' => config('services.instagram.client_id'),
                'client_secret' => config('services.instagram.client_secret'),
                'redirect_uri' => config('services.instagram.redirect'),
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
