function oblicz() {
    // Ep = mgh
    let m = 0.3;
    let g = 9.81;
    let H = 2;
    let Ep;
    Ep = m * g * H;

    // Ek = 0.5 * m * v^2
    let Ek;
    Ek = 0.5 * m * v * v;


    let wynik;
    wynik = (Ep + Ek);
    console.log(wynik);
}

oblicz();