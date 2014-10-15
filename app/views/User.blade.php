@extends('master')
@section('header')
<h1>Developer's Tool Kit</h1>
<h2>User</h2>
@stop
@section('content')
<h2 class="content-subhead">Random User Generator </h2>
<p>
    Using this application the developer can create random users by first name, last name. The developer can also select to add an address and  a phone number for random user created.
</p>
<form method="post">
    <br>
    <input type="checkbox" name="address" value="address"> Add address
    <input type="checkbox" name="phone" value="phone"> Add phone number <br>
    <br> # of Users <input type="text" name="number" size="1">
    <input type="submit" value="generate!"><br>
</form> 
@stop 

