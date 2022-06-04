var botao = document.getElementById('botao')
var lamp = document.getElementById('lampada')
var corpo = window.document.body
//console.log(b)

corpo.style.background = 'black'

botao.onclick = function(){

    if(botao.value == 'acender'){
        lamp.src = './img/covera.jpg'
        botao.value = 'apagar'
        botao.innerHTML= 'apagar'
        corpo.style.background = 'white'
    }
    else{
        lamp.src='./img/coverb.jpg'
        botao.value = 'acender'
        botao.innerHTML = 'acender'
        corpo.style.background = 'black'
    }
}


