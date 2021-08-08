/* Voltar uma página */
function voltar() {
    window.history.back();
}

/* Teste de troca de elementos */

let NomePint = "Ban";
let Descrição = "Ban é um personagem, do anime/mangá, Nanatsu no Taizai, onde faz parte de uma organização chamada de Sete Pecados Capitais, o homem representa a ganância, com o símbolo em formato de raposa.";

document.querySelector(".Nome-Pint").innerHTML=(NomePint);
document.querySelector(".Desc-Pint").innerHTML=(Descrição);

let NomePintor = "Admin Nome Novo";
let DescriçãoPintor = "Nova descrição do pintor";

document.querySelector(".Nome-Admin").innerHTML=(NomePintor);
document.querySelector(".Desc-Admin").innerHTML=(DescriçãoPintor);