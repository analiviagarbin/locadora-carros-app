@extends('layouts.app')

@section('content')
    <login-component csrf_token="{{ @csrf_token() }} " />
@endsection
