var myLink = document.getElementById("mylink");
let iterations = 0;

myLink.onclick = function () {
  if (iterations === 0) {
    oblicz();

    setTimeout(() => {
      script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "canvas.js";
      document.getElementsByTagName("head")[0].appendChild(script);
    }, 50);

    iterations++;
  } else {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    // window.cancelAnimationFrame(myReq);
    cancelAllAnimationFrames();
    i = 0;
    oblicz();
    canvas.width = T[T.length - 1] * 105;
    canvas.height = H[0] * 120;
  }

  return false;
};

function cancelAllAnimationFrames() {
  var id = window.requestAnimationFrame(function () { });
  while (id--) {
    window.cancelAnimationFrame(id);
  }
}