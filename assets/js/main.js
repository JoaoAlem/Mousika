function validaFormContato(){
    let email = document.forms["formContato"]["fEmail"];
    let nome = document.forms["formContato"]["fNome"];
    let mensagem = document.forms["formContato"]["fMensagem"];

    if(email.value == ""){
        email.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(nome.value == ""){
        nome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(mensagem.value == ""){
        mensagem.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }
}

function validaCadastro(){
    let nome = document.forms["formCadastro"]["fNome"];
    let sobrenome = document.forms["formCadastro"]["fSobrenome"];
    let email = document.forms["formCadastro"]["fEmail"];
    let confirmaEmail = document.forms["formCadastro"]["fConfirmaEmail"];
    let senha = document.forms["formCadastro"]["fSenha"];
    let confirmaSenha = document.forms["formCadastro"]["fConfirmaSenha"];

    if(nome.value == ""){
        nome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(sobrenome.value == ""){
        sobrenome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(email.value == ""){
        email.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(confirmaEmail.value == ""){
        confirmaEmail.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(email.value != confirmaEmail.value){
        email.className += " border border-warning";
        confirmaEmail.className += " border border-warning";
        alert("Email incorreto com o campo confirma Email");
        return false;
    }

    if(senha.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(confirmaSenha.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(senha.value != confirmaSenha.value){
        senha.className += " border border-warning";
        confirmaSenha.className += " border border-warning";
        alert("Senha incorreto com o campo confirma senha");
        return false;
    }
}

function validaLogin(){
    let email = document.forms["formLogin"]["fEmail"];
    let senha = document.forms["formLogin"]["fSenha"];

    if(email.value == ""){
        email.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(senha.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

}

function carregarMais(endereco, elemento){
    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(elemento).innerHTML += this.responseText;
        }
    };

    xhttp.open("GET", endereco, true);
    xhttp.send();
}