#ifdef GL_ES
precision highp float;
#endif

#define TWO_PI 6.28318530718


uniform vec2 u_resolution;
uniform vec2 u_mouse;
uniform float u_time;


float circle(vec2 st, vec2 pos,float radius){
    float dist = distance(st,pos);
    return smoothstep(radius,radius*.97, dist);
    //return smoothstep(1.,.9+(radius-.3)*.25,pow(distance(st,pos)/radius,3.));
}

void main() {
    vec2 st = gl_FragCoord.xy/u_resolution;
    
    vec2 m = u_mouse/u_resolution;
    vec2 p1 = vec2(.25);

    float speed = .1;
    float rad = (smoothstep(.0,1.,pow(mod(u_time*speed,1.),2.))+.5)*TWO_PI;

    vec2 p2 = p1;
  
    float dist = distance(p1,st);
    float dist2 = distance(p1,st);

    gl_FragColor = vec4(st.x*st.x*.6,0.,abs(sin(10.*dist2*dist*6.*(u_time+20.))),1.0);
}
