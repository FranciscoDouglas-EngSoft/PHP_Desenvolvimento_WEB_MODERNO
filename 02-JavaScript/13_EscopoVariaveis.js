//Escopo de Variaveis em JavaScript

//Variável global
let mensagem = "Olá, Mundo!";

function exibirMensagem() {
    //Variável local
    let mensagemInterna = "Olá, Universo!";
    console.log(mensagemInterna); // Acessa a variável local
    console.log(mensagem); // Acessa a variável global
}