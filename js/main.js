$(document).ready(
    function(){
        
        const icon_menu = $('.menu-icon')        
        
        icon_menu.on('click', function(){
            let confirma = window.confirm('Quer acessar ao menu mobile?')
            if(confirma){
                alert('Sem menu mobile por enquanto')
            }else{
                alert('Sem menu mobile por enquanto 2')
            }
            
        })
    }
);