@extends('master')
@section('header')
<h1>Developer's Tool Kit</h1>
<h2>Lorem</h2>
@stop
@section('content')
<h2 class="content-subhead">Lorem Ipsum Generator </h2>
<p>
    Using this application the developer can create random text in latin to be used as filler text on website/application development. The user has the option to select how many paragraphs to generate.
</p>
<form method="post">
    <br>
    # of paragraphs <input type="text" name="title" size="1">
    <input type="submit" value="generate!"><br>
</form>       
@stop




