<!DOCTYPE html>
<html lang="en-US">

<script type="text/javascript" src="https://rawgit.com/patriciogonzalezvivo/glslCanvas/master/dist/GlslCanvas.js"></script>

    First off, I am only hosting this on my website because moire patterns don't work well/at all with compression/screensharing. 
    If you happen to poke around other things on my website please don't judge me, it is currently under construction.

    <br>
    <br>
    
    Here is a version that is basically static dots: <br>
        <canvas class="glslCanvas" data-fragment-url="static.frag" width="900" height="900"></canvas>

        <br>
    Here is one that is animated: <br>
        <canvas class="glslCanvas" data-fragment-url="move.frag" width="900" height="900"></canvas>
        
        <br>
    In this one, you can move your mouse around: <br>
        <canvas class="glslCanvas" data-fragment-url="mouse.frag" width="900" height="900"></canvas>




</html>