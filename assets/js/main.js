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

function validaUpload(){
    let nomeMusica = document.forms["fUpload"]["fNomeMusica"];
    let nomeAutor = document.forms["fUpload"]["fNomeAutor"];
    let dificuldade = document.forms["fUpload"]["fDificuldade"];
    let instrumento = document.forms["fUpload"]["fInstrumento"];

    if(nomeMusica.value == ""){
        nomeMusica.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(nomeAutor.value == ""){
        nomeAutor.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(dificuldade.value == ""){
        dificuldade.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(instrumento.value == ""){
        instrumento.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }
}


function validaEditarUsuario(){
    let nome = document.forms["fEditarUsuario"]["fNome"];
    let sobrenome = document.forms["fEditarUsuario"]["fSobrenome"];
    let senhaAntiga = document.forms["fEditarUsuario"]["fSenhaAntiga"];
    let senhaNova = document.forms["fEditarUsuario"]["fSenhaNova"];

    if(nome.value == ""){
        nome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(sobrenome.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(senhaAntiga.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }

    if(senhaNova.value == ""){
        senha.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }
}

function showPreview(event){
    if(event.target.files.length > 0){
        var imagem = document.getElementById("labelImagem");
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        imagem.style.display = "none";
        preview.src = src;
        preview.style.display = "block";
    }
}

function favoritar(idUsuario, idMusica, elemento){
    xhttp = new XMLHttpRequest();
    xhttp.open("POST", "validaFavoritar.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('id_usuario=' + idUsuario + "&" + 'id_musica=' + idMusica);
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            elemento.innerHTML = "Favoritado";
            elemento.disabled = true;
        }
    };
}