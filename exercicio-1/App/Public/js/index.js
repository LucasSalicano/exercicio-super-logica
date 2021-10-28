function enviarFormulario() {
    var validacao = validarCampos();

    if (validacao){
        document.formulario.submit();
    }

}

function validarCampos() {
    var senha = document.formulario.password;
    var cep = document.formulario.zipCode;
    var validaSenha = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var validaCep = /^\d{5}-\d{3}$/;

    if (!validaSenha.exec(senha.value)) {
        return alert("A senha deve conter 8 caracteres mínimo, com pelo menos 1 letra e 1 número");
    }

    if (!validaCep.exec(cep.value)) {
        return alert("o CEP digitado é incorreto!");
    }

    return true;
}