function desactivarSensores() {
    console.log('desactivar sensores')
    var estadoSensor = document.getElementById('sensor-1').disabled;
    
    if( estadoSensor == true) {
        document.getElementById('sensor-1').disabled = false;
        document.getElementById('sensor-2').disabled = false;
    }
    if( estadoSensor == false) {
        document.getElementById('sensor-1').disabled = true;
        document.getElementById('sensor-2').disabled = true;
    }


    //document.getElementById('sensor-1').disabled = !document.getElementById('sensor-1').disabled;
    //document.getElementById('sensor-2').disabled = !document.getElementById('sensor-2').disabled;  
}