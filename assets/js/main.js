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
        nome.className += " border border-warning";
        alert("Informe os campos obrigatórios");
        return false;
    }
}