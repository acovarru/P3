
<html>
<head>
 
    
    

  
  
</head>

<h1>
    xkcd Password Generator<br> 
</h1>


<center>
    <body> 
    <form method="post">
       <br>
        <input type="checkbox" name="number" value="number"> Add number
        <input type="checkbox" name="symbol" value="symbol"> Add special symbol 
        <input type="checkbox" name="upper" value="upper"> Add Uppercase
        <input type="checkbox" name="hyphen" value="hyphen"> Add Hyphen<br>
        <br>
       # of symbols (max=4) <input type="text" name="symbol_number" size="1">
        # of words (max=9) <input type="text" name="word_number" size="1">
      
        <input type="submit" value="generate!"><br>

    </form> 
 <div>   
     <br>
<?php

require "logic.php";

?>         
</div>
  <body/>  
  </center>
</html>