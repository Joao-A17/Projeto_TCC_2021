var botao = document.getElementById('botao');
var nome = document.getElementById('nome');
var sobrenome = document.getElementById('sobrenome');
var email = document.getElementById('email');
var password = document.getElementById('password');
var telefone = document.getElementById('telefone');

    console.log('Tela de Cadastro funfa');
botao.addEventListener('click', function(){
    if(nome.value.length < 3, sobrenome.value.length < 3, email.value.length < 3, password.value.length < 3, telefone.value.length < 3){
        alert('Algum campo se encontra vazio!');
    }
});