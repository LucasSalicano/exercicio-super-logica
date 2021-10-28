<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Usuários</h1>
        <p class="lead">Listagem de todos os usuários</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="float-right">
                <a href="/usuarios/novo" class="btn btn-outline-success mb-2">Novo</a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Cep</th>
                    <th scope="col">E-mail</th>
                </tr>
                </thead>
                <tbody>
                <?php
                use App\Models\Usuario;

                $usuarios = (new Usuario())->findAll();
                /** @var App\Entity\Usuario $usuario */
                foreach ($usuarios as $usuario) {
                    echo "
                        <tr>
                            <th scope='row'>{$usuario->getId()}</th>
                            <td>{$usuario->getNome()}</td>
                            <td>{$usuario->getNomeLogin()}</td>
                            <td>{$usuario->getCep()}</td>
                            <td>{$usuario->getEmail()}</td>
                        </tr>
                    ";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>