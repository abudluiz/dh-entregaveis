
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

//   console.log(trianguloRetangulo(2,2))

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

// Exercícios Array
//ex1

let numeros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
// let resultado = numeros.forEach(function(value, index) {
// if (value %7===0){
// //    console.log("São múltiplos de 7:" + value)
// }
// });

//ex2
// let resultado = numeros.map(function(numero) {
//    return Math.sqrt(numero);
//   });

//  console.log(resultado)

  //ex3

  var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];

// let resultado = enigma.filter(function(codigo) {
//     return typeof codigo === 'string';
//    });

//    console.log(resultado)

//ex4

// let resultado1 = enigma.filter(function(codigo) {
//         return typeof codigo === 'number';
//     });

// let resultado2 = resultado1.reduce(function(total, numero){
//     return total + numero;
//    }, 0);
//    console.log(resultado2)

// ex 1, 2, 3 Objeto Literal

   var pessoa = {
    nome: "Rebeca",
    sobrenome: "Suarez",
    idade: 22,
    sexo: "Feminino",
    estadoCivil: "Branco",
    filmesPreferidos: ["Nemo", "Sherek", "Jamaica Abaixo de Zero"],
    cumprimento: function(){
        console.log ("Olá" + " " +  this.nome + " " + this.sobrenome)
    }
    };

    pessoa.idade = 25,

pessoa.cumprimento()
