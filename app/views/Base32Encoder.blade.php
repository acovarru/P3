@extends('master')
@section('header')
<h1>Developer's Tool Kit</h1>
<h2>Encode</h2>
@stop
@section('content')
<h2 class="content-subhead">Base 32 Encoder </h2>
<p>
    Using this application the developer can encode arbitrary byte data using the twenty-six letters A-Z and six digits 2-7. This is useful to encode any sensitive data such as passwords or personal information stored by the developer's application.
</p>
<form method="post">
    <br>
    String to encode <input type="text" name="string" size="80">
    <input type="submit" value="encode!">
    <br>
</form>          
@stop
