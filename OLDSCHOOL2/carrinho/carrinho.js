if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready() {
    // Adicionar evento aos botões de remover
    const removerBotoes = document.getElementsByClassName("remover");
    for (let i = 0; i < removerBotoes.length; i++) {
        removerBotoes[i].addEventListener("click", removeProduto);
    }

    // Adicionar evento aos inputs de quantidade
    const quantidadeInputs = document.getElementsByClassName("quantidade");
    for (let i = 0; i < quantidadeInputs.length; i++) {
        quantidadeInputs[i].addEventListener("change", updateTotal);
    }

    // Atualizar o total ao carregar
    updateTotal();
}

function removeProduto(event) {
    event.target.parentElement.parentElement.remove();
    updateTotal();
}

function updateTotal() {
    let totalFinal = 0;
    const produtos = document.getElementsByClassName("produto");
    for (let i = 0; i < produtos.length; i++) {
        const precoElement = produtos[i].getElementsByClassName("produto2")[0];
        const quantidadeInput = produtos[i].getElementsByClassName("quantidade")[0];

        if (!precoElement || !quantidadeInput) continue; // Ignorar elementos inválidos

        const preco = parseFloat(precoElement.innerText.replace("R$", "").replace(",", "."));
        const quantidade = parseInt(quantidadeInput.value);

        if (!isNaN(preco) && !isNaN(quantidade)) {
            totalFinal += preco * quantidade;
        }
    }

    // Formatar o total final
    totalFinal = totalFinal.toFixed(2).replace(".", ",");
    const totalElement = document.querySelector(".total span");
    if (totalElement) {
        totalElement.innerText = "R$" + totalFinal;
    }
}
