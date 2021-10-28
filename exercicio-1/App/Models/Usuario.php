<?php

namespace App\Models;


use App\Controllers\ErroController;
use App\Core\EntityManagerFactory;
use App\Entity\Usuario as UsuarioEntity;
use App\Helper\Functions;

class Usuario implements Crud
{
    /**
     * @var EntityManagerFactory $entityManager
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerFactory())->getEntityManager();
    }

    public function store()
    {
        $formulario = (object)$_POST;

        if (sizeof($_POST) == 0) {
            (new ErroController())->index();
        }

        try {
            $senhaCriptografada = Functions::criptografarSenha($formulario->password);

            $usuario = new \App\Entity\Usuario();
            $usuario->setEmail($formulario->email);
            $usuario->setCep($formulario->zipCode);
            $usuario->setNome($formulario->name);
            $usuario->setSenha($senhaCriptografada);
            $usuario->setNomeLogin($formulario->userName);

            $this->entityManager->persist($usuario);
            $this->entityManager->flush();

            $_SESSION["request"] = "success";
            return true;
        } catch (\Exception | \Error $error) {
            throw new \Exception("Erro ao registrar usuario: " . $error);
        }

    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function show()
    {
        // TODO: Implement show() method.
    }

    public function findAll()
    {
        return $this->entityManager->getRepository(UsuarioEntity::class)->findAll();
    }
}