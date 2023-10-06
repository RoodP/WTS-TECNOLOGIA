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
        <aside class="sidebar">
            <header class="sidebar-header">
                <img class="logo-img" src="https://sujeitoprogramador.com/steve.png" alt="foto do usuario">
                <span style="margin-left: 10%;"><h4>Micro's</h4></span>
            </header>
            <nav>
            <a href="index.php">
                    <button>
                        <span>
                            <i class="material-symbols-outlined" style="color: white;">home</i>
                            <span class="botao" style="color: white;">Inicio</span>
                        </span>
                    </button>
                </a>
                <button data-bs-toggle="modal" data-bs-target="#modal_vendas">
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
                <button type="button" data-bs-toggle="modal" data-bs-target="#modal_cadastro_cliente">
                    <span>
                        <i class="material-symbols-outlined" >how_to_reg</i>
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

    <div class="modal fade" id="modal_cadastro_cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content"   style="background-color:#202123;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome_c" name="nome_c" required>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email_c" name="email_c" required>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label for="telefone" class="form-label">Celular:</label>
                        <input type="tel" class="form-control" id="celular_c" name="celular_c" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary"  onclick="cadastro_cliente()">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_vendas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"   style="background-color:#202123;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">VENDAS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-2 col-md-3  col-xs-12">
                        <label class="control-label" for="tipo_edit">Produto:</label>
                        <select id="tipo_edit" class="form-control" style="width: 535px;" ></select>
                    </div>
                    <div class="col-sm-2 col-md-3 col-xs-12">
                        <label class="control-label" for="tipo_edit">Valor:</label>
                        <input id="tipo_edit" class="form-control" style="width: 535px;" ></input>
                    </div><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" onclick="salvar()" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <div id="grafico-3"></div>
    <div id="content-wrapper" style="padding:30px; margin-left:30px; margin-top:30px;"></div>

    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

<script>

Highcharts.theme = {
    
    colors: ['#666', '#ef9501'],
    credits: {
       enabled: false
   },
    chart: {
       backgroundColor: '#ffffffed',
       style: {
          fontFamily: 'Segoe UI Light, sans-serif'
       }
    },
     exporting: {
          enabled: false
   },
    title: {
       style: {
          fontSize: '24px',
          fontWeight: 'Normal',
          textTransform: 'uppercase',
          color: '#333'
       }
    },
    subtitle: {
       style: {
          fontSize: '16px',
          fontWeight: 'normal',
          
       }
    },
    tooltip: {
       borderWidth: 0,
       backgroundColor: '#fff',
       shadow: true,
       formatter: function () {
             return '<b>' + 'Tramo de Ingresos: Entre ' + this.point.category + ' mil pesos </b><br/>' + this.series.name + 
                 ': ' + this.point.y +'%' }
    },
    
    legend: {
  
       itemStyle: {
          fontWeight: 'thin',
          fontSize: '12px',
          
       }
    },
    xAxis: {
     
       gridLineWidth: 0,
       labels: {
          style: {
             fontSize: '12px'
          }
       },
      categories: ['Janeiro', 'Jevereiro', 'Marcio', 'Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro' ],
    },
    yAxis: {
       
       title: {
          style: {
             textTransform: 'uppercase'
          }
  
       },
       labels: {
          style: {
             fontSize: '12px',
             
          }
       }
    },
 };
 
 // Apply the theme
 Highcharts.setOptions(Highcharts.theme);
 
     Highcharts.chart('grafico-3', {

     chart: {
            zoomType: 'x'
        },

     title: {
            text: 'Gráfico de vendas',align:'left'
        },

    subtitle: {
            text: '',align:'left'
        },

     yAxis: {
         title: {
             text: '% del total de clientes'
         }
        
     },
       
     legend: {
         layout: 'horizontal',
         align: 'center',
         verticalAlign: 'bottom'
     },
 
     plotOptions: {
       line: {
             dataLabels: {
                 enabled: true,
                
                 formatter: function () {
             return '<b>' + this.point.y +'%'}
               ,
               
             },
             lineWidth: 4,
      
     },
     
         series: {
              
         }
     },
             
     
       
     series: [{
         name: 'HOMBRES',
          marker: {
             fillColor: 'white',
             lineWidth: 1,
             lineColor:            Highcharts.getOptions().colors[0],
             symbol: 'circle'
         },
         data: [ 8.4, 32.8, 28.4, 13.8, 6.1, 2.8, 7.5, 0.2]
     }, {
         name: 'MUJERES',
          marker: {
             fillColor: 'white',
             lineWidth: 1,
             lineColor:            Highcharts.getOptions().colors[1],
             symbol: 'circle'
         },
         data: [7.5, 50.7, 24.5, 8.1, 3.5, 1.5, 4.2, 0.1]
     }, ]
 
 });
 
</script>
</body>
</html>