@extends('layout')

@section('content')



    <div class="starter-template text-center py-5 px-3">
        <h1>Thank you for joining</h1></div>

    <div class="starter-template text-center py-5 px-3"><a href="{{route('all')}}"><h1>All members</h1></a></div>
        <div class="container" style="display: flex">


    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
       class="twitter-share-button" class="mt5" data-size="large"
       data-text="Check out this Meetup with SoCal AngularJS! link:"
       data-lang="en" data-show-count="false">Tweet</a>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v9.0" nonce="UcXawilY"></script>

    <div class="fb-share-button"
         data-href="https://developers.facebook.com/docs/plugins/"
         data-layout="button_count"
         data-size="large"><a target="_blank"
                              href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                              class="fb-xfbml-parse-ignore">Share</a></div>


    </div>
@endsection
