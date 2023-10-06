
<div class="row">
    <h1 class="mb-4" style="margin-left: 25% !important; margin-top: 2%;">Cadastro de Cliente</h1>
    <form style="margin-left: 25% !important;">
       
            <div class="col-md-6 ">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome_c" name="nome_c" required>
            </div>
            
            <div class="col-md-6 ">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email_c" name="email_c" required>
            </div>
            
            <div class="col-md-6 ">
                <label for="telefone" class="form-label">Celular:</label>
                <input type="tel" class="form-control" id="celular_c" name="celular_c" required>
            </div><br>  
            
                <button type="button" class="btn btn-primary" onclick="cadastro_cliente()">Cadastrar</button>    

    </form>


</div>
<script src="js/index.js"></script>