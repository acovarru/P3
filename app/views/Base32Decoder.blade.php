@extends('master')
@section('header')
<h1>Developer's Tool Kit</h1>
<h2>Decode</h2>
@stop
@section('content')
<h2 class="content-subhead">Base 32 Decoder </h2>
<p>
    Using this application the developer can decode base 32 encoded data. This is useful for testing and validating data stored by the developer's application.
</p>
<form method="post">
    <br>
    String to decode
    <br>
    <textarea rows="4" cols="50" name="string"></textarea> 
    <br>
    <input type="submit" value="decode!">
    <br>
</form>            
@stop
