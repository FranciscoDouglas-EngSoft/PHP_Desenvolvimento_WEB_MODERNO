//Objetos em JavaScript
let pessoa = {
    nome: 'Marcio',
    idade: 32,
    profissao: 'Desenvolvedor',
    apelidos: ['Marcinho', 'Marquinhos'],
    saudacao: function(){
        console.log('Olá, meu nome é ' + this.nome);
    }

}

let p1 = pessoa.nome; //Acessando a propriedade nome do objeto pessoa
console.log(p1);

let p2 = pessoa.idade; //Acessando a propriedade idade do objeto pessoa
console.log(p2);