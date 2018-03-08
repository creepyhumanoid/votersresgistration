<?php include 'header.html';?>
<style>
  nav{height: 50px;   }
</style>
<nav class="navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <img src="commelec.png" style="width:48px; float: left;">
      <a class="navbar-brand" href="#">Balanga City Comelec Registration</a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="dashboard.php">Home</a></li>
        <li><a href="all.php">All Registered Members</a></li> 
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Barangays
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="bagongsilang.php">Bagong Silang</a></li>
          <li><a href="muntingbatangas.php">Munting Batangas</a></li>
          <li><a href="tuyo.php">Tuyo</a></li>
          <li><a href="tenejero.php">Tenejero</a></li>
          <li><a href="cataning.php">Cataning</a></li>
          <li><a href="poblacion.php">Poblacion</a></li>
          <li><a href="camacho.php">Camacho</a></li>
          <li><a href="ibayo.php">Ibayo</a></li>
          <li><a href="sanjose.php">San Jose</a></li>
          <li><a href="malabia.php">Malabia</a></li>
          <li><a href="talisay.php">Talisay</a></li>
          <li><a href="bagumbayan.php">Bagumbayan</a></li>
          <li><a href="puertorivaslote.php">Puerto Rivas Lote</a></li>
          <li><a href="puertorivasitaas.php">Puerto Rivas Itaas</a></li>
          <li><a href="puertorivasibaba.php">Puerto Rivas Ibaba</a></li>
          <li><a href="tortugas.php">Tortugas</a></li>
          <li><a href="dona.php">Doña Francisca</a></li>
          <li><a href="cupangproper.php">Cupang Proper</a></li>
          <li><a href="cupangnorth.php">Cupang North</a></li>
          <li><a href="cupangwest.php">Cupang West</a></li>
          <li><a href="sibacan.php">Sibacan</a></li>
          <li><a href="central.php">Central</a></li>
          <li><a href="dangcol.php">Dangcol</a></li>
          <li><a href="cabogcabog.php">Cabog-Cabog</a></li>
          <li><a href="tanato.php">Tanato</a></li>
        </ul>
      </li>
        <li><a href="archievemembers.php">Archieve Members</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php include 'footer.html';?>
