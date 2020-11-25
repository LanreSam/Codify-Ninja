@extends('layouts.app')

@section('content')
<h2 class="container my-4" style="font-size: 3rem;">Latest Posts</h2>
@foreach($posts as $post)
<div class="container bg-white shadow rounded mb-5">
    
    <div class="row">
        <div class="col-6 offset-3 p-5">
            <a href="/profile/{{ $post->user->id }}" class="d-flex justify-content-center">
                <img src="/storage/{{ $post->image }}" alt="" class="w-50 rounded shadow-sm">  
            </a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-6 offset-3 bg-dark text-white text-center">
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}"  style="border-bottom: 2px solid white;"><span class="text-white">{{ $post->user->username }}</span></a>
                    </span> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>    
@endforeach

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

@endsection
