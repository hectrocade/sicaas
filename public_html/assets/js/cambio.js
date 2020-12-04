console.log("validar");
function capturar(){

const passw1 = document.getElementById('pass1').value;
const passw2 = document.getElementById('pass2').value;
const alert1 = document.getElementById('coincide');
const alert2 = document.getElementById('nocoincide');

if (passw1==passw2) {
    alert1.style.display = "block";
    alert2.style.display = "none";
    document.getElementById('submit').disabled=false;

}else{
    alert2.style.display = "block";
    alert1.style.display = "none";
}


}

