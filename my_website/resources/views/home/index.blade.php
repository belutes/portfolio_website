@extends('layout.master')

@section('content')
<div class="mt-3 row text-center">
    <div class="col">
        <div class="mb-3 mt-3 col">
            <img class="img-fluid" src="/images/brand.png">
        </div>
        <div class="intro_div">
            @guest
                <p>You are not logged in.</p>
            @endguest
            @auth
                <p>Hello {{ Auth::user()->name }},</p>
                @if( Auth::user()->isAdmin == true)
                    <p class="text-danger">You are the website administrator.</p>
                @endif
            @endauth

            <p>
                Thank you for visiting my website. I am a full stack web developer with a passion for 
                PHP, and Node.js. I am knowledgeable in, and a strong proponent of bootstrap web design as well, ensuring a smoother 
                transition for the end user regardless of screen size. I have an Associate of Applied Science 
                Degree in Software Development and certificates in .Net Development, Android Mobile Development,
                Computer Science, iOS Mobile Development, and Web Design.
            </p>
            
        </div>
    </div>
</div>

@endsection