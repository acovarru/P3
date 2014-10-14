@extends('master')
@section('header')
  <h1>Developer's Best Friend</h1>
   <h2>Base 32 decoder</h2>

@stop
@section('content')
            <h2 class="content-subhead">Base 32 decoder </h2>
            <p>
                To use this layout, you can 
            </p>

            <form method="post">
       <br>
        
        String to decode <input type="text" name="string" size="1">
      
        <input type="submit" value="decode!"><br>

    </form> 
            
@stop
