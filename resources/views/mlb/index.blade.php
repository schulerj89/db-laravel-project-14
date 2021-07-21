@extends('layouts.app')

@section('content')
<div>
  <div>
    <h1>MLB</h1>
  </div>
  @foreach ($players as $player)
  <div>
    <span>{{ $player->position }}</span>
    <h3>{{ $player->name }}</h3>
  </div>
  @endforeach
</div>

@endsection