@extends('master')
@section('header')
  <h1>Developer's Best Friend</h1>
   <h2>Decode</h2>

@stop
@section('content')
            <h2 class="content-subhead">Base 32 Decoder </h2>
            <p>
                 Using this application you can decode base 32 encoded data. This is useful for testing and validating data stored by your application.
            </p>

            <form method="post">
       <br>
        
        String to decode <input type="text" name="string" size="80">
      
        <input type="submit" value="decode!"><br>

    </form> 
            
@stop
