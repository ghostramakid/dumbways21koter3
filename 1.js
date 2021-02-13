var checkKalimat = (params) => {
    const kalimat = params;
    var convert = kalimat.split(" "),panjangArray = convert.length;

    for(i = 0; i <= panjangArray; i++) {
        var ambilArray = convert[i];
        var inisial = ambilArray.substring(0,1);
        console.log(inisial+",") //Saya tidak tau kenapa print newline terus :(
    } 

}

checkKalimat("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.")