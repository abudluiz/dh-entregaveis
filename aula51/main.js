//EX 1

//let​ objetoEmFormatoJSON ​=​ ​'​{​ ​"atributo"​:​ ​"valor"​,​ ​"atributo1"​:​ ​1​,​ ​"atributo2"​:​ ​[], "atributo3"​:​ null​,​ ​"atributo4"​:​ ​false​ ​}'​

let respostaDaAPI = '{"propriedade1": "banana"}'
//transforma em objeto para poder enviar para outros sistemas
let objetoExercicio1 =  JSON.parse(respostaDaAPI)

//console.log(objetoExercicio1.propriedade1)
// transforma o objeto em string para que o sistema que recebeu seja um dado.
let objetoExercicio1String =  JSON.stringify(objetoExercicio1)

//EX 2
let amigos = '{"numero":"4","amigos":["Rodrigo","Rafael","Tiago"]}'
let objetoAmigos = JSON.parse(amigos)
let stringAmigos =  JSON.stringify(objetoAmigos)

//console.log(stringAmigos)

//EX3 e A
let objeto3Strings = '{"amigos":[{"1":"Ricardo"},{"2":"Felipe"}, {"3":"Artur"}]}'
let objetoAmigos3 = JSON.parse(objeto3Strings)
let stringAmigos3 =  JSON.stringify(objetoAmigos3)

//console.log(objetoAmigos3.amigos[0]["1"])

// EX4 html criado

// EX5 e EX7

let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            let resposta = JSON.parse(xmlhttp.responseText)
            //let respostaEmArray = Object.entries(resposta.contenido)
            let respostaEmArray = Object.keys(resposta.contenido)
            let criandoOption = ""

            respostaEmArray.forEach(function(select){
                criandoOption += "<option>" + select + "</option>"
            })
            selectPaises.innerHTML = criandoOption
        }
    }

xmlhttp.open ("GET", "http://pilote.techo.org/?do=api.getPaises", true)
xmlhttp.send()

//EX8 API com ERRO

//EX9
