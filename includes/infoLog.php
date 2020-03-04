
  <nav class="navbar navbar-expand-sm infolog" style="background-color: #0a4f90;">
                <img class="img-fluid logocel" src="../recursos/img/images1.jpg" alt="hyr" id="logohyr" >
                
                <ul class="navbar-nav ml-auto" >
                  <li class="nav-item infologin" style="background-color: white;padding: 5px;border-top-left-radius: 17em;border-top-right-radius: 0em;border-bottom-right-radius: 0em;border-bottom-left-radius: 0em;padding-left: 3em;">Bienvenido:  <br><i class='fa fa-user-circle' aria-hidden='true'></i><b> <?php  echo $_SESSION['nom']; ?></b> </li>
                  <li class="nav-item cerrarsesionbtn" style="background-color: white;padding: 5px;"><a class="nav-link cerrarsesion" href="#" onclick="logout();"><i style="font-size:24px" class="fa">&#xf08b;</i>Cerrar Sesión</a></li>
                </ul>
                
  </nav>


