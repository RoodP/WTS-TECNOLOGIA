<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Micro Empresa</title>
</head>
<body style="display: flex; flex-direction:row;">
    <aside class="sidebar" style="background-color: black;">
        <header class="sidebar-header">
            <img class="logo-img" src="https://sujeitoprogramador.com/steve.png" alt="foto do usuario">
            <span style="margin-left: 10%;"><h4>Micro's</h4></span>
        </header>
        <nav>
            <a href="#" onclick="open_page('index.php')">
                <button>
                    <span>
                        <i class="material-symbols-outlined" style="color: white;">home</i>
                        <span class="botao" style="color: white;">Inicio</span>
                    </span>
                </button>
            </a>
            <button>
                <span>
                    <i class="material-symbols-outlined">attach_money</i>
                    <span>Vendas</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="material-symbols-outlined">tag</i>
                    <span>Cadastro de mercadoria</span>
                </span>
            </button>
            <a href="#" onclick="open_page('cadastro.html')">
              <button>
                  <span>
                      <i class="material-symbols-outlined"  style="color: white;">how_to_reg</i>
                      <span style="color: white;">Cadastro de cliente</span>
                  </span>
              </button>
            </a>
            <button>
                <span>
                    <i class="material-symbols-outlined">email</i>
                    <span>Mensagens</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="material-symbols-outlined">person</i>
                    <span>Profile</span>
                </span>
            </button>
        </nav>
    </aside>

    <!-- menu mobile -->
    <button class="button-mobile" onclick="toggleMenu()">
        <i class="material-symbols-outlined">menu</i>
        <span>Menu</span>
    </button>

    <nav class="menu-mobile" id="menu-mobile">
        <button class="button-close" onclick="toggleMenu()">
            <span>
                <i class="material-symbols-outlined">close</i>
            </span>
        </button>

        <button>
          <span>
              <i class="material-symbols-outlined">home</i>
              <span>Inicio</span>
          </span>
      </button>
      <button>
          <span>
              <i class="material-symbols-outlined">attach_money</i>
              <span>Vendas</span>
          </span>
      </button>
      <button>
          <span>
              <i class="material-symbols-outlined">tag</i>
              <span>Cadastro de mercadoria</span>
          </span>
      </button>
      <button>
          <span>
              <i class="material-symbols-outlined">how_to_reg</i>
              <span>Cadastro de cliente</span>
          </span>
      </button>
      <button>
          <span>
              <i class="material-symbols-outlined">email</i>
              <span>Mensagens</span>
          </span>
      </button>
      <button>
          <span>
              <i class="material-symbols-outlined">person</i>
              <span>Profile</span>
          </span>
      </button>
    </nav>

        <div id="content-wrapper" style="padding:30px; margin-left:30px; background-color:#242531; margin-top:30px;"></div>

    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>