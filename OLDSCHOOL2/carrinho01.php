<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/carrinho.css">
    <script async src="carrinho.js"></script>
    
</head>
<body>
    <div class="carrinho">
        <div class="titulo">
            <h1>MEU CARRINHO</h1>
        </div>  
    </div>

    <div class="tabela">
            <table class="tabelacarrinho">
            
                <thead>
                    <th class="item">ITEM</th>
                    <th class="preço">PREÇO</th>
                    <th class="QUANTIDADE">QUANTIDADE</th>
                </thead>
            
                <tbody>
                    <tr class="produto">
                        <td class="prod-escolher">
                            <img class="prod-imagem" src="./img/produtos/ABERTO3.png" height="70px" width="70px" >
                            <strong class="prod-titulo">CAPACETE</strong>
                        </td>
                        <td>
                            <span class="produto2">R$399,99</span>
                        </td>
                        <td class="quantos">
                            <input type="number" value="2" min="0" max="3" class="quantidade">
                            <button class="remover" type="button"> remover</button>
                        </td>
                    </tr>
                    <tr class="produto">
                        <td class="prod-escolher">
                            <img class="prod-imagem" src="./img/produtos/FECHADO1.png" height="70px" width="70px" >
                            <strong class="prod-titulo">CAPACETE</strong>
                        </td>
                        <td>
                            <span class="produto2">R$529,00</span>
                        </td>
                        <td class="quantos">
                            <input type="number" value="1" min="0" max="3" class="quantidade">
                            <button class="remover" type="button"> remover</button>
                        </td>
                    </tr>

                </tbody>
                
            
                
                    <tfoot >
                        <tr class="valor">
                            <td colspan="3" class="total">
                            <strong>TOTAL</strong>
                            <span>R$928,99</span>
                            </td>
                        </tr>
                    </tfoot>
               
            </table>
                    <button class="finalzar" type="button" >Finalizar Compra</button>
            
                
    </div>
    
    <!--RODAPE PRETO DA PAGINA-->

          <!--DAR COR PARA O FUNDO-->
          <div id="fundoRodape">
            <div class="rodape">
              <!--SEPARAR NO DISPLAY FLEX (CADA COLUNA = CONT1)-->
              <div class="cont1">
                <h1 id="categoria">INSTITUCIONAL</h1>
                <a href="./rodapé/sobreNos.html" id="acesso">Sobre nós</a><br>
                <a href="./rodapé/alertaDeFraude.html" id="acesso">Alerta de fraude</a>
              </div>

              <div class="cont1">
                <h1 id="categoria">DUVIDAS</h1>
                <a href="./rodapé/trocaseGarantia.html" id="acesso">Politica de trocas e garantias</a><br>
                <a href="./rodapé/pagamentoeEnvio.html" id="acesso">Pagamento e envio</a><br>
                
              </div>

              <div class="cont1">
                <h1 id="categoria">FALE CONOSCO</h1>
                <p id="acesso">Whatsapp: (83) 98653-4239<br>
                              Telefone: (83) 98653-4239<br>
                              Email: oldschool@gmail.com.br</p>
              </div>

              <div class="cont1">
                <h1 id="categoria">NOSSO ENDEREÇO</h1>
                <a href="https://www.google.com/maps/place/Rua+Radialista+Severino+Gomes+de+Brito,+179+-+Jos%C3%A9+Am%C3%A9rico+de+Almeida,+Jo%C3%A3o+Pessoa+-+PB,+58074-060/@-7.1727502,-34.8606472,17z/data=!3m1!4b1!4m6!3m5!1s0x7acc276c0825dd3:0xeebcf815613aeeea!8m2!3d-7.1727555!4d-34.8580723!16s%2Fg%2F11g9mxfc38?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D" style="text-decoration: none;"><p id="acesso" class="endereço">Rua Radialista Severino Gomes de Brito,179</p></a><br>
              </div>

              <div class="cont1">
                
                  <h1 id="categoria">RECEBA NOVIDADES</h1>
                  <form class="formEmail">
                    <input type="email" placeholder="Digite seu e-mail" id="caixaEmail"><input type="submit" id="botaoEmail"></input>
                  </form>
              </div>

            </div>
            <!--TRAÇO LARANJA NO RODAPE-->
            <div class="traco"></div>

            <!--PARTE DE PRETA BAIXO DA LINHA LARANJA-->
            <div class="widgets"></div>
            
          </div>
</body>
</html>