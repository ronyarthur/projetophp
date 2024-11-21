<?php
  if(!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OLD SCHOOL</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="shortcut icon" type="imagex/png" href="./img/logo.ico">
</head>
<body>
    <!--topo-->
    <div class="topo" id="fundoTopo">
    <!--LOGO DO TOPO-->
      <div class="logo">
        <img src="./img/Sem Título-1-Photoroom.png" width="100" id="logotipo">
      </div>
      <!--LINKS DE CIMA-->
      <div class="navbar">
        <a href="" id="redirecionar1">Pagina principal</a>
        <a href="Produtos.html"  id="redirecionar2">Produtos</a>
        <a href="./rodapé/sobreNos.html" id="redirecionar3">Sobre nós</a>
        <a href="https://wa.me/?text= ola, eu fiz uma compra pelo site e meu id é: (coloque o seu id da compra aqui)" target="_blank" id="redirecionar3">Contato</a>
        <a href="./carrinho.php" id="redirecionar4"><img src="./img/carrinho-carrinho.png" width="30px" style="background-color: #c2c1c1; " alt="carrinho" name="carrinho"></a>
        <a href="./login.html" id="minhaConta"><img src="./img/do-utilizador.png" width="35px" id="redirecionar4" alt="minha conta"></a>
      </div>
    </div>

        <!--imagem e slogan do sit-->
    <div class="linha">
      <div class="slogan">
          <h1 id="slogan">Onde segurança e estilo se encontram</h1>
      </div>
      <div class="imagemGrande">
        <img src="./img/raspopova-marina-Dyt3dpyDQNY-unsplash-Copy-edited.jpg-removebg.png" width="800.5px" height="100%" style="background-image: linear-gradient(to top, #cfcfcf 90%, #c2c1c1)" >
      </div>
    </div>



    <!--LINKS DE NAVEGAÇÃO-->
    <div class="nav">
      <div class="links" id="aqui">
      </div>
    </div>

    <div class="container">
      <img src="./img/imagine_image_07b5b446-f370-4614-b13f-1d3476f286ad.PNG" alt="" width="100%" height="100%" id="movable">
      <img src="./img/natal1.PNG" alt="" width="100%" height="10%">
    </div>


    <div class="avisos">
      <div class="icones">
        <img src="./img/entrega-rapida.png" width="50px"><p>Entregamos apenas em João Pessoa PB</p>
      </div>
      <div class="icones">
        <img src="./img/cartao-de-debito.png" width="50px"><p>Parcelamos em ate <strong>10x</strong> sem juros</p>
      </div>
      <div class="icones">
        <img src="./img/seguro-de-vida.png" width="50px"><p>Loja <strong>100%</strong> segura</p>
      </div>
      
    </div>


      <!--PRODUTOS (CAPACETES ABERTOS)-->
      <div class="capacetes">
        <!--TITULO: CAPACETES ABERTOS NO SITE-->
        <div class="tituloDaArea">
          <h2 id="cpa">MAIS VENDIDOS</h2>
        </div>
          <!--IMAGEM DOS CAPACETES-->
          <div class="rolagem">
            <div class="capacetesAbertos">
            <a href="./abaDeCompra/c1.html">  
              <div id="img1" >
                <img src="./img/produtos/ABERTO1.png" width="370px" height="300px">
              </div>
            </a>
            <a  href="./abaDeCompra/c2.html">
              <div id="img2">
                <img src="./img/produtos/ABERTO2.png" width="370px" height="300px">
              </div>
            </a>
            <a  href="./abaDeCompra/c3.html">
              <div id="img3">
                <img src="./img/produtos/ABERTO3.png" width="370px" height="300px">
              </div>
            </a>
            <a  href="./abaDeCompra/c4.html">
              <div id="img1" >
                <img src="./img/produtos/ABERTO4.png" width="370px" height="300px">
              </div>
            </a>
            </div>

            <div class="capacetesAbertos">
            <a  href="./abaDeCompra/c4.html">
              <div id="img1" >
                <img src="./img/produtos/ABERTO4.png" width="370px" height="300px">
              </div>
            </a>
            <a  href="./abaDeCompra/c5.html">
              <div id="img2">
                <img src="./img/produtos/ABERTO5.png" width="300px" height="300px" >
              </div>
            </a>
            <a  href="./abaDeCompra/c6.html">                        
              <div id="img3">
                <img src="./img/produtos/ABERTO6.png" width="300px" height="300px">
              </div>
            </a>
            <a  href="./abaDeCompra/c4.html">
              <div id="img1" >
                <img src="./img/produtos/ABERTO4.png" width="370px" height="300px">
              </div>
            </a>
            </div>

            <div class="capacetesAbertos">
              <a  href="./abaDeCompra/c7.html">
              <div id="img1" >
                <img src="./img/produtos/ABERTO7.png" width="300px" height="300px">
              </div>
              </a>
              <a  href="./abaDeCompra/c8.html">
              <div id="img2">
                <img src="./img/produtos/ABERTO8.png" width="300px" height="300px">
              </div>
              </a>
              <a  href="./abaDeCompra/c9.html">
              <div id="img3">
                <img src="./img/produtos/ABERTO9.png" width="300px" height="300px">
              </div>
              </a>
            </div>
          </div>
      </div>
      <div class="conferir">
        <a href="./Produtos.html" id="conferirProdutos">Conferir todos os produtos</a>
      </div>
          
      <!--UM POUCO DOS NOSSOS CAPACETES-->

      <div class="descricaoDosCapacetes">
        <div class="textoCapacetes"><br>
          <h1 class="textoCapacetes" id="tituloTextoCapacete">Sobre nossos capacetes</h1><br>
          <p class="textoCapacetes">Em nossa loja de capacetes, você encontra uma linha de modelos focado no estilos classicos ,pensados para atender todas as suas necessidades, seja para o uso diário ou passeios em fins de semanas. Cada capacete é selecionado cuidadosamente, garantindo os mais altos padrões de segurança, conforto e estilo. Temos modelos para todos os gostos e perfis: capacetes fechados que proporcionam máxima proteção, capacetes abertos para uma sensação de liberdade, perfeitos para pequenos passeios e os articulados, que combinam o melhor dos dois mundos.</p>
        </div>
        <div class="ImagemCapacete">
          <img src="./img/produtos/WhatsApp Image 2024-10-28 at 21.59.00.jpeg" alt="" width="360" height="340">
          <img src="./img/produtos/WhatsApp Image 2024-10-28 at 21.59.00 (1).jpeg" width="360px" height="340">
        </div>
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
