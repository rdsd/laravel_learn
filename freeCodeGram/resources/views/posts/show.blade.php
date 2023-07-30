@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row w-auto">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>     
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pe-2">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                </div>
                <div>
                    <div><strong>
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <span class="text-dark pe-1">{{ $post->user->username }}</span>
                            </a> |
                            <a href="#" class="ps-1 text-dark text-decoration-none">Follow</a>
                        </strong>
                    </div>
                </div>   
            </div>
            <hr>
            <p>
                <span class="pe-1"><strong>
                        <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">
                            <span>{{ $post->user->username }}
                            </span>
                        </a>
                    </strong>                        
                </span>{{$post->caption}} 
            </p>
        </div>
</div>
@endsection
