//Operadores em JavaScript

let a = 10;
let b = 5;
let c = 2;

// Operadores Aritméticos
console.log("Operadores Aritméticos:");
console.log("Soma:", a + b); // 15
console.log("Subtração:", a - b); // 5
console.log("Multiplicação:", a * b); // 50
console.log("Divisão:", a / b); // 2
console.log("Módulo:", a % c); // 0
console.log("Exponenciação:", a ** c); // 100
console.log("Incremento:", ++a); // 11
console.log("Decremento:", --b); // 4

// Operadores de Comparação
console.log("\nOperadores de Comparação:");
console.log("Igualdade (==):", a == b); // false
console.log("Desigualdade (!=):", a != b); // true
console.log("Estritamente Igual (===):", a === b); // false
console.log("Estritamente Desigual (!==):", a !== b); // true
console.log("Maior que (>):", a > b); // true
console.log("Menor que (<):", a < b); // false
console.log("Maior ou Igual (>=):", a >= b);
console.log("Menor ou Igual (<=):", a <= b);
console.log("Comparação de Strings:", "abc" < "abd"); // true
console.log("Comparação de Números:", 10 < 20); // true

// Operadores Lógicos
let x = true;
let y = false;
console.log("\nOperadores Lógicos:");
console.log("AND (&&):", x && y); // false
console.log("OR (||):", x || y); // true
console.log("NOT (!):", !x); // false
console.log("Combinação:", (a > b) && (b < c)); // false
console.log("Combinação:", (a > b) || (b < c)); // true

// Operadores de Atribuição
let d = 20;
console.log("\nOperadores de Atribuição:");
console.log("Atribuição (=):", d); // 20
d += 5; // d = d + 5
console.log("Atribuição Adição (+=):", d);
d -= 3; // d = d - 3
console.log("Atribuição Subtração (-=):", d);
d *= 2;