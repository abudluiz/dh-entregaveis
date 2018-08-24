
// ex 1

function elevarAoSegundo(a,b) {
    return a**b;
}

//console.log(elevarAoSegundo(5,2))

//ex2

let quadrado = function(a) {
    return a*a;
}

//console.log(quadrado(5))

//ex3

function atribuicao() {
    var numero = 5;
   }
//   console.log(atribuicao);

//ex4

function trianguloRetangulo(a,b) {
    
    function quadrado(numero) {
        return numero*numero;
    }

    return (Math.sqrt(quadrado(a) + quadrado(b))+a+b);

   }

   console.log(trianguloRetangulo(2,2))

// function perimetro(numero1,numero2,trianguloRetangulo){
//     return numero1+numero2+trianguloRetangulo;
// } 

// console.log(perimetro(2,2,trianguloRetangulo))
//ex5

function meuSanduiche(a,b,callback) {

//    console.log( 'estou comendo um sanduíche de:'+' '+a+' '+b);

    setTimeout( function(){
        callback();
        }, 2000 );
       }
       function callback(){
//        console.log( 'Terminei.Estou satisfeito.' );
       }

//meuSanduiche('carne','queijo',callback);
