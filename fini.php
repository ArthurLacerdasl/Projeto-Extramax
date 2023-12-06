<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title>FINI</title>
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="img/Logo EE.png" alt="Extramax">Extramax</a></h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">FINI</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="index.php">HOME</a></li>
          <li><a class="dropdown-item" href="produtos.php">FORNECEDORES</a></li>
          <li><a class="dropdown-item" href="login.php">LOGIN</a></li>
        </div>
      </div>
    </div>
  </header>
  <br>

  <div class="section-title">
    <h2>FINI</h2>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini dentadura1.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G DENTADURA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(0)"></button>
        <span class="px-md-3 px-1" id="quantidade0">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(0)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total0"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini beijos1.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G BEIJOS</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(1)"></button>
        <span class="px-md-3 px-1" id="quantidade1">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(1)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total1"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini banana1.png" alt="banana" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G BANANA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(2)"></button>
        <span class="px-md-3 px-1" id="quantidade2">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(2)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total2"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini amora1.png" alt="amora" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G AMORA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(3)"></button>
        <span class="px-md-3 px-1" id="quantidade3">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(3)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total3"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini ursinhos.png" alt="ursinhos" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G URSINHOS</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(4)"></button>
        <span class="px-md-3 px-1" id="quantidade4">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(4)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total4"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini min citr.png" alt="mincitr" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G MIN CITR</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(5)"></button>
        <span class="px-md-3 px-1" id="quantidade5">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(5)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total5"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini burguer.png" alt="burguer" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G BURGUER</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(6)"></button>
        <span class="px-md-3 px-1" id="quantidade6">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(6)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total6"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini ovo frito.png" alt="ovofrito" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 90G OVOS FRITOS</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(7)"></button>
        <span class="px-md-3 px-1" id="quantidade7">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(7)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total7"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini twister.png" alt="twister" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G TUBES TWISTER</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(8)"></button>
        <span class="px-md-3 px-1" id="quantidade8">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(8)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total8"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini tubes mor.png" alt="morango" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G TUBES MORANGO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(9)"></button>
        <span class="px-md-3 px-1" id="quantidade9">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(9)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total9"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini chicle ovo dino.png" alt="ovodino" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G CHICLE OVOS DINO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(10)"></button>
        <span class="px-md-3 px-1" id="quantidade10">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(10)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total10"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini chicle mel.png" alt="melanc" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G CHICLE MELANCIA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(11)"></button>
        <span class="px-md-3 px-1" id="quantidade11">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(11)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total11"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/fini marsh torcao.png" alt="torcao" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G MARSH TORCAO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(12)"></button>
        <span class="px-md-3 px-1" id="quantidade12">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(12)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total12"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/fini marsh camp1.png" alt="camp" style="border-radius: 20%;">
      <p style="font-size: 15px;">FINI 80G MARSH CAMPING</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,50</b></div>
        <button class="fa fa-minus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="removerItem(13)"></button>
        <span class="px-md-3 px-1" id="quantidade13">0</span>
        <button class="fa fa-plus-square text-secondary" style=" background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(13)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total13"></span></div>
      </div>
    </div>
  </div>

  <div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-12">
        <div class="d-flex justify-content-between align-items-center">
          <div class="px-md-0 px-1" id="footer-font">
            <b class="pl-md-4">SUBTOTAL R$ <span class="pl-md-4" id="valorTotalCompra">0.00</span></b>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

  <footer id="footer">
    <div class="container">
      <h3>Extramax</h3>
      <br>
      <h4 style="color: white;">Contatos <br><br>
        <img src="img/telefone.webp" alt="fone" style="width: 40px;">
      </h4>
      <br>
      <h6 style="color: white;">Fone: (34) 99800-4345</h6>
      <h6 style="color: white;">Email: arthurlacerda@unipam.edu.br</h6>
      <h6 style="color: white;">Atendimento dias úteis: 08h-18h</h6>
      <br>
  </footer>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/fini.js"></script>
  <script src="cordova.js"></script>
</body>

</html>
