@extends('layout') 

@section('content')

<div class="col-sm-8 blog-main">

    @if($user_id)

        @foreach ( $posts->reverse() as $post)
    
            @include('posts.post')
        
        @endforeach
        
    @endif

</div>

@endsection