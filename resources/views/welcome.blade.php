@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <img src="https://i.vimeocdn.com/portrait/13201883_300x300" width="52" height="52" alt="">
            <h2 class="d-inline-block mb-0" style="vertical-align: middle;">Get Your Instagram Access Token</h1>
            <p>
                In order to display your Instagram photos on your own website, you are required to provide an Instagram Access Token. You can do this by clicking the generator button below. After clicking, you'll be prompted by Instagram to authorize Pixel Union to access your Instagram photos, and you may need to enter your Instagram login credentials.
            </p>
            <a href="/redirect" class="btn btn-lg btn-info my-3" style="border-radius: 1.4rem;">Generate access token</a>
            <p>
                You'll be brought right back here and, if all went well, your Instagram Access Token will be ready for you. Copy and paste this access token into the correct field. Remember to keep your access token private and never paste it in a location where others might can access it.
            </p>
        </div>
    </div>

@endsection
