<nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark">
  <a class="navbar-brand text-warning" href="index1.php">30 Semanas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav nav-tabs">
      <!--**********************************************************************************************************************-->      
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#banner" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SOBRE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#service" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVIÇOS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#consultoria" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONSULTORIA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#reciclagem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECICLAGEM<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link  dropdown-toggle" id="navInsc" href="#contato" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CONTATO<span class="sr-only">(current)</span></a>
      </li>
               
       <li class="nav-item">
        <a class="nav-link" href="sair.php">SAIR</a>
      </li>
    </ul>
  </div>
   <li><font class="text-right text-light" size="1">Usu&aacute;rio:&nbsp;<?php echo $_SESSION['nome']; ?></font></li>
</nav>