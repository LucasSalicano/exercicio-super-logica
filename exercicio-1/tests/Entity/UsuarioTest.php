<?php

use App\Entity\Usuario;

class UsuarioTest extends \PHPUnit\Framework\TestCase
{
    private $usuario;

    protected function setUp(): void
    {
        $this->usuario = new Usuario();
    }

    public function testNome()
    {
        $this->usuario->setNome("Lucas");

        self::assertNotEmpty($this->usuario->getNome());
        self::assertIsString($this->usuario->getNome());
        self::assertSame("Lucas", $this->usuario->getNome());
    }

    public function testNomeLogin()
    {
        $this->usuario->setNomeLogin("Lucas");

        self::assertNotEmpty($this->usuario->getNomeLogin());
        self::assertIsString($this->usuario->getNomeLogin());
        self::assertSame("Lucas", $this->usuario->getNomeLogin());
    }

    public function testEmail()
    {
        $this->usuario->setEmail("lucassalicano@hotmail.com");

        self::assertNotEmpty($this->usuario->getEmail());
        self::assertIsString($this->usuario->getEmail());
        self::assertSame("lucassalicano@hotmail.com", $this->usuario->getEmail());
    }

    public function testErroEmailInvalido()
    {
        self::expectException(\Exception::class);
        self::expectExceptionMessage("Informe um e-mail válido!");

        $this->usuario->setEmail("lucassalicano@hotmail");
    }

    public function testSenha()
    {
        $this->usuario->setSenha("123");

        self::assertNotEmpty($this->usuario->getSenha());
        self::assertIsString($this->usuario->getSenha());
        self::assertSame("123", $this->usuario->getSenha());
    }
}