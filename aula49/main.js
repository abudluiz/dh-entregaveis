let cumprimentar = document.querySelector('#botao')
cumprimentar.onclick = function(){ 
    alert(" Olá ")
}
//Ex 3
let corFundo = document.querySelector('#botaoFundo')
corFundo.onclick = function(){ 
    document.body.style.background = "green"
}
//Ex 4
let textoImagem = document.querySelector('#imagem')
textoImagem.onmouseover = function() {
texto.innerHTML = "<p>Estou vendo a imagem</p>"
}
// Ex 5

function alterandoTexto (){
    texto.innerHTML = "<p>Estou clicando na imagem</p>"
}
textoImagem.addEventListener("click", alterandoTexto)

// Ex 6

let corBody = document.querySelector('body')

function mudarBody(){

    this.style.background = "red"
}
corBody.addEventListener("click", mudarBody)

//Ex 7

corBody.removeEventListener("click", mudarBody);

//Ex 8

let idade = document.querySelector('#idade')
 document.querySelector("#form").onsubmit = function (event) {
 event.preventDefault()
 if (idade.value < 18) {
 alert('Idade não autorizada!')
 } else {
    form.submit()
 }
}

//Ex 9

let mouseBody = document.querySelector('body')

mouseBody.addEventListener('mousemove', function(event) {
    event.clientX;
    event.clientY;
    console.log(event.clientX)   
    console.log(event.clientY)   
})

//EX 1

let alerta1 = setTimeout(function(){ alert("Você está a 10 segundos nessa página."); }, 10000);

//EX 2
let alerta2 =setInterval(function(){ alert("Ficou mais 8 segundos."); }, 8000);

//Ex 3

let parar = setTimeout( function(){
    clearInterval(alerta1)

clearInterval(alerta2)
}, 20000)
