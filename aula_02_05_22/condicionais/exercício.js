hora = 12
if(hora<12){
    console.log('Bom dia')
}else{
    if(hora<18){
        console.log('Boa tarde')
    }else{
        if (hora<24) {
            console.log('Boa noite')
        }else{
            console.log('O valor digitado não é um horário.')
        }
        
    }
}