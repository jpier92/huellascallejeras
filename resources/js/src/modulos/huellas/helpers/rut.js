

export function formatRut (value, sinPuntos) {
    var rutAndDv = splitRutAndDv(value);
    var cRut = rutAndDv[0];
    var cDv = rutAndDv[1];
    if (!(cRut && cDv)) { return cRut || value; }
    var rutF = "";
    var thousandsSeparator = ".";
    while (cRut.length > 3) {
        rutF = thousandsSeparator + cRut.substr(cRut.length - 3) + rutF;
        cRut = cRut.substring(0, cRut.length - 3);
    }
    var rutFinal = cRut + rutF + "-" + cDv;
    if (sinPuntos) { return rutFinal.replace(/\./g, ""); }
    else { return rutFinal; }
}

function splitRutAndDv(rut) {
    var cValue = clearFormat(rut);
    if (cValue.length === 0) { return [null, null]; }
    if (cValue.length === 1) { return [cValue, null]; }
    var cDv = cValue.charAt(cValue.length - 1);
    var cRut = cValue.substring(0, cValue.length - 1);
    return [cRut, cDv];
}

function clearFormat(value) { 
    return value.replace(/[\.\-\_]/g, "");
}

export function  verificarRut(rut) {
    var despejar = String(rut);
    var valor = despejar.trim().replace(/[-.\s]/g, '');
    valor = valor.replace('-', '');
    var cuerpo = valor.slice(0, -1);
    var dv = valor.slice(-1).toUpperCase();
    rut = cuerpo + '-' + dv;
    if (cuerpo.length < 7) { return false; }
    var suma = 0;
    var multiplo = 2;
    for (var i = 1; i <= cuerpo.length; i++) {
        var index = multiplo * valor.charAt(cuerpo.length - i);
        suma = suma + index;
        if (multiplo < 7) { multiplo = multiplo + 1; }
        else { multiplo = 2; }
    }
    var dvEsperado = 11 - (suma % 11);
    if (dv == 'K') { dv = 10; }
    else if (dv == '0') { dv = 11; }
    else { dv = dv; }
    if (dvEsperado != dv) { return false; }
    return true;
}

export function darFormatoRut(rut){
    var regexK = new RegExp('[k]+');
    var regexClean = new RegExp('[^0-9kK.-]+');
    var regexMutipleK = new RegExp('K(?=.*K)');
    var value = rut;
    rut = value.replace(regexK, 'K').replace(regexClean, '').replace(regexMutipleK, '');
    if (rut.length > 12) {
        rut = rut.substring(0, 12);
    }
    rut = formatRut(rut, false);
    return rut;
}
