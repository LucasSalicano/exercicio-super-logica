<?php

namespace App\Entity;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;
    /**
     * @nome
     * @Column(type="string")
     */
    private string $nome;
    /**
     * @nomeLogin
     * @Column(type="string")
     */
    private string $nomeLogin;
    /**
     * @cep
     * @Column(type="string")
     */
    private string $cep;
    /**
     * @email
     * @Column(type="string")
     */
    private string $email;
    /**
     * @senha
     * @Column(type="string")
     */
    private string $senha;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNomeLogin(): string
    {
        return $this->nomeLogin;
    }

    /**
     * @param string $nomeLogin
     */
    public function setNomeLogin(string $nomeLogin): void
    {
        $this->nomeLogin = $nomeLogin;
    }

    /**
     * @return string
     */
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     */
    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new \Exception("Informe um e-mail válido!");
        }

        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     */
    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

}