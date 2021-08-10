/* Esse JavaScript esta conectado a Pag-inicial e a Pag-Consulta */

/* Função de voltar uma página */
function voltar() {
    window.history.back();
}

/* Imagem selecionada */
function ImgSelecionada(){
    document.querySelector(".Img-Pint").innerHTML=(document.querySelector(".select"));
}
/* Teste de troca de elementos */

/* Imagens */

document.querySelector(".Foto-Admin").src="https://img.freepik.com/vetores-gratis/astronauta-bonito-voando-no-espaco-dos-desenhos-animados-icone-ilustracao_138676-2702.jpg?size=338&ext=jpg&ga=GA1.2.2045703221.1627862400";

/* textos */
let NomePint = "Ban";
let Descrição = "Ban é um personagem, do anime/mangá, Nanatsu no Taizai, onde faz parte de uma organização chamada de Sete Pecados Capitais, o homem representa a ganância, com o símbolo em formato de raposa.";

document.querySelector(".Nome-Pint").innerHTML=(NomePint);
document.querySelector(".Desc-Pint").innerHTML=(Descrição);

let NomePintor = "Astronauta";
let DescriçãoPintor = "Nova descrição do pintor";

document.querySelector(".Nome-Admin").innerHTML=(NomePintor);
document.querySelector(".Desc-Admin").innerHTML=(DescriçãoPintor);