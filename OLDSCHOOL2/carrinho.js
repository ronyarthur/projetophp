if (document. readyState = "loading") {
    document. addEventListener ("DOMContent Loaded", ready)
}
    else{
        ready()
    }


function ready(){
    const removerbotao = document.getElementsByClassName("remover")
for (var i = 0; i < removerbotao.length; i++){
    removerbotao[i].addEventListener("click", removeProduto)
    
}
}

const quantidadeinput = document.getElementsByClassName("quantidade")

function removeProduto(event) {
    event.tarqet.parentElement.parentElement.remove()
    updateTotal()

}
function totalupdade(){
    let totalfinal = 0
    const produto = document.getElementsByClassName("produto")
    for (var i = 0 ; i< produto.length;i++){
        const produtopreço = produto[i].getElementsByClassName("produto2")[0].innerText.replace("R$", "").replace(",",".")
        const produtoquantidade = produto[i].getElementsByClassName("quantidade")[0].value
    
        totalfinal += produtopreço * produtoquantidade
    }
    totalfinal = totalfinal.toFixed(2)
    totalfinal = totalfinal.replace(".",",")
    document.querySelector(".total span").innerText = "R$" + totalfinal
    
}
