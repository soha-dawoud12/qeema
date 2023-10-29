
$(document).ready(function(){


    $(".categories .menu li a").on("click" , function(e){
        e.preventDefault();
        $(".content").removeClass("active1");
        let target = $(this).data("target");
        $(target).addClass("active1");

        $(this).parent("li").siblings().removeClass("active1");

        $(this).parent("li").addClass("active1");

        let breadcrumb = $(this).text();
        $('.second-bread').text(breadcrumb);
    });
$(" .categories .menu-item").on("click" , function(){
    if($(this).has("> .submenu").length > 0){
        $(this).find(" > .submenu > .submenu-item:first-child").click();
    }
    $(this).siblings(".menu-item").find(".submenu").hide();
})

$(".categories .submenu-item").on("click" , function(e){
    if($(this).has("> .submenu").length > 0){
        $(this).find(" > .submenu > .submenu-item:first-child").click();
    }
    $(this).siblings().find(".submenu").hide();
    e.stopPropagation();
});

$(".categories .submenu-key").on("click" , function(){
    $(this).parents(".submenu").find(".submenu").hide();
    $(this).next(".submenu").slideToggle(200);
});

$(".categories .menu-item .submenu-item").on("click" , function(){
    $(this).addClass("active1");
    $(this).siblings(".submenu-item").removeClass("active1");
});

$(" .categories .menu-item .submenu-item").on("click" , function(){
    $(this).addClass("active1");
    $(this).siblings(".submenu-item").removeClass("active1");
});

$(".filter-icon").on("click" , function(){
    $(this).next(".filter-list").slideToggle(200);
})

});