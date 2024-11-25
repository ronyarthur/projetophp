document.addEventListener('DOMContentLoaded', ready);

function ready() {
    // Carregar itens do carrinho ao iniciar
    carregarCarrinho();

    // Configurar evento de finalização
    const finalizarBotao = document.querySelector('.finalizar');
    if (finalizarBotao) {
        finalizarBotao.addEventListener('click', finalizarCompra);
    }
}

// Função para carregar os itens do carrinho
function carregarCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    const tabelaBody = document.querySelector('.tabelacarrinho tbody');

    // Limpar tabela
    tabelaBody.innerHTML = '';

    if (carrinho.length === 0) {
        tabelaBody.innerHTML = '<tr><td colspan="3">O carrinho está vazio.</td></tr>';
    } else {
        carrinho.forEach((produto, index) => {
            const linha = document.createElement('tr');
            linha.classList.add('produto');
            linha.innerHTML = `
                <td class="prod-escolher">
                    <img class="prod-imagem" src="${produto.imagem}" alt="${produto.nome}" height="70px" width="70px">
                    <p><strong class="prod-titulo">${produto.nome}</strong></p>
                    <p>Tamanho: ${produto.tamanho}</p>
                </td>
                <td>
                    <span class="produto2">${produto.preco}</span>
                </td>
                <td class="quantos">
                    <input type="number" value="1" min="0" max="10" class="quantidade" data-index="${index}">
                    <button class="remover" type="button" data-index="${index}">remover</button>
                </td>
            `;
            tabelaBody.appendChild(linha);
        });

        // Adicionar eventos aos inputs de quantidade e botões de remoção
        const quantidadeInputs = tabelaBody.querySelectorAll('.quantidade');
        quantidadeInputs.forEach(input => {
            input.addEventListener('input', atualizarTotal);
        });

        const removerBotoes = tabelaBody.querySelectorAll('.remover');
        removerBotoes.forEach(botao => {
            botao.addEventListener('click', removerProduto);
        });

        atualizarTotal();
    }
}

// Função para remover produto do carrinho
function removerProduto(event) {
    const index = event.target.dataset.index;
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

    // Remover o item correspondente
    carrinho.splice(index, 1);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));

    // Recarregar a tabela
    carregarCarrinho();
}

// Função para atualizar o total do carrinho
function atualizarTotal() {
    const tabelaBody = document.querySelector('.tabelacarrinho tbody');
    const produtos = tabelaBody.querySelectorAll('.produto');

    let total = 0;

    produtos.forEach((produto) => {
        const precoElement = produto.querySelector('.produto2');
        const quantidadeInput = produto.querySelector('.quantidade');

        if (precoElement && quantidadeInput) {
            const preco = parseFloat(precoElement.innerText.replace('R$', '').replace(',', '.'));
            const quantidade = parseInt(quantidadeInput.value);
            if (!isNaN(preco) && !isNaN(quantidade)) {
                total += preco * quantidade;
            }
        }
    });

    const totalElement = document.querySelector('.preçoDeTudo span');
    totalElement.innerText = 'R$ ' + total.toFixed(2).replace('.', ',');
}

// Função para finalizar a compra
function finalizarCompra() {
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    if (carrinho.length === 0) {
        alert('O carrinho está vazio. Adicione produtos antes de finalizar a compra.');
        return;
    }

    alert('Compra realizada com sucesso!');
    localStorage.removeItem('carrinho');
    carregarCarrinho();
}