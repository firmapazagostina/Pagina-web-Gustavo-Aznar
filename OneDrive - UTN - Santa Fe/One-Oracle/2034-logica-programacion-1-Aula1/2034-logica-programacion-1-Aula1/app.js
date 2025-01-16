let numeroSecreto = 6;
let numeroUsuario = prompt("Me indicas un numero por favor:");

console.log(numeroUsuario);

if (numeroUsuario == numeroSecreto) {
    alert(`Acertaste! El numero es ${numeroUsuario}`);
}
else {
    //La condición no se cumplió
    alert('Lo siento, no acertaste el número');
}
