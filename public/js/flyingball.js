var cnv = document.getElementById("c1");
var ctx = cnv.getContext('2d');

var x = 30;
var y = 30;
var ballRad = 20;

var dx = 2;
var dy = -2;

function drawBall() {
    ctx.arc(x, y, ballRad, 0, 2 * Math.PI);
}

function draw() {
    drawBall();
    x += dx;
    y += dy;
}
setInterval(draw, 1);