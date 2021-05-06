<!DOCTYPE html>
<html lang="en-US">
	<head>
	    <meta charset="utf-8">
	    <title>w i l l o w i s p</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="style.css">
	    <link rel="stylesheet" type="text/css" href="grid.css">
	    <link rel="stylesheet" type="text/css" href="projectsStyle.css">
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
				<!--GUITAR IMPROV SYSTEM-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">
                    	Improvisational System with Sample Feedback,
                    	<span class="date"> 2021.</span>
                    </h2> 
                    <dir class = "container item-1-2 list-item">
                        <p>
                            When improvising, I sometimes play a musical phrase in response to a note. In the project, I designed a MaxForLive patch that improvises in this fashion.
                        </p>  
                        <p>
                            First, musical samples are recorded and labeled with the note after which they should be played.
                        </p>  
                        <p>
                            Then, sofware detects the notes you are playing, and plays back recorded audio as appropriate. 
                            This is fed back into the system&mdash;and even more audio is played back in response.
                            See the system diagram for more detail.
                        </p>
                        <p>
                            This leads to host of possible sonic output.
                            I have included audio examples from a recent solo acoustic guitar improvisation.
                        </p>

                        <dir class="container item-1-1">
                        	<iframe class = "item-1-1 soundcloudPlaylist"  width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1250148727%3Fsecret_token%3Ds-hkco0uImpib&color=%237df9ff&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/improvisational-system-with-sample-feedback-examples/s-hkco0uImpib" title="Improvisational System with Sample Feedback Examples" target="_blank" style="color: #cccccc; text-decoration: none;">Improvisational System with Sample Feedback Examples</a></div>
                    </dir>

                    </dir>
                    <img class="item-1-2 pic" src="projects/improv_system_diagram.jpeg">

                    

                </dir>
				<!--MULTISCALE MARKOV CHAINS-->
				<dir class="container item-1-1">
					<h2 class="item-1-1">
						String Generation with Multi-Scale Self-Similarity, 
						<span class="date">2020-21.</span> 
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

                            To generate tokens after it, a metric (from combinatorics or DSP) is used to measure how 'self-similar' the sequence is on each of a set of frequencies.
                        </p>
                        <p>
                            We choose the frequency upon which the sequence is least 'self-similar'.
                            The next token is chosen to maximize the 'self-similarity' of the sequence on that frequency. 
                            This can be done both deterministically and stochastically (for instance, using Markov Chains).
                        </p>

                        <p>
                            I have provided some example output in the SoundCloud playlist.

                            "Sine1" and "Song1" were generated real-time from singing over a drone.
                            The rest of the examples were generated from drum patterns.
                        </p>
					</dir>
					<dir class="container item-1-2">
						<dir class = "item-1-1 soundcloudPlaylist">
							<iframe style="padding:10px;" width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay"src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1199241910%3Fsecret_token%3Ds-btbym6aGdpF&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;padding-left: 10px;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/multiscale_markov-demos/s-btbym6aGdpF" title="multiscale_markov demos" target="_blank" style="color: #cccccc; text-decoration: none;">multiscale_markov demos</a></div>
						</dir>
					</dir>
				</dir>
                <!--MICROTONAL MODULATION-->
                <dir class="container item-1-1">
                    <h2 class="item-1-1">
                    	Microtonal Modulation, 
                    	<span class="date">2020.</span>
                    </h2>
                    <dir class = "container item-1-2 list-item">
                    	<p>
                    		In a number of muscial traditions, techniques are established for shifting between sets of pitches, key centers, or modes (e.g., Carnātic grahabēdham and ragamalika, Western modulation, etc.).
                    	</p>
                    	<p>
                    		As official MIDI specifications do not support microtonal music, software tools using MIDI rarely do either.

                    	</p>
                    	<p>
                    		This Max patch/MaxForLive MIDI effect allows for real-time transposition and modulation in any pitchset.

                    		It provides support for Scala (.scl) and Max coll (.txt) tuning files, and is compatible with any synth that supports MIDI MPE.

                    	</p>
                    	<p>
                    		After some minor tweaks to the UI, I plan on making this patch available for free download.
                    	</p>
                    	<p>
                    		Listen to the examples to hear some sounds I've made with it.
                    	</p>
                    </dir>
                    <dir class="container item-1-2">
                        <iframe class="item-1-1 soundcloudPlaylist" width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1250139673%3Fsecret_token%3Ds-Oqf9Jzl1dRx&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/microtonal-modulation-examples/s-Oqf9Jzl1dRx" title="Microtonal Modulation Examples" target="_blank" style="color: #cccccc; text-decoration: none;">Microtonal Modulation Examples</a></div>
                    </dir>
                </dir>

				<!-- AVC Final Project - Eye Grid -->
				<dir class="container item-1-1">
					<h2 class=" item-1-1">eye_grid, 
						<span class="date">2020.</span> 
					</h2>
					<!-- The video, hosted on vimeo -->
					<dir class="container item-1-2">
						<dir class="aspect-ratio-container-1-1">
							<iframe class="responsive-iframe" src="https://player.vimeo.com/video/503416771" class="item-1-1" width="100vw" height="1000vw" frameborder="0"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
						</dir>
					</dir>
					<dir class="item-1-2 list-item">
						<p> 
							This project is a collaboration with 
							<a href="https://github.com/naneko">Kiera Saltz</a>, 
							made for
							<a href="https://elistine.com/">Eli Stine</a>'s 
							Fall 2020 
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

				<!-- Visual Art -->
				<?php include('projects/visual_art.php'); ?>
				<!--MUSIC-->

				<dir class="container item-1-1">
    				<h2 class="item-1-1">Musical Sketchbook</h2>
    				<dir class="item-1-1 list-item">
						<p> 
							I make music!
							Recently, I have been exploring polyrhythmic grooves and thickly contrapuntal textures.
						</p>
						<p>
							Here is a collection of some sounds I am working on!
						</p>
					</dir>

					<dir class="container item-1-1">
						<dir class = "item-1-1 soundcloudPlaylist">
							<iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1253155549&color=%238b165f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/willows_wisp" title="willowisp" target="_blank" style="color: #cccccc; text-decoration: none;">willowisp</a> · <a href="https://soundcloud.com/willows_wisp/sets/sketchbook-1" title="Sketchbook" target="_blank" style="color: #cccccc; text-decoration: none;">Sketchbook</a></div>
						</dir>
					</dir>
    			</dir>
 

				<!--WILLOWWEINER.COM-->
				<dir class="container">
					<dir class="container item-1-1">
						<h2 class="item-1-1">
							willowweiner.com, 
							<span class="date">2019-21.</span>
						</h2>
						<dir class="item-1-3 list-item">
							<p> I started coding this site in May 2019. I came into the project with no front-end programming experience, and it is certaintly a work in progress. </p>
							<p> Coded from scratch (albiet with the help of many youtube tutorials), the project has given me a decent understanding of <em>HTML</em> and <em>CSS</em>, and the shallowest of dives into what can be done with <em>JavaScript</em>. </p>
							
						</dir>
						<dir class="container item-2-3">
							<img class="item-1-1 pic" src="pictures/website.png" alt="A picture of this website in development. A text editor with code is on the left side, and this webpage is on the right side. The image has been recursively scaled down and layed on top of itself several times. This gives an impression of concentric, rectangular stripes.">
						</dir>
					</dir>
				</dir>
					
			


				<!-- Winter Term Guitar Recital -->

				<!-- Linear Optimization Course Scheduling -->
				<!-- Linear Optimization Twitter Bot Identification -->

			</dir> <!-- end of id="projects"-->
		</dir>


		

	</body>

	<?php include('footer.php'); ?>

</html>