var cekMedian = (params) => {
    var median = 0, panjangData = params.length;
    params.sort();

    if (panjangData % 2 == 0) {
        median = (params[panjangData / 2 - 1] + params[panjangData / 2]) / 2; //Jika data merupakan data genap
    } else {
        median = (params[panjangData - 1]) / 2; // Jika data ganjil
    }
    console.log(median)
}

cekMedian([0,1,2,4,5,3]);