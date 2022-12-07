var H, T, dt, freefall, g, h, h0, hmax, hnew, hstop, rho, t, t_last, tau, v, vmax;
h0 = 5;
v = 0;
g = 10;
t = 0;
dt = 0.001;
rho = 0.75;
tau = 0.1;
hmax = h0;
h = h0;
hstop = 0.01;
freefall = true;
t_last = -Math.sqrt(2 * h0 / g);
vmax = Math.sqrt(2 * hmax * g);
H = [];
T = [];

while (hmax > hstop) {
  if (freefall) {
    hnew = h + v * dt - 0.5 * g * dt * dt;

    if (hnew < 0) {
      t = t_last + 2 * Math.sqrt(2 * hmax / g);
      freefall = false;
      t_last = t + tau;
      h = 0;
    } else {
      t = t + dt;
      v = v - g * dt;
      h = hnew;
    }
  } else {
    t = t + tau;
    vmax = vmax * rho;
    v = vmax;
    freefall = true;
    h = 0;
  }

  hmax = 0.5 * vmax * vmax / g;
  H.push(h);
  T.push(t);
}

console.log("stopped bouncing at t=\n", t);
// console.log(H);
// console.log(T);
