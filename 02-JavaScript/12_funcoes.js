//Funcoes em JavaScript

//Declaração de função (Function Declaration)
function saudacao(nome){
    return `Olá, ${nome}!`;
}

console.log(saudacao('Maria')); // Chamada da função

//Expressão de função (Function Expression)
const soma = function(a, b){
    return a + b;
}
console.log(soma(5, 3)); // Chamada da função

//Função anônima (sem nome)
const multiplicacao = function(a, b){
    return a * b;
}
console.log(multiplicacao(4, 6)); // Chamada da função