//jquery

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
        
        //carousel
        $('.carousel').carousel({
          interval: 5000,
          touch: true
        });
    }
    
);

//Vanila JS

// When the user scrolls the page, execute myFunction
window.onscroll = function() {stickyHeader()};

// Get the header
let header      = document.getElementById("header");
let header_nav  = document.querySelector('.header-content');
let menu        = document.querySelector('.header-menu');
let main        = document.querySelector(".main-wrap")
let logo        = document.querySelector(".header-logo");


// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader(){ 
  if(window.pageYOffset > 70){
    header.classList.add("sticky");
    main.style.marginTop = "70px"
    logo.style.display = 'none';
    menu.style.paddingRight = '0px';

  }else{
    header.classList.remove("sticky")
    main.style.marginTop = "0px"
    menu.style.paddingRight = '50px';
    logo.style.display = 'block';

    if(window.innerWidth < 980){
      logo.style.position = 'absolute';
      logo.style.left = 'calc(50% - 40px)';      
    }
    else{      
      logo.style.position = 'relative';
      logo.style.left = '20px'
    }
  }
}

//VUE js
let vm = new Vue({
    data(){
      return{
        nome: '',
        email: ''
      }
    },
    methods: {
      enviar(){
        if(this.email != '' && this.nome != ''){
          localStorage.setItem('nome', this.nome)
          localStorage.setItem('email', this.email)
        }else{
          alert('Por favor, preencha todos os dados')
        }
      }
    }
  })

  vm.$mount('#optin_app')