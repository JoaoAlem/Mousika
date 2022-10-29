function validaFormContato(){
    let email = document.forms["formContato"]["fEmail"];
    let nome = document.forms["formContato"]["fNome"];
    let mensagem = document.forms["formContato"]["fMensagem"];

    if(email.value == ""){
        email.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }else if(nome.value == ""){
        nome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }else if(mensagem.value == ""){
        mensagem.className += " border border-warning";
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