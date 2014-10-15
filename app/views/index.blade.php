@extends('master')
@section('header')
<h1>Developer's Tool Kit</h1>
<h2>Home</h2>
@stop
@section('content')
<p>Developer's Tool Kit provides the developer with four tools to aid website/application development: A lorem ipsum generator, a random user generator, a base 32 encoder and a base 32 decoder. Only four tools were included due to time constrain, but the goal will be to keep adding tools in order to make website/application development tasks easier.<p>
<h2 class="content-subhead">Create Lorem </h2>
<p>
    On the Lorem application the user can create filler text in order to demonstrate graphic elements of a website or application. Lorem Ipsum text is a filler used to show how the actual text will be displayed once a web application is completed.
</p>
<h2 class="content-subhead">Create Users</h2>
<p>
    On the User application the developer can create random user data for websites or applications. Besides creating a random user by first name and last name, the developer has the option to create an address and a phone number for users.
</p>         
<h2 class="content-subhead">Base 32 Encode</h2>
<p>
    On the Base 32 Encoder application the user can encode arbitrary byte data using the twenty-six letters A-Z and six digits 2-7.
</p>
<h2 class="content-subhead">Base 32 Decode</h2>
<p>
    On the Base 32 Decoder application the user can decode data that has been base 32 encoded.
</p>
@stop 