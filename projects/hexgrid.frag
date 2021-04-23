//made from tutorial by The Art of coordinate
// https://www.youtube.com/watch?v=VmrIDyYiJBA


#ifdef GL_ES
precision highp float;
#endif


#define RT_3 1.7320508 //square root of 3


uniform vec2 u_resolution;
uniform float u_time;

//hexagigonal distance to a point (from center of hexagon)
//dependant on #define RT_3 1.7320508
float HexDist(vec2 p){
    p = abs(p); //take advantage of symmetry around the axes

    float c = dot(p, normalize(vec2(1,RT_3)));//drawing line for edge of hexagon
    c = max(c,p.x); //define hexagon in piecewise manner

    return c;
}

//Returns the grid for a hexagonal tiling (so you can get euclidean distance from center, etc.)
//dependant on #define RT_3 1.7320508
vec2 HexGrid(vec2 uv){

    vec2 r = vec2(1, RT_3); //the repeat rate/ shape of the grid
    vec2 h = r / 2.; //half of the repeat rate.
    vec2 a = mod(uv,r)-h;
    vec2 b = mod(uv-h,r)-h;

    vec2 gv = dot(a,a)<dot(b,b) ? a:b; //grid coordinates

    return gv;
}

//returns distance from edge of hexagon, polar coordinate (angle),
// and hexagon coordinate 
//dependant on HexGrid
vec4 HexCoords(vec2 uv){

    vec2 gv = HexGrid(uv); //grid coordinates

    float x = .5 - HexDist(gv);//distance from edge;
    float y = atan(gv.x,gv.y); //polar coordinate angle

    vec2 id = uv-gv; //which hexagon are we in???
    return vec4(x,y,id.x, id.y); 
}



void main() {

    //takes advantage of hexagon's symmetry around both axes
    vec2 uv = (gl_FragCoord.xy- .5*u_resolution.xy)/u_resolution.y;


    vec3 col = vec3(0.);

    //makes the hex grid
    float a = 12.;
    vec4 hc = HexCoords(a*uv);

    col.rgb += smoothstep(0.01,.1,hc.x); //frame of black hexagons

    col.r = 1.-(abs(hc.w)+abs(hc.z)+2.*sin(u_time))*.05;
    
    //various patterns for the green variable;
    float g1 = mod(floor(abs(hc.w)-.01)+hc.z,2.)*(sin(u_time*u_time*uv.x*.4)+1.)*.5;
    float g2 = mod(floor(abs(hc.w)-.01)+hc.z,2.);

    float b = 13.;
    float g3 = mod(hc.w*hc.z*hc.z+sin(u_time),b);

    //this is the same as g1, but with x and y switched
    vec4 rotHc = hc.yxzw;
    float g4 = mod(floor(abs(rotHc.z)-.01)+rotHc.w-.01,2.)*(sin(u_time*u_time*uv.y*.5)+1.)*.5;

    //this switches the green color through a cycle, every 7. seconds.
    float timer = floor(mod(u_time*.5*3.141592,8.));
    if(timer == 1. || timer == 2.)
        col.g = g1;
    else if (timer == 3.)
        col.g = g2;
    else if (timer == 4. || timer == 5.)
        col.g = g3;
    else if (timer == 7. || timer == 8.)
        col.g = g4;





    //col.g = g1 * floor(sin(u_time*u_time)*.5+.5);

    //gl_FragColor = vec4(col,1.);

    gl_FragColor = vec4( hc.xy-a*sin(u_time)*uv.xy,col.g, col.b);
}