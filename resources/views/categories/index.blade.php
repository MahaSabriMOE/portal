@extends('layouts.app')

@section('content')
@foreach ($categories as  $category)
<h1>{{ $category->name }}</h1>
    
@endforeach

@endsection