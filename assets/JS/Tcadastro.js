var botao = document.getElementById('botao');
var nome = document.getElementById('nome');
var sobrenome = document.getElementById('sobrenome');
var email = document.getElementById('email');
var password = document.getElementById('password');
var telefone = document.getElementById('telefone');

    console.log('Tela de Cadastro funfa');
botao.addEventListener('click', function(){
    if(nome.value.length < 3){
        alert('Campo De Nome Vazio');
    }
    if(sobrenome.value.length < 3){
        alert('Campo De Sobrenome Vazio');
    }
    if(email.value.length < 3){
        alert('Campo De Email Vazio');
    }
    if(password.value.length < 3){
        alert('Campo De Senha Vazio');
    }
    if(telefone.value.length < 3){
        alert('Campo De Telefone Vazio');
    }
});