<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>w i l l o w i s p</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/grid.css">
        <link rel="stylesheet" type="text/css" href="/projectsStyle.css">
    </head>

    <!--GLSL Viewer-->
    <script type="text/javascript" src="https://rawgit.com/patriciogonzalezvivo/glslCanvas/master/dist/GlslCanvas.js"></script>

    
    <?php include('header.php'); ?>


    <body>


        <!--CURRENT PROJECTS-->
            <!--Shaders and Cellular Automata -->
            <!--Street Sign Dissections -->


        <!-- CS 241 VR Project (maybe include other CS projects here as well) -->

        <!-- Electroacoustic Performance (TECH 170) Concert -->
        
        <dir class="content">
            <dir class="container item-1-1" id="projects">

                <!--MULTISCALE MARKOV CHAINS-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Multi-scale Markov Chains</h2> 
                    <dir class = "container item-1-2 list-item">
                        <p>
                            In this project, I aim to generate strings of tokens that are self-similar on multiple scales. 
                            The motivation here is in the formal structure of music&mdash;which is self-similar on many scales (subdivision, beat, bar, phrase, section, etc.).
                        </p>    
                        <p>
                            To do so, I break a string into sets of substrings of various periodicity. 
                            Then, each of these sets is used to build a Markov chain. 

                            I then use these Markov chains to generate new tokens.
                        </p>        
                        <p> 
                            I made a <em> Max/MSP 'mxj' external</em>, which can build these models and generate new tokens, in real time.
                            The soundcloud playlist cointains examples of generated musical content using this system. Some of the examples are raw output. The others include composed accompanyment, to show that this technique can be practically applied in composition.
                            The corpus for each of the examples was either live improvised vocals or a MIDI drum pattern.
                        </p>
                        <p>
                            I have several ideas for further development of this project.
                        </p>
                        <p>
                            While generated output seems fairly perodic on the inteded scales, it is hard to say so objectively.
                            I would like to come up with some metric for repitition in a sequence.
                            Most work in this field is in genome analysis&mdash;working with very large strings in an offline enviornment&mdash;meaning it is not greatly applicable here.
                        </p>
                        <p>
                            Such a metric would allow for objective results. 
                            It would also allow for more self-similar output. 
                            Alogorithmic approaches (like McCabe's strategy for Multiscale Turing Patterns), or ML approaches would both be possible. 
                            Right now, I am only using feedback amplification to generate self-similar content&mdash;and I have no metric for seeing how successful I am!
                        </p>
                    </dir>
                    <dir class="container item-1-2">
                        <dir class = "item-1-1 soundcloud_playlist">
                            <iframe style="padding:10px;" width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay"src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1199241910%3Fsecret_token%3Ds-btbym6aGdpF&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;padding-left: 10px;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/multiscale_markov-demos/s-btbym6aGdpF" title="multiscale_markov demos" target="_blank" style="color: #cccccc; text-decoration: none;">multiscale_markov demos</a></div>
                        </dir>
                    </dir>
                </dir>
                <!--MICROTONAL MODULATION-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Improvisation system with pitch-based sample playback and feedback</h2> 
                        <dir class = "container item-1-2 list-item">
                            <p>
                               
                                In music theory, 'modulation' refers to  .

                                This project extends that notion for music using any .
                                Modern western 12-note equal division of the octave.
                            </p>    
                        </dir>
                </dir>

                <!--MICROTONAL MODULATION-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Microtonal Modulation</h2> 
                        <dir class = "container item-1-2 list-item">
                            <p>
                               
                                In music theory, 'modulation' refers to  .

                                This project extends that notion for music using any .
                                Modern western 12-note equal division of the octave.
                            </p>    
                        </dir>
                </dir>


                <!-- AVC Final Project - Eye Grid -->
                <dir class="container item-1-1">
                    <h2 class=" item-1-1">eye_grid</h2>
                    <!-- The video, hosted on vimeo -->
                    <dir class="container item-1-2">
                        <dir class="aspect-ratio-container-1-1">
                            <iframe class="responsive-iframe" src="https://player.vimeo.com/video/503416771" class="item-1-1" width="100vw" height="1000vw" frameborder="0"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </dir>
                    </dir>
                    <dir class="item-1-2 list-item">
                        <p> 
                            This project is a collaboration with Kiera Saltz, made for
                                <a href="https://elistine.com/">Eli Stine</a>'s Fall 2020 
                                <a href="https://timara.net/avc">Audiovisual Composition Class</a> 
                                at Oberlin College.
                        </p>
                        <p>
                            To me, <em>eye_grid</em> is focused on the joys and innate loneliness that come with conciesness. Existence is beautiful— but because we are all in separate minds, we perceive the world differently and can never exactly share that which we experience. 
                        </p>
                        <p>
                            Much of the visual language is composed of simple grids, coecentric shapes, and centered circles.

                            These basic visual elements are made with <em>GLSL</em> shaders. Post processing is handeled in <em>TouchDesigner</em>. 
                            We designed a GUI (see image below) which functions very similarly to a lighting console. It allows for easy scene and parameter changes.
                        </p>
                        <p>
                            The project is set up for live performance with <em>Ableton Live</em> and using <em>OSC</em> messages to communicate with the visual system.
                        </p>

                
                        <p>
                                While the audiovisual system is finished, the compositional elements are a rough draft. 
                            Some editing would likely take place before live performance.
                        </p>

                        <img class="item-1-1" src="pictures/eye_grid_gui.png" alt="A picture of the GUI for this project. There are assorted sliders and graphs. Several component previews are available. A scene designer and transition control strip are at the bottom.">
                        
                    </dir>

                </dir>

                <!--VISUAL ART-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Visual Art</h2>

                    <!--Sky-->
                    <img class="item-1-3 pic" src="../projects/sky.png" alt="">
                    <!--Growing Circles-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <video class="item-1-1 pic responsive-iframe" src="../projects/circles_grow.mp4" alt="" controls loop autoplay></video>
                    </dir>
                <!--

                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <iframe title="vimeo-player" class="responsive-iframe" src="https://player.vimeo.com/video/529517905" frameborder="0" allowfullscreen></iframe> 
                    </dir>
                -->
                    <!--Album Style Transfer-->
                    <img class="item-1-3 pic" src="../projects/album_style_transfer.png" alt="">

                    <!--Multiscale Markov-->
                    <dir class="item-2-3 container">
                        <dir class="aspect-ratio-container-2-3">
                            <video class="item-1-1 responsive-iframe" src="../projects/multiscale_take2.mp4" alt="" controls loop autoplay=""></video>
                        </dir>
                    </dir>

                    <!--Continuous 1d Cellular automata-->
                    <dir class="item-1-3">
                        <img class="item-1-1 pic" src="../projects/cont_ca.jpg" alt="">
                    </dir>

                    <!-- Hexgrid Shader-->
                    <dir class="container item-1-3">
                        <dir class="aspect-ratio-container-1-1 container">
                            <video class="item-1-1 pic" src="../projects/hexgrid.mp4" alt="" controls loop autoplay></video>
                        </dir>
                    </dir>

                    <!--Growing Green Handdrawn flipbook-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <video class="item-1-1 pic" src="../projects/flipbook_green_growth.mp4" alt="" controls loop autoplay></video>
                    </dir>

                    <!--Dot Grid Shader-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <canvas class="glslCanvas item-1-1 responsive-iframe" data-fragment-url="../projects/dot_grid_shader.frag"></canvas>
                    </dir>

                    <!--Animated WallPaper Shader-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <video class="item-1-1 pic responsive-iframe" src="../projects/animated_wallpaper_shader.mp4" alt="" controls loop autoplay></video>
                    </dir>

                    <!--Turing Pattern Blue Purple-->   
                    <dir class="item-2-3 container">
                        <dir class="aspect-ratio-container-2-3">                    
                            <img class="responsive-iframe" src="../projects/turing_pattern.png">
                        </dir>
                    </dir>
                </dir>
            
                <!-- Winter Term Guitar Recital -->

                <!-- Linear Optimization Course Scheduling -->

            </dir> <!-- end of id="projects"-->
        </dir>


        

    </body>

    <?php include('footer.php'); ?>

</html>