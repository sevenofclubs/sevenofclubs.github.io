<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7 of Clubs</title>
        
        <!-- Font with social media icon 
        <link rel="stylesheet" href="css/animation.css"> -->
        
        <!-- Foundation CSS -->
        <link rel="stylesheet" href="css/foundation.css">
        
        <!-- Fonts ??????????????-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type='text/css'>
        
        <!-- Main.css -->
        <link rel="stylesheet" href="main.css">
    
    <?php
        $i = rand(0, 1);
    ?>   

    </head>
    
    <body class = <?php if ($i == 0) echo "white"; ?> >

        <div class="sofc-menu">
        </div> 
        
        <div>
            <img class="sofc-landing-image" src=<?php if ($i == 0) echo "images/Logo_square(bONw).jpg"; else echo "images/Logo_square(wONb).jpg"?>>
        </div>      
        
        <div class = "row sofc-landing-text">
                <h1>"7 of Clubs"</h1>
                <h2> &#126; Your friends actually do cool things &#126; </h2>
                <p> Over past several years, there formed a circle of creative people in London unified by common culture, friends and love for arts. Most of them are doing amazing things for living or in their spare time. Many, however, are immersed into their own professional circles, without fully sharing their ideas with wider audience. </p>
                <p> We would like to uncover their interests to the others, share their specialist knowledge and encourage collaboration between people throughout multiple disciplines.</p>
        </div>
        
 
        <div class="row sofc-sign">
            <div class="small-6 medium-6 large-6 columns">
                <div class = "sofc-prev-sign">
                    <img class="chalk" src=<?php if ($i == 0) echo "images/Button-prev-w.jpg"; else echo "images/Button-prev-01.jpg"?> >
                    <h4>13 September, <br> 2016.</h4>
                </div>
            </div>  
            <div class="small-6 medium-6 large-6 columns">
                <div class = "sofc-next-sign">
                    <img class="chalk" src=<?php if ($i == 0) echo "images/Button-next_w.jpg"; else echo "images/Button-next.jpg"?>>
                    <h4>13 December, <br> 2016.</h4>
                </div>
            </div>
        </div>
            
            
        <div class="row footer">
            <p class="the-icons">
 <!--               <i> <a  class="demo-icon <?php if ($i == 0) echo white; ?>" href = "https://www.facebook.com/mikeo.designer?fref=ts">&#xe800;</a></i>-->
                <i> <a class="demo-icon <?php if ($i == 0) echo white; ?>" href = "https://www.facebook.com/groups/558311574326261/">&#xe801;</a></i>
                <i> <a class="demo-icon <?php if ($i == 0) echo white; ?>" href = "mailto:ivan.isakov@gmail.com">&#xe802;</a></i>
            </p>
            <h6>7 of Clubs, 2016 © All rights reserved</h6>
        </div>
             
        
  </body>
</html>