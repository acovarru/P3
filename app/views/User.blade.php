@extends('master')
@section('header')
<h1>Developer's Best Friend</h1>
<h2>User</h2>
@stop
@section('content')
<h2 class="content-subhead">Random User Generator </h2>
<p>
Using this application you can create random users by first name, last name. You can also select to add address and phone number to random user.
</p>
<form method="post">
       <br>
        <input type="checkbox" name="address" value="address"> Add address
        <input type="checkbox" name="phone" value="phone"> Add phone number <br>
       <br> # of Users <input type="text" name="number" size="1">
       <input type="submit" value="generate!"><br>
</form> 
@stop 

