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
                <dir class="container item-1-1">
                    <h2 class="item-1-1">README</h2> 
                    <dir class = "container item-1-1 list-item">
                        <p>
                            Please use Google Chrome (preferably) or Safari, if possible. 
                            I have not done much testing on other web browsers.
                        </p>
                        <p>
                            Likewise, this website is best experienced on a wide screen. 
                            By that, I mean a computer is preferable to a phone or narrow browser window.
                        </p>
                        <p>
                            In the musical examples, please feel free to jump around in whatever way your interest takes you! 
                            10-15 seconds is probably enough to grasp the gist for most of the examples.
                        </p>
                        <p>
                            It is okay if you do get not to everything, especially in the 'Visual Art' section. 
                            I understand your time is limited. 
                            This portfolio was meant to give you a taste of the sorts of work I do.
                            I also wanted to include enough so that (hopefully) everyone can find something of interest!
                        </p>
                        <p>
                            Thanks for reading! I hope your day is going well!
                        </p>
                    </dir>
                </dir>
                <!--MULTISCALE MARKOV CHAINS-->
                <dir class="container item-1-1" >
                    <h2 class="item-1-1" id="multiscale_sequence_project">
                        Generation of Sequences that are Self-Similar on Multiple Scales
                    </h2> 
                    <dir class = "container item-1-2 list-item">
                        <p>
                            In this project, I aim to generate sequences of tokens that are self-similar on multiple scales. 

                            The motivation here is in the formal structure of music&mdash;which is self-similar on many scales (subdivision, beat, bar, phrase, section, etc.).
                        </p>    
                        <p>
                            These tokens can be all sorts of things. 
                            A sequence of notes would make a melody. 
                            More abstract encodings could be used to make things like polyphonic drum patterns and visual imagery.
                        </p>
                        <p>
                            First, an input sequence is chosen. 

                            To generate tokens after it, we use a metric (from combinatorics or Digital Signal Processing) to find out how 'self-similar' the sequence is on a set of frequencies.
                        </p>
                        <p>
                            We choose the frequency upon which the sequence is least 'self-similar'.
                            The next token is chosen to maximize the 'self-similarity' of the sequence on that frequency.
                        </p>
                        <p>
                            I have provided some example output in the SoundCloud playlist.

                            "Sine1" and "Song1" were generated real-time from singing over a drone.
                            The rest of the examples were generated from drum patterns.
                        </p>
                    </dir>
                    <dir class="container item-1-2">
                        <iframe class = "item-1-1 soundcloudPlaylist" width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1250395738%3Fsecret_token%3Ds-dHghsrw1gDW&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/nexial-multiscale-demos/s-dHghsrw1gDW" title="Nexial Multiscale Demos" target="_blank" style="color: #cccccc; text-decoration: none;">Nexial Multiscale Demos</a></div>
                    </dir>
                </dir>
                <!--GUITAR IMPROV SYSTEM-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Improvisational System with Sample Feedback</h2> 
                    <dir class="container item-1-2">
                        <iframe class = "item-1-1 soundcloudPlaylist"  width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1250148727%3Fsecret_token%3Ds-hkco0uImpib&color=%237df9ff&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/improvisational-system-with-sample-feedback-examples/s-hkco0uImpib" title="Improvisational System with Sample Feedback Examples" target="_blank" style="color: #cccccc; text-decoration: none;">Improvisational System with Sample Feedback Examples</a></div>
                    </dir>
                    <dir class = "container item-1-2 list-item">
                        <p>
                            When improvising, I sometimes play a musical phrase in response to a note. In the project, I designed software that improvises in this fashion.
                        </p>  
                        <p>
                            First, musical samples are recorded and labeled with the note after which they should be played.
                        </p>  
                        <p>
                            Then, sofware detects the notes you are playing, and plays back recorded audio as appropriate. 
                            This is fed back into the system&mdash;and even more audio is played back in response.
                        </p>
                        <p>
                            This leads to host of possible sonic output.
                            I have included audio examples from a recent solo acoustic guitar improvisation.
                        </p>
                    </dir>
                </dir>

                <!--MICROTONAL MODULATION-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Microtonal Modulation</h2> 
                    <dir class = "container item-1-2 list-item">
                        <p>
                            In a lot of music (and most western music), all pitches (notes) can be thought about in relation to a specific note (the 'pitch center'). 
                            We might say, "This song is in the key of C" (that means that C is the pitch center).
                        </p>
                        <p>
                            In music theory, modulation is when that pitch center changes. 
                            The other pitches change to maintain their relationship to the pitch center.
                        </p>
                        <p>
                            In most western music, the octave is divided into 12 notes evenly. 
                            That means that after modulation, you end up with the same set of pitches you started with.
                        </p>
                        <p>
                            That is not true for the tuning systems of many traditions (in both western music and in music from other cultures). 
                        </p>
                        <p>
                            This project extends the notion of modulation to every possible tuning system, and allows for easy modulation in real-time.
                            It also extends functionality of many software tools and instruments, so that they can be played in any tuning system.
                        </p>    
                        <p>
                            Unfortunately, microtonal modulation is not easy to listen for without extensive ear training.
                            I have included two examples from my musical practice, but it is okay if you can not identify anything you are hearing!
                        </p>
                    </dir>
                    <dir class="container item-1-2">
                        <iframe class="item-1-1 soundcloudPlaylist" width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1250139673%3Fsecret_token%3Ds-Oqf9Jzl1dRx&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/microtonal-modulation-examples/s-Oqf9Jzl1dRx" title="Microtonal Modulation Examples" target="_blank" style="color: #cccccc; text-decoration: none;">Microtonal Modulation Examples</a></div>
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
                            This project is a collaboration with Kiera Saltz.
                            It was made using TouchDesigner, GLSL shaders, Ableton Live, MaxForLive, and OSC.
                        </p>
                        <p>
                            To me, <em>eye_grid</em> is focused on the joys and innate loneliness that come with conciseness. Existence is beautiful— but because we are all in separate minds, we perceive the world differently and can never exactly share that which we experience. 
                        </p>
                        <p>
                            Much of the visual language is composed of simple grids, coecentric shapes, and centered circles.

                            We designed and coded a User Interface (UI) which functions very similarly to a lighting console. 
                            It allows for easy scene and parameter changes. 
                            You can see the interface in the image below.
                        </p>
                        <p>
                            The project is set up for live audiovisual performance. 
                            The UI can be easily configured to perform other songs.
                        </p>
                        <p>
                            Again, please feel free to jump around! 
                            Some of my favorite imagery occurs at 0:00-0:47, 1:35-1:50, 1:58-2:07 and after 2:27. 
                        </p>
                        <img class="item-1-1" src="/pictures/eye_grid_gui.png" alt="A picture of the GUI for this project. There are assorted sliders and graphs. Several component previews are available. A scene designer and transition control strip are at the bottom.">
                        
                    </dir>

                </dir>

                <!--VISUAL ART-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Visual Art</h2>
                    <dir class="item-1-1 list-item">
                        <p>
                            You can hover your mouse over each image to get more information.
                            When hovering, the 2nd line of text is the medium. 
                            If there are words you are unfamiliar with in that line, they are coding languages or applications used to generate the image.
                        </p>
                    <!--
                        <p>
                            The rest of the text here is the definition of a <em>shader</em>. 
                            I would recommend skipping over it, and coming back if you feel you need the context later.
                        </p>
                        <p>
                            A <em>shader</em> is a set of instructions that tells a pixel what color it should display.
                            Shaders are run for every pixel in an image all at the same time.
                            The shader figures out what color should be output only based on the x- and y- coordinates of the pixel (and sometimes other parameters, like how long the shader has been running).
                        </p>    
                        <p>
                            Shader programming is highly used in visual graphics. It also makes things like dynamic system simulation and matrix multiplication fairly easy.
                        </p>
                    -->
                    </dir>

                    <!--Sky-->
                    <dir class="item-1-3 container pic-hover-container">
                        <img class="item-1-1 pic" src="/projects/sky.png" alt="">
                        <dir class="pic-hover-text">
                            <p>
                                <em>clouds</em> 2020. <br>
                                TouchDesigner and GLSL shaders.
                            </p>
                            <p>
                                A yellow circle (the Sun) is drawn on a blue background.
                                A noise function simulates the density of cloud cover.
                                A shader simulates the Sun's diffraction through clouds.
                            </p>
                        </dir>
                    </dir>

                    <!--Growing Circles-->
                    <dir class="container item-1-3 pic-hover-container">
                        <video class="item-1-1 pic responsive-iframe" src="/projects/circles_grow.mp4" alt="" controls loop autoplay playsinline></video>
                        <dir class="pic-hover-text">
                            <p>
                                <em>circles_grow</em> 2021. <br>
                                Processing.
                            </p>
                            <p>
                                Circles are added randomly.
                                Circles grow.
                                When a circle is growing, if it comes in contact with another growing circle, both circles stop growing.
                            </p>
                        </dir>
                    </dir>
                <!--

                    <dir class="aspect-ratio-container-1-1 container item-1-3">
                        <iframe title="vimeo-player" class="responsive-iframe" src="https://player.vimeo.com/video/529517905" frameborder="0" allowfullscreen></iframe> 
                    </dir>
                -->
                    <!--Album Style Transfer-->
                    <dir class="item-1-3 container pic-hover-container">
                        <img class="item-1-1 pic" src="/projects/album_style_transfer.png" alt="">
                        <dir class="pic-hover-text">
                            <p>
                                <em>Untitled</em> 2019. <br>
                                Digital, Python, TensorFlow.
                            </p>
                            <p>
                                This is an example of <a href="https://en.wikipedia.org/wiki/Neural_Style_Transfer">neural style transfer</a>.
                                Neural style transfer is a technique that uses Neural Networks to render an image (here, an original digital image) in the style of another image (here, Monet's <a href="https://en.wikipedia.org/wiki/Impression,_Sunrise#/media/File:Monet_-_Impression,_Sunrise.jpg">Impression, Sunrise</a>).
                            </p>
                        </dir>
                    </dir>

                    <!--Multiscale Turing Pattern-->
                    <dir class="item-2-3 container pic-hover-container">
                        <dir class="aspect-ratio-container-2-3">
                            <video class="item-1-1 responsive-iframe" src="/projects/multiscale_take2.mp4" alt="" controls loop autoplay playsinline></video>
                        </dir>
                        <dir class="pic-hover-text">
                            <p>
                                <em>Multiscale Turing Pattern</em> 2020. <br>
                                OPENRNDR, GLSL shaders. 
                            </p>
                            <p>
                                A turing pattern forms when two liquid chemicals react with one another while diffusing.
                                These patterns can look similar to stripes on a Zebra.
                            </p>
                            <p>
                                This is my implementation of Johnathan McCabe's <a href="http://www.jonathanmccabe.com/Cyclic_Symmetric_Multi-Scale_Turing_Patterns.pdf">Multiscale Turing Patterns</a>.
                                The idea here is to run many Turing Patterns at one time, with multiple spatial scales (stripe widths). 
                                At each step, we calculate which spatial scale has least variability. 
                                We use the Turing pattern at that scale to maximize variability across scales.
                            </p>
                            <p>
                                This idea was part of the inspiriation for my 
                                <a href="#multiscale_sequence_project">
                                    project on generating self-similar tokens
                                </a>
                                !
                            </p>
                        </dir>
                    </dir>

                    <!--Continuous 1d Cellular automata-->
                    <dir class="item-1-3 pic-hover-container container">
                        <dir class="aspect-ratio-container-1-1">
                            <img class="responsive-iframe" src="/projects/cont_ca.jpg" alt="">
                        </dir>
                        <dir class="pic-hover-text">
                            <p>
                                <em>Untitled</em> 2021. <br>
                                Processing, GLSL shader. 
                            </p>
                            <p>
                                This is a one-dimensional cellular automata.
                                Each pixel is dependant on the 3 pixels immediately above it.
                                In this case, the brightness of those 3 cells are added together. Then a small constant is added. The part after the decimal is taken as the new pixel's brightness.
                            </p>
                        </dir>
                    </dir>

                    <!-- Hexgrid Shader-->
                    <dir class="container item-1-3 pic-hover-container">
                        <dir class="aspect-ratio-container-1-1 container">
                            <video class="item-1-1 pic" src="/projects/hexgrid.mp4" alt="" controls loop autoplay playsinline></video>
                        </dir>
                        <dir class="pic-hover-text">
                            <p>
                                <em>hex_grid</em> 2019. <br>
                                GLSL shader. 
                            </p>
                        </dir>
                    </dir>

                    <!--Growing Green Handdrawn flipbook-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3 pic-hover-container">
                        <video class="item-1-1 pic" src="/projects/flipbook_green_growth.mp4" alt="" controls loop autoplay playsinline></video>
                        <dir class="pic-hover-text">
                            <p>
                                <em>growth</em> 2020. <br>
                                Digital.
                            </p>
                        </dir>
                    </dir>

                    <!--Dot Grid Shader-->
                    <dir class="aspect-ratio-container-1-1 container item-1-3 pic-hover-container">
                        <dir class="aspect-ratio-container-1-1 item-1-1">
                            <canvas class="glslCanvas item-1-1 responsive-iframe" data-fragment-url="/projects/dot_grid_shader.frag"></canvas>
                        </dir>
                        <dir class="pic-hover-text">
                            <p>
                                <em>dot_grid</em> 2019. <br>
                                GLSL shader.
                            </p>
                            <p>
                                An exploration of <a href="https://en.wikipedia.org/wiki/Moir%C3%A9_pattern"> Moiré Patterns</a>.
                            </p>

                        </dir>
                    </dir>

                    <!--Animated WallPaper Shader-->
                    <dir class="aspect-ratio-container-1-1 item-1-3 container pic-hover-container">
                        <video class="item-1-1 pic responsive-iframe" src="/projects/animated_wallpaper_shader.mp4" alt="" controls loop autoplay playsinline></video>
                        <dir class="pic-hover-text">
                            <p>
                                <em>animated_wallpaper</em> 2020. <br>
                                GLSL shader.
                            </p>
                        </dir>
                    </dir>

                    <!--Turing Pattern Blue Purple-->   
                    <dir class="item-2-3 container pic-hover-container">
                        <dir class="aspect-ratio-container-2-3">                    
                            <img class="responsive-iframe" src="/projects/turing_pattern.png">
                        </dir>
                        <dir class="pic-hover-text">
                            <p>
                                <em>Turing Pattern</em> 2020. <br>
                                OPENRNDR, GLSL shader.
                            </p>
                            <p>
                                When two liquid chemicals react with one another under diffusion, a Turing pattern like this one is formed. 
                            </p>
                        </dir>
                    </dir>
                </dir>
            
                <!-- Winter Term Guitar Recital -->

                <!-- Linear Optimization Course Scheduling -->

            </dir> <!-- end of id="projects"-->
        </dir>


        

    </body>

    <?php include('/footer.php'); ?>

</html>
