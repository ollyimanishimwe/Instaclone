@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row col-3 p-5">
            <img src="../svg/olly.jpg" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>44</strong> posts</div>
                <div class="pr-5"><strong>100M</strong> followers</div>
                <div class="pr-5"><strong>1</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'No url'}}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="../svg/olly.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="../svg/olly.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="../svg/olly.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
