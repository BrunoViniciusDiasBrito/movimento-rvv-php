/*
        jquery 
*/

$(document).ready(
    function(){

      //menu
      $('.header-menu').find('li').on('click', function(){
        swal('Movimento Reviva','Menu Desktop em andamento...', { button: false, timer: 3000, }) 
        if($(this).attr('class') == 'loja'){
          swal('Movimento Reviva','A loja está em construção...', { button: false, timer: 3000, icon: 'info' })
        }else if($(this).attr('class') == 'natal'){
          document.location = '/natal.php'
        }else{
          swal('Movimento Reviva','Menu Desktop em andamento...', { button: false, timer: 3000, })
        }
      })
      
      //menu mobile
      const icon_menu = $('.menu-icon')
      const natal_icon = $('.natal-bell')
      
      icon_menu.on('click', function(){            
          swal('Movimento Reviva','Menu Mobile em andamento...', { button: false, timer: 3000,})            
      })

      natal_icon.on('click', function(){
        document.location = '/natal.php'
      })

      
      //carousel
      $('.carousel').carousel({
        interval: 5000,
        touch: true
      });
    }
    
);

/* 
      Vanila JS 
*/

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
    }
  }
}

/*
      Vue Js 
*/
let vm = new Vue({
    data(){
      return{
        nome: '',
        email: ''
      }
    },
    methods: {
      sendEmail: (e) => {
        emailjs.sendForm('Bruno Brito', 'template_6ubhije', e.target, 'user_SCP46pzTkY6HkjhaqrNmY')
          .then((result) => {
            if(this.email != '' && this.nome != ''){
              console.log(result.status)
              swal({
                icon:'success',
                title: 'Movimento Reviva',
                text: 'Seus dados foram enviados com sucesso!'
              })}else{
                swal('warn','Movimento Reviva','Por favor, preencha todos os dados')
              }
          }, (error) => {
              console.log('FAILED...', error);
        });
      }
    }
  })

  vm.$mount('#optin_app')

  
