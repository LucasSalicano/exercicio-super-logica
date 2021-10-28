<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Cadastro de Usuários</h1>
    </div>
</div>
<div class="container">
    <?php
    if (isset($_SESSION["request"]) && $_SESSION["request"] == "success") {
        ?>
        <div class="alert alert-success" role="alert">
            Usuário cadastrado com sucesso!
        </div>
        <?php
        unset($_SESSION["request"]);
        }
    ?>
    <form method="post" name="formulario" action="/usuarios/salvar">
        <div class="form-row">
            <div class="col-md-6">
                <label for="name">Nome completo:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div class="col-md-6">
            <div class="col-md-6">
                <label for="userName">Nome de login:</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2">
                <label for="zipCode">CEP</label>
                <input type="text" class="form-control" id="zipCode" name="zipCode" required>
            </div>
            <div class="col-md-4">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="password">Senha (8 caracteres mínimo, contendo pelo menos 1 letra e 1 número):</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8" required>
            </div>
        </div>
        <hr>
    </form>
    <a href="/usuarios/index" class="btn btn-outline-dark">voltar</a>
    <button class="mt-2 float-right btn btn-outline-success" onclick="enviarFormulario()">Cadastrar</button>
</div>
<script src="../../Public/js/index.js"></script>

