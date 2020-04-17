@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop
    
@section('content')
    <p>This is my body content.</p>
    <b>HIii This is anurag singh
        
    </b>
    @{{ This will not be processed by Blade }}
    
@stop


