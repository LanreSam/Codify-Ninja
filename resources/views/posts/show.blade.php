@extends('layouts.app')

@section('content')
<div class="container bg-white shadow rounded">
    <div class="row">
        <div class="col-8 d-flex justify-content-center p-5">
            <img src="/storage/{{ $post->image }}" alt="" class="w-50 rounded shadow-sm">
        </div>
        <div class="col-4 p-5 bg-dark text-white">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-white">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3 text-success">Follow</a>
                        </div>
                    </div>
                </div>
                <hr class="bg-white"/>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" style="border-bottom: 2px solid white;"><span class="text-white">{{ $post->user->username }}</span></a>
                    </span> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
