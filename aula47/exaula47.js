let numero1 = prompt ('Digite um número')
let numero2 = prompt ('Agora, digite outro número')
let confirma = confirm ('Tem certexa que quer esse números')

if(confirma) {
let numeroMaior = parseInt(numero1)> parseInt(numero2)
    ? numero1
    : numero2   
    alert('Numero maior é:' + numeroMaior) 
} else {
    window.location.reload()
}