const Parallax = require('parallax-js')

window.addEventListener("load", function(event) {
    let scene = document.getElementById('scene');
    let parallaxInstance = new Parallax(scene,{
        relativeInput: true,
        hoverOnly: true,
        selector: '.layer',
        invertX: true,
        invertY: true,
    });
});
