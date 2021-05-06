<!--VISUAL ART-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">Visual Art</h2>
                 
                    <!--Sky-->
                    <dir class="item-1-3 container pic-hover-container">
                        <img class="item-1-1 pic" src="/projects/sky.png" alt="">
                        <dir class="pic-hover-text">
                            <p>
                                <em>clouds</em> 2020. <br>
                                TouchDesigner, GLSL shaders.
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
                                When two liquid chemicals react with one another under diffusion, a Turing pattern like this one can be formed. 
                            </p>
                        </dir>
                    </dir>
                </dir>