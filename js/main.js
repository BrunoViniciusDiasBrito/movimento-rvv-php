$(document).ready(
    function(){
        const windowWidth = $(window).width()
        const documentWidth = $(document).width()
        const menu_desktop = $('.header-menu')
        const logo = $('.header-logo')
        const mobile_nav = $('.header-mobile-wrap')
        const mobile_nav_menu = $('.header-mobile-menu')
        const icon_menu = $('.menu-icon')
        
        if(windowWidth < 980 || documentWidth < 980){
            menu_desktop.toggle()
            logo.toggle()
            mobile_nav.toggle()
        }

        icon_menu.on('click', function(){
            mobile_nav_menu.toggle(500)
        })
    }
);