@extends('layout')

@section('content')
@if( session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
@if ($errors->any())
        <div class="alert alert-danger">
          {!! implode('', $errors->all(':message <br>')) !!}
        </div>
@endif

@auth
<a class="btn btn-primary" href="{{ route('logout') }}" role="button">Logout</a>
<a class="btn btn-primary" href="{{ route('researchers.index') }}" role="button">Researchers</a>
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}" role="button">login</a>
@endguest


@endsection