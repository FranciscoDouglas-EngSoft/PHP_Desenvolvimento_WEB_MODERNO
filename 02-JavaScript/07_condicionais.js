//Instrucoes condicionais if...else

let temperatura = 36.5
let febre = temperatura >= 37.5
let muitoFebre = temperatura >= 39.0
let baixaTemperatura = temperatura < 36.0

if (febre) {
    console.log("Você está com febre.") 
    if (muitoFebre) {
        console.log("Procure um médico.")
    } else if (baixaTemperatura) {
        console.log("Você está com hipotermia.")
    }
} else {
    console.log("Você não está com febre.")
}

//Operador ternário
let status = febre ? "Com febre" : "Sem febre"
console.log("Status:", status)