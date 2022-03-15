function sommeNombresPremiers(nb1) {
    // Check if n is less than 2 => not prime
    if (nb1 < 2) return false;

    // Loop from 2 to square root of n
    for (let i = 2; i <= Math.sqrt(nb1); i++)
        // If i is a divisor of n, n is not prime
        if (nb1 % i == 0) return false;

    return true;
}
sommeNombresPremiers(2)