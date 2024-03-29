@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" class='w-100 rounded-circle'></img>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">                    
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}"></follow-button>                    
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div> 
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>       
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile['title'] }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile['url'] }}</div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pt-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 h-100"/>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
