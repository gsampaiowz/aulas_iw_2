var botao = document.getElementById('botao')
var lamp = document.getElementById('lampada')

//console.log(lamp)

botao.onclick = function(){
    //alert('funcionou')
    if(botao.value == 'Acender'){
        lamp.src = './img/acesa.jpg'
        botao.value = 'Apagar'
        botao.innerHTML = 'Apagar'
        document.body.style.backgroundColor = "royalblue"
        document.getElementById('qisso').innerHTML = "VAMOS ILUMINAR ISSO AQUI"
    }else{
        lamp.src = './img/apagada.jpg'
        botao.value = 'Acender'
        botao.innerHTML = 'Acender'
        document.body.style.backgroundColor = "darkblue"
        document.getElementById('qisso').innerHTML = "ESCURIDÃÃÃOOOO"
    }
}