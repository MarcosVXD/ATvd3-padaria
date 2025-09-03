<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Chico Panificadora</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f3f3f8;
    }

    /* Barra superior */
    header {
      background-color: #ffc800;
      color: white;
      text-align: center;
      font-weight: bold;
      padding: 15px;
      font-size: 22px;
    }

    /* Menu lateral */
    .menu {
      width: 30%;
      float: left;
      background-color: #f8f9fc;
      min-height: 100vh;
    }

    .menu-item {
      display: flex;
      align-items: center;
      padding: 15px;
      border: 1px solid #ccc;
      background-color: white;
      margin: 8px;
      border-radius: 8px;
    }

    .menu-item img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      margin-right: 15px;
    }

    /*conteudo*/
    .conteudo {
      width: 50%;
      float: left;
      padding: 20px;
      text-align: center;
    }

    .conteudo h1 {
      color: yellow;
      font-size: 40px;
      font-weight: bold;
      -webkit-text-stroke: 2px black; /* contorno */
    }

    /*carrosel*/
    .carousel {
      position: relative;
      max-width: 80%;
      margin: 0 auto;
      border-radius: 15px;
      overflow: hidden;
    }

    .slides {
      display: flex;
      transition: transform 1.5s ease-in-out;
    }

    .slides img {
      width: 100%;
      flex-shrink: 0;
      border-radius: 15px;
    }

    
    .dots {
      text-align: center;
      margin-top: 10px;
    }

    .dot {
      height: 12px;
      width: 12px;
      margin: 0 4px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      cursor: pointer;
    }

    .active {
      background-color: #717171;
    }

 
    footer {
      clear: both;
      background-color: #ffc800;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    footer .social img {
      width: 40px;
      margin: 0 5px;
    }

    footer .btn {
      background: white;
      padding: 8px 15px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>

  
  <header>
    CHICO PANIFICADORA
  </header>

  <!--menu de doces-->
  <div class="menu">
    <div class="menu-item">
      <img src="{{ asset('img/estufa doces.jfif') }}" alt="Doces">
      <div>
        <b>Doces</b><br>
        <small>CLIQUE PARA REDIRECIONAR</small>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{ asset('img/joelho.jpg') }}"alt="Salgados">
      <div>
        <b>Salgados</b><br>
        <small>CLIQUE PARA REDIRECIONAR</small>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{ asset('img/paozinho.webp') }}" alt="Pães">
      <div>
        <b>Pães</b><br>
        <small>CLIQUE PARA REDIRECIONAR</small>
      </div>
    </div>
    <div class="menu-item">
      <img src="{{ asset('img/tabua-frios-2.jpg') }}" alt="Frios">
      <div>
        <b>Frios</b><br>
        <small>CLIQUE PARA REDIRECIONAR</small>
      </div>
    </div>
  </div>


  <div class="conteudo">
    <h1>PROMOÇÕES DO DIA</h1>

    <!--promoção-->
    <div class="carousel">
      <div class="slides">
        <img src="{{ asset('img/sonho.jpg') }}"alt="Promoção 1">
        <img src="{{ asset('img/bolo.jfif') }}"alt="Promoção 2">
        <img src="{{ asset('img/cafe.jfif') }}" alt="Promoção 3">
      </div>
    </div>

 <!--espaço entre rodapé-->
    <div class="dots">
      <span class="dot active" onclick="moveSlide(0)"></span>
      <span class="dot" onclick="moveSlide(1)"></span>
      <span class="dot" onclick="moveSlide(2)"></span>
    </div>
  </div>

  <!--rodapé-->
  <footer>
    <div class="social">
      <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </div>
    <div>EQUIPE<br>Francisco<br>heloisa<br>Marcos<br>maria isabel</div>
    <div><span class="btn">CONTATAR SUPORTE</span></div>
  </footer>

 <!--script carrosel-->
  <script>
    let index = 0;
    const slides = document.querySelector(".slides");
    const dots = document.querySelectorAll(".dot");

    function moveSlide(i) {
      index = i;
      slides.style.transform = `translateX(${-index * 100}%)`;
      dots.forEach(dot => dot.classList.remove("active"));
      dots[index].classList.add("active");
    }

  
    setInterval(() => {
      index = (index + 1) % dots.length;
      moveSlide(index);
    }, 4000);
  </script>

</body>
</html>