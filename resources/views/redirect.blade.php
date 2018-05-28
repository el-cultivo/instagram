@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <div class="media flex-column align-items-center p-3">
                <img class="m-2 rounded-circle" src="{{ $user['profile_picture'] }}" alt="{{ $user['full_name'] }}" width="64">
                <div class="media-body text-center">
                    <h5 class="mt-0 mb-1"><span>@</span>{{ $user['username'] }}</h5>
                    {{ $user['bio'] }}
                </div>
            </div>
            <h2 class="d-inline-block">It worked!</h1>
            <p>Use this token in the appropriate field on your website or blog, and you should have a working Instagram widget.</p>
            <pre><code class="d-inline-block" style="border: 2px solid #ebeced; padding: 14px; font-size: 18px;">{{ $access_token }}</code></pre>
            <p>If you're having problems using your token, get in contact with the service that set up the theme or template you're using for your website. If you're using a Cultivo theme, our team would be happy to help!</p>
        </div>
    </div>

@endsection
