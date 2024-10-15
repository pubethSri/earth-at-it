@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../{{ $user->profile->image }}" class="w-100 rounded-circle" alt="">
        </div>
        <div class=" col-9 pt-5">
            <div><h1><strong>{{ $user->name }}</strong></h1></div>
            <div class="pt-4"><strong>{{ $user->profile->Fullname}}</strong></div>
            <div><a href="{{ $user->profile->url}}">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->events as $event)
            <div class="col-3">
                <img src="{{ $event->image }}" class="w-100 rounded-4" alt="">
                <div class="pt-3 justify-content-center d-flex">
                <h4 class="mb-0 w-100"><strong>{{ $event->title }}</strong></h4>
                <p class="mb-0">{{ $event->date }}</p>
                <p>{{ $event->location }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
