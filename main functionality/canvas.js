var canvas = document.getElementById("animation");
var ctx = canvas.getContext("2d");
x = 100;
y = 100;
vx = 0.0;
vy = 10;
r = 15;

canvas.width = T[T.length - 1] * 105;
canvas.height = H[0] * 120;

console.log(H);
console.log(T);
let myReq;

let i = 0;

function createCircle() {
// ctx.clearRect(0, 0, canvas.width, canvas.height);

if (i === H.length) {
    i = 0;
}

x += vx;
y += vy;

ctx.beginPath();
ctx.arc(T[i] * 100, canvas.height - H[i] * 120 - r, r, 0, 2 * Math.PI);
ctx.fillStyle = "grey";
ctx.fill();
ctx.stroke();
ctx.closePath();

i++;
myReq = window.requestAnimationFrame(createCircle);
}