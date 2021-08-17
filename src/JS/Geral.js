console.log('Hello World');
/* Esse JavaScript esta conectado a pagina inicial(Pinturas) e a da pintura */

/* Função de voltar uma página */
function Voltar() {
    window.history.back();
}
/* Teste da estrurura do caso */
var Login = document.getElementById("login");
var Pintura = document.querySelector(".ImgPint");
console.log(Pintura);
var InfoPint1 = document.querySelector(".ConteudoInfo-1");
var InfoPint2 = document.querySelector(".ConteudoInfo-2");
var InfoPint3 = document.querySelector(".ConteudoInfo-3");
var InfoPint4 = document.querySelector(".ConteudoInfo-4");
var InfoPint5 = document.querySelector(".ConteudoInfo-5");
var InfoPint6 = document.querySelector(".ConteudoInfo-6");
var InfoPint7 = document.querySelector(".ConteudoInfo-7");
var InfoPint8 = document.querySelector(".ConteudoInfo-8");
var InfoPint9 = document.querySelector(".ConteudoInfo-9");
var InfoPint10 = document.querySelector(".ConteudoInfo-10");
var InfoPint11 = document.querySelector(".ConteudoInfo-11");
var InfoPint12 = document.querySelector(".ConteudoInfo-12");

User = true;
switch (User) {
    case true:
        console.log("Usuário ON");
        Login.style.display = "none";
        document.querySelector(".ConteudoInfo-01").style.display = "none";
        document.querySelector(".ConteudoInfo-02").style.display = "none";
        document.querySelector(".ConteudoInfo-03").style.display = "none";
        document.querySelector(".ConteudoInfo-04").style.display = "none";
        document.querySelector(".ConteudoInfo-05").style.display = "none";
        document.querySelector(".ConteudoInfo-06").style.display = "none";
        document.querySelector(".ConteudoInfo-07").style.display = "none";
        document.querySelector(".ConteudoInfo-08").style.display = "none";
        document.querySelector(".ConteudoInfo-09").style.display = "none";
        document.querySelector(".ConteudoInfo-010").style.display = "none";
        document.querySelector(".ConteudoInfo-011").style.display = "none";
        document.querySelector(".ConteudoInfo-012").style.display = "none";
        break; /* Fechar o caso anterior */
    case false:
        console.log("Usuário OFF");
        InfoPint1.style.display = "none";
        InfoPint2.style.display = "none";
        InfoPint3.style.display = "none";
        InfoPint4.style.display = "none";
        InfoPint5.style.display = "none";
        InfoPint6.style.display = "none";
        InfoPint7.style.display = "none";
        InfoPint8.style.display = "none";
        InfoPint9.style.display = "none";
        InfoPint10.style.display = "none";
        InfoPint11.style.display = "none";
        InfoPint12.style.display = "none";
        document.querySelector(".linkPint1").style.display ="none";
        document.querySelector(".linkPint2").style.display ="none";
        document.querySelector(".linkPint3").style.display ="none";
        document.querySelector(".linkPint4").style.display ="none";
        document.querySelector(".linkPint5").style.display ="none";
        document.querySelector(".linkPint6").style.display ="none";
        document.querySelector(".linkPint7").style.display ="none";
        document.querySelector(".linkPint8").style.display ="none";
        document.querySelector(".linkPint9").style.display ="none";
        document.querySelector(".linkPint10").style.display ="none";
        document.querySelector(".linkPint11").style.display ="none";
        document.querySelector(".linkPint12").style.display ="none";
}
/* Entrar na tela das Pinturas */
var btnConsultar = document.getElementById("Consultar");