<?php
  function headPrincipal(){

    echo "    <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <link href='css/bootstrap.min.css' rel='stylesheet'>
              <!-- Latest compiled and minified JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
              <link rel='shortcut icon' type='image/png' href='img/logoprincipal.png'>
              <script src='https://code.jquery.com/jquery.js'></script>
              <script src='js/bootstrap.min.js'></script>
              <link rel='stylesheet' type='text/css' href='css/style.css'/> ";

  }

  function menuPrincipal(){

    echo "  <nav class='navbar navbar-default'>
              <div class='container-fluid'>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class='navbar-header'>
                  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                  </button>
                  <a class='navbar-brand' href='#'>
                    <img alt='Brand' src='img/iconcohesivo.png'>
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                  <ul class='nav navbar-nav'>
                    <li class='active'><a href='#'>Cohesivo<span class='sr-only'>(current)</span></a></li>
                    <!-- <li><a href='#'>Link</a></li> -->
                    <li class='dropdown'>
                      <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Opciones <span class='caret'></span></a>
                      <ul class='dropdown-menu'>
                        <li><a href='#'>Action</a></li>
                        <li><a href='#'>Another action</a></li>
                        <li><a href='#'>Something else here</a></li>
                        <li role='separator' class='divider'></li>
                        <li><a href='#'>Separated link</a></li>
                        <li role='separator' class='divider'></li>
                        <li><a href='#'>One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class='navbar-form navbar-right'>
                    <div class='form-group'>
                      <input type='text' class='form-control' placeholder='Email'>
                    </div>
                    <div class='form-group'>
                      <input type='text' class='form-control' placeholder='Password'>
                    </div>
                    <button type='submit' class='btn btn-default btn btningreso'>Entrar</button>
                  </form>
                  <ul class='nav navbar-nav navbar-right'>
                    <li><a href='#'>Ingreso a cuenta</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav> ";
  }
            
?>