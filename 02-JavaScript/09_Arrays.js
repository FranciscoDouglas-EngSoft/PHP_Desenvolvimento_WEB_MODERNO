//Arrays em JavaScript

//Declaração de um array
let array = ['string', 1, true];
console.log(array);

//Acessando valores do array
console.log(array[0]);
console.log(array[1]);
console.log(array[2]);
console.log(array[3]); //undefined

//Manipulando arrays
array.push('novo valor'); //adiciona um valor no final do array
console.log(array);

//Metodos pop, shift, unshift, splice, slice
array.pop(); //remove o último valor do array
console.log(array);
array.shift(); //remove o primeiro valor do array
console.log(array);
array.unshift('novo valor no início'); //adiciona um valor no início do array
console.log(array);
array.splice(1, 2); //remove valores a partir do índice 1, removendo 2 elementos
console.log(array);
let novoArray = array.slice(0, 2); //cria um novo array a partir do índice 0 até o índice 2 (não inclui o índice 2)
console.log(novoArray);