<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Developer's Best Friend</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">





  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/combo/1.17.16?/css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/style.css">
    <!--<![endif]-->
  




    
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->


    

    
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41480445-1', 'purecss.io');
ga('send', 'pageview');
</script>


</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">Generate</a>

            <ul>
                <li><a href="/">Home</a></li>
                <li class="menu-item-divided pure-menu-selected">
                    <a href="Lorem">Lorem Ipsum </a>
                </li>

                <li><a href="User">Random User </a></li>
                <li><a href="XKCD">XKCD Password</a></li>
             
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Developer's Best Friend</h1>
            <h2>Home</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">How </h2>
            <p>
                To use this layout, you can 
            </p>

            <form method="post">
       <br>
       
       # of Users <input type="text" name="title" size="1">
       
      
        <input type="submit" value="generate!"><br>

    </form> 
            



 
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
