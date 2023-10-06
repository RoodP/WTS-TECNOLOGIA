cadastro_cliente();

function open_page(page){
  $('#content-wrapper').load(page);
  }


function toggleMenu(){
  const menuMobile = document.getElementById("menu-mobile")

  if(menuMobile.className === "menu-mobile-active"){
      menuMobile.className = "menu-mobile"
  }else{
      menuMobile.className = "menu-mobile-active"
  }
}

function cadastro_cliente(){
  conlose.log('aqui')
  let nome_completo   = $('#nome_c').val();
  let email   = $('#email_c').val();
  let celular   = $('#celular_c').val();

    if(nome_completo == ''){
      alert_page('Erro', 'Verifique seu nome', 'warning');
      return false;
  }
    if(email == ''){
      alert_page('Erro', 'Verifique seu nome', 'warning');
      return false;
  }
    if(celular == ''){
      alert_page('Erro', 'Verifique seu nome', 'warning');
      return false;
  }

  $.ajax({
    type: "POST",
    url: 'rotinas/cadastro.php',
    dataType:"json",
    data:{
        nome_completo : nome_completo,
        email         : email,
        celular       : celular,   
        acao          : btoa ('salvar_cadastro_c')        
    },
    success: function(response){
        //console.log(response)
        if(response.status == true){
            alert_page('Sucesso!', response.msg, 'success');
            clean_form();
            $('#md_cadastro_pessoa_fisica').modal('hide');
            buscar_dados();
        }else{
            alert_page('Erro!', response.msg, 'warning');
        }
    },
    error: function(e){
        alert_page('Erro!', e, 'warning');

    }
});


}

