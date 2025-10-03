
// Exemplo completo de utilização do DOM

// 1. Criar um novo parágrafo e adicionar ao body
const paragrafo = document.createElement('p');
paragrafo.id = 'meuParagrafo';
paragrafo.textContent = 'Clique no botão para mudar este texto!';
document.body.appendChild(paragrafo);

// 2. Criar um botão dinamicamente
const botao = document.createElement('button');
botao.textContent = 'Clique aqui';
botao.style.padding = '10px 20px';
botao.style.fontSize = '16px';
document.body.appendChild(botao);

// 3. Adicionar evento de clique ao botão
botao.addEventListener('click', function() {
	// Alterar o texto do parágrafo
	paragrafo.textContent = 'O texto foi alterado com sucesso!';
	// Alterar o estilo do parágrafo
	paragrafo.style.color = 'green';
	paragrafo.style.fontWeight = 'bold';
	// Desabilitar o botão após o clique
	botao.disabled = true;
	botao.textContent = 'Já clicado!';
});

// 4. Exemplo de acesso a um elemento existente pelo ID (caso exista no HTML)
// const outroElemento = document.getElementById('idDoElemento');
// if (outroElemento) {
//     outroElemento.style.background = 'yellow';
// }
