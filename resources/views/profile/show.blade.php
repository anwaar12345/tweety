@extends('layouts.app')
@section('content')
{{ $user->name }}
<hr>
@include('timeline',[
'tweets' => $user->tweets
])
@endsection