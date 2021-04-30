    <head>
        <meta charset="utf-8">
        <title>Willow Weiner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href=<?php dirname(__FILE__)?>"/pictures/favicon.png">
        <link type="text/css" rel="stylesheet" href=<?php dirname(__FILE__)?>"../normalize.css">
        <link rel="stylesheet" type="text/css" href=<?php dirname(__FILE__)?>"../style.css">
        <link rel="stylesheet" type="text/css" href=<?php dirname(__FILE__)?>"../grid.css">
    </head>
    
    <header>


        <h1 class="logo">Willow Weiner </h1>
        
        <nav id="navigation">
            <ul>
                <li><a href=<?php dirname(__FILE__)?>"portfolio.php">Nexial Prize Portfolio<a></li>

            </ul>
        </nav>

        <div id="hamburger" onclick="hamburger_toggle()">
            <div class="hamburger-toggle" id="hamburger-toggle" >
                <span></span>
                <span></span>
            </div>
            <script type="text/javascript">
                function hamburger_toggle(){
                    var element = document.getElementById("hamburger-toggle");
                    element.classList.toggle("active");
                    var nav = document.getElementById("navigation");
                    nav.classList.toggle("active");
                }
            </script>
        </div>

        <div class="break black social-media">  
            <ul>
                <li><a href="https://thewillowisp.bandcamp.com"></a></li>
            </ul>
        </div>
    </header>