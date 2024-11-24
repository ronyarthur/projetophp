if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}
var totalfinal = "0,00"
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

    const adicionar = document.getElementsByClassName("eviar-carrinho")
    for(var i = 0; i < adicionar.length; i++ ){
        adicionar[i].addEventListener("click" , adicionarcarrinho)

    }
 
    const botaofuncao = document.getElementsByClassName("finalizar")[0]
    botaofuncao.addEventListener("click", finalizarbotoao)


    // Atualizar o total ao carregar
    updateTotal();
}

function finalizarbotoao() {
    if (totalfinal) {
        alert(
            `Compra realizada com sucesso!
`
        );
    } 
}


function adicionarcarrinho(event){
    const botao = event.target
    const adicionarinfo = botao.parentElement.parentElement
    const produtoimagem = adicionarinfo.getElementsByClassName("imagem")[0].src
    const produtoname = adicionarinfo.getElementsByClassName("nomeDoCapacete")[0].innerText
    const produtopreco = adicionarinfo.getElementsByClassName("preçoDoCapacete").innerText

    let produtotabela = document.createElement("tr")
    produtotabela.classList.add("produto")

    produtoimagem.innerHTML =
    `   <td class="prod-escolher" id="prod-escolher">
            <img class="prod-imagem" src="${produtoimagem}" alt="${produtoname}" height="70px" width="70px" >
            <p><strong class="prod-titulo">${produtoname}</strong></p>
        </td>
        <td>
            <span class="produto2">${produtopreco}</span>
        </td>
        <td class="quantos">
            <input type="number" value="1" min="0" max="3" class="quantidade">
            <button class="remover" type="button"> remover</button>
        </td>
    
    `
    const tabelabody= document.querySelector(".taabelacarrinho tbody")
    tabelabody.append(produtotabela)
    produtoimagem.getElementsByClassName("quantidade")[0].addEventListener("change", updateTotal)
    produtoimagem.getElementsByClassName("remover")[0].addEventListener("click" ,removeProduto)

    updateTotal();
}

function removeProduto(event) {
    event.target.parentElement.parentElement.remove();
    updateTotal();
}

function updateTotal() {
    let totalFinal = 0; // Variável local para cálculo do total
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

    // Formatar o total final e atualizar a variável global
    totalfinal = totalFinal.toFixed(2).replace(".", ",");
    const totalElement = document.querySelector(".total span");
    if (totalElement) {
        totalElement.innerText = "R$" + totalfinal;
    }
}

