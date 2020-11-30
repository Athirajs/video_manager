@extends('layouts.app')

@section('content')
<div class="nav-bar flex py-4">
    <div class="container ml-auto flex justify-between">
        <div class="flex">
            <router-link class="mr-4" to='/' exact>Home</router-link>
            <router-link to='/list'>Video List</router-link>
        </div>

    </div>
</div>
<div class="container mx-auto py-2">
    <router-view></router-view>
</div>

@endsection