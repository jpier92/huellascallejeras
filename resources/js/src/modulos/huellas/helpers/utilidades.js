
function calcularEdad (fechaNacimiento, fechaActual){
    // Calcula la diferencia en milisegundos entre las dos fechas
    console.log(fechaActual +' '+fechaNacimiento);
    const diferencia = fechaActual - fechaNacimiento;
  
    // Convierte la diferencia en años, meses y días
    const milisegundosEnUnDia = 1000 * 60 * 60 * 24;
    const milisegundosEnUnAnio = milisegundosEnUnDia * 365.25; // Aproximadamente 365.25 días en un año para contar bisiestos
  
    const anios = Math.floor(diferencia / milisegundosEnUnAnio);
    const meses = Math.floor((diferencia % milisegundosEnUnAnio) / (milisegundosEnUnDia * 30.44)); // Aproximadamente 30.44 días en un mes
    const dias = Math.floor((diferencia % (milisegundosEnUnAnio / 12)) / milisegundosEnUnDia);
  
    return 'años: '+anios+' meses: '+meses+' dias: '+dias;
  }

  export default calcularEdad;