<!DOCTYPE html>
<html>
<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssi/pags/css/main.css" />

<body style="background-color: #0a0e27;">
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-right redtext" style="display:none;right:0;" id="rightMenu" style="display:none" id="mySidebar">

    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button><br><br>
    <a href="pags/lanches/lanches.html" class="w3-bar-item w3-button ew">Lanches</a><br>
    <a href="pags/almo/almo.html" class="w3-bar-item w3-button ew" style="text-align: right;">PFs</a><br>
    <a href="pags/bebidas/bebidas.html" class="w3-bar-item w3-button ew">Bebidas</a><br>
    <a href="pags/sobremesas/sobremesas.html" class="w3-bar-item w3-button ew" style="text-align: right;">Sobremesas</a><br>
    <a href="pags/suporte/suporte.html" class="w3-bar-item w3-button ew">Suporte</a><br>

  </div>

  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
    <div class="w3-container" style="text-align: center;">

      <font class="h1 h2 h3" face="Impact"> EMPLOYER TECH </font>
    </div>
  </div><br><br><br><br><br><br>


  <div class="container">
    <form class="form-busca-site" action="busca.php">
      <input class="btn-text-top" type="text" name="txtsearch" placeholder="harbumguer, pizza..." style="text-align: center;">
      <div>
        <button class="btn-buscar-top" type="submit"></button>
      </div>
    </form>
  </div><br><br><br><br><br><br><br>

  <div class="row">
    <div class="card green color">
      <font style="font-size: 11px;"><b>HAMBURGUER COM REFRIEGERANTE</b></font>
      <img class="image" src="images/ovo-removebg-preview.png" alt="ovo" />
    </div>

    <div class="row1">
      <div class="card green color">
        <font class="h4" face=""> <b>HAMBURGUER COM REFRIGERENTE</b> </font>
        <img class="image" src="https://th.bing.com/th/id/R.6fb889f5a34322bb8fcba2981666864d?rik=NErBd9Acg3Xvjg&pid=ImgRaw&r=0" alt="" />
        <p class="h5">Um harbumguer de duas carnes, queijo, bacon, tomates e alfaces junto de uma coca-cola de 350ml</p>
      </div>

      <div class="row2">
        <div class="card green color">
          <font class="h4" face=""> <b>HAMBURGUER COM REFRIGERENTE</b> </font>
          <img class="image" src="https://th.bing.com/th/id/R.6fb889f5a34322bb8fcba2981666864d?rik=NErBd9Acg3Xvjg&pid=ImgRaw&r=0" alt="" />
          <p class="h5">Um harbumguer de duas carnes, queijo, bacon, tomates e alfaces junto de uma coca-cola de 350ml</p>
        </div>
        <script>
          function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
          }

          function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
          }
        </script>

</body>

</html>