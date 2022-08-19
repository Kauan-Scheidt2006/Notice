function nome(){
    var user = document.getElementById("pas");
    user.addEventListener('change', nome);


    var alterar = document.getElementById("usuario");

    if(user != ""){
        alterar.disabled = false;}

    else{
        alterar.disabled = true;
        alert("Nome Inválido")}
}

function mudar() {
    var password = document.getElementById("pas");
    password.addEventListener('change', mudar);

    var password2 = document.getElementById("pas2");
    password2.addEventListener('change', mudar);

    var enviar = document.getElementById("senha");

    senha = password.value;
    senha2 = password2.value;

    if (senha === senha2 && senha != "") {
        enviar.disabled = false;}

    else {
        enviar.disabled = true;
        alert("ERRO: Senhas não conferem");
    }
}

function endereço() {
    var rua = document.getElementById("rua");
    rua.addEventListener('change', endereço);

    var bairro = document.getElementById("bairro");
    bairro.addEventListener('change', endereço);

    var cidade = document.getElementById("cidade");
    cidade.addEventListener('change', endereço);

    var submit = document.getElementById("local");

    if (rua.value != "" && bairro.value != "" && cidade.value != "") {
        submit.disabled = false;
    }

    else {
        submit.disabled = true;
        alert("Verificar os dados de endederço inseridos");
    }
}
