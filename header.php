    <header>


        <h1 class="logo">willowisp</h1>
        
        <nav id="navigation">
            <ul>
                <li><a href=<?php dirname(__FILE__)?>"/index.php">Home<a></li>
                <li><a href=<?php dirname(__FILE__)?>"index.php">Biography<a></li>
                <li><a href=<?php dirname(__FILE__)?>"projects.php">Projects</a></li>
                <li><a href=<?php dirname(__FILE__)?>"music.php">Music</a></li>
                <li><a href=<?php dirname(__FILE__)?>"contact.php">Contact</a></li>

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
                <li><a href="https://thewillowisp.bandcamp.com">Bandcamp</a></li>
                <li><a href="https://soundcloud.com/willows_wisp">SoundCloud</a></li>
                <li><a href="https://www.facebook.com/willow.weiner.music">Facebook</a></li>
                <li><a href="https://www.youtube.com/channel/UCjAAyzt8irPBNX-Ttcol_jg">YouTube</a></li>
            </ul>
        </div>
    </header>