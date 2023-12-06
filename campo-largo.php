<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title>CAMPO LARGO</title>
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="img/Logo EE.png" alt="Extramax">Extramax</a></h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">CAMPO LARGO</button>
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
    <h2>CAMPO LARGO</h2>
  </div>

  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo agua 900.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L AGUA COCO INT 900ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(0)"></button>
        <span class="px-md-3 px-1" id="quantidade0">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(0)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total0"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo agua 250.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L AGUA COCO INT 250ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 4,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(1)"></button>
        <span class="px-md-3 px-1" id="quantidade1">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(1)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total1"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo suco uva 900.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO UVA INT 900ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(2)"></button>
        <span class="px-md-3 px-1" id="quantidade2">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(2)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total2"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo suco lar 900.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO LARANJA INT 900ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(3)"></button>
        <span class="px-md-3 px-1" id="quantidade3">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(3)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total3"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo suco maca 900.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO MAÇÃ INT 900ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(4)"></button>
        <span class="px-md-3 px-1" id="quantidade4">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(4)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total4"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo suco verde.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO VERDE DETOX 900ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 8,56</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(5)"></button>
        <span class="px-md-3 px-1" id="quantidade5">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(5)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total5"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo suco uva 250.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO UVA INT 250ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 3,90</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(6)"></button>
        <span class="px-md-3 px-1" id="quantidade6">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(6)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total6"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo suco lar 250.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L SUCO LARANJA INT 250ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 3,90</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(7)"></button>
        <span class="px-md-3 px-1" id="quantidade7">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(7)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total7"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo white.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L WHITE DRAFT 500ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 8,55</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(8)"></button>
        <span class="px-md-3 px-1" id="quantidade8">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(8)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total8"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo red.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L RED DRAFT 500ML</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 8,55</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(9)"></button>
        <span class="px-md-3 px-1" id="quantidade9">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(9)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total9"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo vinho suave.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TINTO SUAVE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 13,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(10)"></button>
        <span class="px-md-3 px-1" id="quantidade10">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(10)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total10"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo vinho seco.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TINTO SECO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 13,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(11)"></button>
        <span class="px-md-3 px-1" id="quantidade11">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(11)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total11"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo vinho branco suave.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO BRANCO SUAVE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 13,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(12)"></button>
        <span class="px-md-3 px-1" id="quantidade12">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(12)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total12"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo vinho branco seco.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO BRANCO SECO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 13,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(13)"></button>
        <span class="px-md-3 px-1" id="quantidade13">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(13)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total13"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo toro malbec.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TORO MALBEC</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 32,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(14)"></button>
        <span class="px-md-3 px-1" id="quantidade14">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(14)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total14"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo toro sauv.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TORO SAUVIGNON</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 32,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(15)"></button>
        <span class="px-md-3 px-1" id="quantidade15">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(15)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total15"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo toro tempra.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TORO TEMPRANILLO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 32,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(16)"></button>
        <span class="px-md-3 px-1" id="quantidade16">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(16)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total16"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo toro rose.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO TORO ROSE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 32,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(17)"></button>
        <span class="px-md-3 px-1" id="quantidade17">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(17)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total17"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo caballo carme.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO CABALLO CARMENERE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 38,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(18)"></button>
        <span class="px-md-3 px-1" id="quantidade18">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(18)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total18"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo caballo sauv.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L VINHO CABALLO SAUVIGNON</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 38,50</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(19)"></button>
        <span class="px-md-3 px-1" id="quantidade19">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(19)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total19"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo quinta suave.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L QUINTA RIO GRANDE SUAVE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 19,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(20)"></button>
        <span class="px-md-3 px-1" id="quantidade20">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(20)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total20"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo quinta seco.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L QUINTA RIO GRANDE SECO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 19,99</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(21)"></button>
        <span class="px-md-3 px-1" id="quantidade21">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(21)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total21"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/campo largo esp moscatel.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L ESPUMANTE MOSCATEL</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 33,75</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(22)"></button>
        <span class="px-md-3 px-1" id="quantidade22">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(22)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total22"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/campo largo esp festy.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">C.L ESPUMANTE FESTY S/ ALCOOL</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 18,00</b></div>
        <button class="fa fa-minus-square text-secondary" onclick="removerItem(23)"></button>
        <span class="px-md-3 px-1" id="quantidade23">0</span>
        <button class="fa fa-plus-square text-secondary" onclick="adicionarItem(23)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total23"></span></div>
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
  <script src="js/campo-largo.js"></script>
  <script src="cordova.js"></script>
</body>

</html>
