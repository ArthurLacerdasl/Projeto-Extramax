<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title>3M</title>
</head>

<body>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php"><img src="img/Logo EE.png" alt="Extramax">Extramax</a></h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">3M</button>
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
    <h2>3M</h2>
  </div>

  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m esp scotch.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M ESPONJA SCOTCH BRITE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 1,40</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(0)"></button>
        <span class="px-md-3 px-1" id="quantidade0">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(0)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total0"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m esp extrema.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M ESPONJA SCOTCH BRITE EXTREMA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 2,40</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(1)"></button>
        <span class="px-md-3 px-1" id="quantidade1">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(1)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total1"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m esp prateada.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M ESPONJA SCOTCH BRITE PRATEADA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 5,75</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(2)"></button>
        <span class="px-md-3 px-1" id="quantidade2">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(2)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total2"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m esp metalica.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M ESPONJA SCOTCH BRITE METÁLICA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 5,75</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(3)"></button>
        <span class="px-md-3 px-1" id="quantidade3">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(3)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total3"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m ponjita c3.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PONJITA BANHO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 1,90</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(4)"></button>
        <span class="px-md-3 px-1" id="quantidade4">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(4)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total4"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m ponjita delicada.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PONJITA DELICADA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,90</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(5)"></button>
        <span class="px-md-3 px-1" id="quantidade5">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(5)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total5"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m ponjita animal.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PONJITA ANIMAL</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,90</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(6)"></button>
        <span class="px-md-3 px-1" id="quantidade6">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(6)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total6"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m ponjita monstros.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PONJITA MONSTROS</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 7,90</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(7)"></button>
        <span class="px-md-3 px-1" id="quantidade7">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(7)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total7"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m pano c3.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PANO MULTIUSO</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 6,00</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(8)"></button>
        <span class="px-md-3 px-1" id="quantidade8">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(8)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total8"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m pano flanela.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M PANO FLANELA</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 3,00</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(9)"></button>
        <span class="px-md-3 px-1" id="quantidade9">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(9)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total9"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m fita emp.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M FITA EMPACTOAR</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 5,27</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(10)"></button>
        <span class="px-md-3 px-1" id="quantidade10">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(10)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total10"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m fita fixa forte.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M FITA FIXA FORTE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 11,25</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(11)"></button>
        <span class="px-md-3 px-1" id="quantidade11">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(11)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total11"></span></div>
      </div>

    </div>
  </div>
  <div class="containerimg">
    <div class="imagem">
      <img src="img/3m bond.png" alt="dentadura" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M COLA SCOTCH BOND</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 3,60</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(12)"></button>
        <span class="px-md-3 px-1" id="quantidade12">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="adicionarItem(12)"></button>
        <div class="pl-md-0 pl-1"><b>R$ </b><span id="total12"></span></div>
      </div>

    </div>
    <div class="imagem">
      <img src="img/3m mascara.png" alt="beijos" style="border-radius: 20%;">
      <p style="font-size: 15px;">3M MASCARA NEXCARE</p>

      <div class="pl-md-0 pl-2" style="text-align: center;">
        <div class="pl-md-0 pl-1"><b>R$ 2,60</b></div>
        <button class="fa fa-minus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
          onclick="removerItem(13)"></button>
        <span class="px-md-3 px-1" id="quantidade13">0</span>
        <button class="fa fa-plus-square text-secondary" style="background-color: transparent; border-radius: 20%;"
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
  <script src="js/3m.js"></script>
  <script src="cordova.js"></script>
</body>

</html>
