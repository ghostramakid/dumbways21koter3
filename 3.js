var faktorial = (n) => {
    var x = 1, i = 1;
    
    while (i<=n) {
        x = x * i;
        i++;
    }
    return x;
}

var segitiga = (z) => {
    for(i = 0; i < z; i++) {
        for(j = 0; j < z-i-1; j++) {
            console.log(" ");
        }
        for(j=0; j<=i; j++) {
            console.log((faktorial(i) / faktorial(j) * faktorial(i-j)) + " ");
        }
    }
    return 0;
}
segitiga(5);