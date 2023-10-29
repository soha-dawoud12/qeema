<script src="assets/js/jQuery3.4.1.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->

<script src="assets/js/bootstrap.bundle.min.js"> </script>
<script src="assets/js/swiper.min.js"> </script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/code.js"></script>
<script src="assets/js/voice-filter.js"></script>
<script src="assets/js/course-lesson.js"></script>


<script>
    $(document).ready(function () {


        $('[data-toggle="tooltip"]').tooltip({
            trigger : 'hover'
        })
        $('.btn-secondary').click(function(){
            $('[data-toggle="tooltip"]').tooltip('hide');
        });




        var $header_top = $('.header-top');
        // var $nav = $('nav');
        var $fixed = $('.fixed');
        // toggle menu responsive
        var menuStatus = true;
        $('.header-top a.menu  ').on('click', function () {
            //ahmed
            if(menuStatus){
                $('body').addClass('mobile-menu-active');
                $(".mobile-menu").show();
                menuStatus = false;
            }else{
                $('body').removeClass('mobile-menu-active');
                $(".mobile-menu").hide();
                menuStatus = true;
                console.log("no");
            }});
        $(".mobile-menu li a").on("click" , function(e){
            //Hide nav list when we click on ahmad
            menuStatus = true;
            $(".mobile-menu").hide();
            $('body').removeClass('mobile-menu-active');
        });
        $fixed.find('a.toggle-menu-contact').on('click', function() {
            $(this).parent().toggleClass('open-menu ');
            //hide('remove-menu').
        });



        // toggle menu  web
        $header_top.find('a.toggle-menu').on('click', function() {
            $(this).parent().toggleClass('open-menu');
            if(document.querySelector('#hidden').style.display == 'none'){
                document.querySelector('#hidden').style.display = 'inline';
            }else{
                document.querySelector('#hidden').style.display = 'none';
            }
            //hide('remove-menu').

        });

        $('.like i').on('click', function() {
            $(this).toggleClass('far fas');
        });
        new Swiper('.services .swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            slidesPerView: 4,
            // spaceBetween: 30,
            slidesPerGroup: 1,

            breakpoints: {
                320: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                    loop:true,
                },
                480: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                    loop:true,
                },
                640: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                    loop:true,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
                },

                1300: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
            }
        });



        new Swiper('.clients .swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            slidesPerView: 4,
            // spaceBetween: 30,
            slidesPerGroup: 3,

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    slidesPerGroup: 1,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1124: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            }
        });



        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    });


    // here I go

    function hidemenu() {
        let menu = document.querySelector('#menu-box');
        let sel = document.querySelector('#sel');

        if(menu.style.opacity == '0'){
            menu.style.transform = 'translate(0px,8px)';
            menu.style.opacity = '1';

            sel.style.transform = 'rotate(0deg)';
        }else{
            menu.style.transform = 'translate(-108%,8px)';
            menu.style.opacity = '0';

            sel.style.transform = 'rotate(180deg)';

        }
    }


    $(document).ready(function(){


        /* 1. Visualizing things on Hover - See next part for action on click */
        // $('#stars li').on('mouseover', function(){
        //     var onStar = parseInt($(this).data('value'), 10);
            // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
        //     $(this).parent().children('li.star').each(function(e){
        //         if (e < onStar) {
        //             $(this).addClass('hover');
        //         }
        //         else {
        //             $(this).removeClass('hover');
        //         }
        //     });
        //
        // }).on('mouseout', function(){
        //     $(this).parent().children('li.star').each(function(e){
        //         $(this).removeClass('hover');
        //     });
        // });


        /* 2. Action to perform on click */
        // $('#stars li').on('click', function(){
        //     var onStar = parseInt($(this).data('value'), 10);
            // The star currently selected
        //     var stars = $(this).parent().children('li.star');
        //
        //     for (i = 0; i < stars.length; i++) {
        //         $(stars[i]).removeClass('selected');
        //     }
        //
        //     for (i = 0; i < onStar; i++) {
        //         $(stars[i]).addClass('selected');
        //     }
        //
        //     // JUST RESPONSE (Not needed)
        //     var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        //     var msg = "";
        //     if (ratingValue > 1) {
        //         msg = "Thanks! You rated this " + ratingValue + " stars.";
        //     }
        //     else {
        //         msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        //     }
        //     responseMessage(msg);
        //
        // });


        var $works = document.querySelectorAll('.work');
        for ($i=0;$i<$works.length;$i++){
            $works[$i].onclick = function ()
            {
                this.parentNode.parentNode.classList.remove('video-play');
                this.firstElementChild.controls = 'controls';

                for (x=0;x<$works.length;x++){
                    $works[x].firstElementChild.pause();
                }
                this.firstElementChild.play();

            }
        }


        // pop up
        $(' header li.show-popup').click(function () {
            $($(this).data('popup')).fadeIn();

        });
        $(' .log-in a.show-popup').click(function () {
            $($(this).data('popup')).fadeIn();

        });
        $(' .log-in .find .show-popup').click(function () {
            $($(this).data('popup')).fadeIn();

        });



        $(' .log-in .entry button.show-popup').click(function () {
            $($(this).data('popup')).fadeIn();

        });

        $('.popup').click(function () {
            $(this).fadeOut();

        });
        // هاي الجزئية عشان امنع اني لما اضغط جوا البوكس الابيض انو ما يختفي
        $('.popup .inner-popup').click(function (e) {
            e.stopPropagation()

        });


        // ده عشان اضغط ع زر esc  الي بالكيبورد
        $(document).keydown(function (e) {
            if(e.keyCode ==  27){
                $('.popup').fadeOut();
            }

        });

        //popup video


        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });






        $(' .articles .owl-carousel').owlCarousel({
            // loop:true,

            margin:20,
            responsiveClass:true,
            type:true,
            nav:false,
            responsive:{
                0:{
                    items:1,

                },
                500:{
                    items:2,

                },
                768:{
                    items:2.5,

                },
                1200:{
                    items:3.5,

                    loop:false,

                }
            }

        });

        $(' .course-details .owl-carousel').owlCarousel({
            // loop:true,
            rtl:true,
            margin:20,
            responsiveClass:true,
            type:true,
            nav:false,
            responsive:{
                0:{
                    items:1,

                },
                500:{
                    items:2,

                },
                768:{
                    items:2.5,

                },
                1200:{
                    items:3.5,

                    // loop:false,

                }
            }

        });


        $(' .voices .owl-carousel').owlCarousel({
            // loop:true,

            margin:20,
            responsiveClass:true,
            type:true,
            nav:false,
            responsive:{
                0:{
                    items:2,

                },
                500:{
                    items:2.5,

                },
                768:{
                    items:3.5,

                },
                992:{
                    items:5,
                },
                1200:{
                    items:7,
                    margin:10,
                    loop:false,

                }
            }

        });


        $(' .order-details .owl-carousel').owlCarousel({
            // loop:true,

            margin:20,
            responsiveClass:true,
            type:true,
            nav:false,
            responsive:{
                0:{
                    items:1,

                },
                500:{
                    items:1.5,

                },
                768:{
                    items:1.8,

                },
                1200:{
                    items:2.5,

                    loop:false,

                }
            }

        });




            $("a").tooltip();



        $(".date").on("click" , function(e){

            if($(this).hasClass('open')){
                $(this).find('.date-appo').animate({
                    height:'35px',

                });


                $(this).removeClass('open');
            }else{
                $(this).find('.date-appo').animate({
                    height:'60px',

                });

                $(this).addClass('open');
            }
        });



        $(document).on("click", function (event) {
            var clickover = $(event.target);
            var _opened = $("header .navbar-collapse").hasClass("show");
            if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                $(".navbar-toggler").click();
            }
        });




        $(window).scroll(function () {

            $('.block').each(function() {
                if ($(window).scrollTop() > $(this).offset().top ){
                    var blockID =$(this).attr('id');
                    $(' header nav .lm a').removeClass('active');

                    $('header nav .lm li a[data-scroll = "' + blockID +  '"]').addClass('active');

                }
            });


            var scrollToTop = $('.scroll-to-top');
            if ($(window).scrollTop() >= 1000) {
                if (scrollToTop.is(':hidden')) {
                    scrollToTop.fadeIn(400);
                }}  else{

                scrollToTop.fadeOut(400);
            }

        });

        $('.scroll-to-top').click(function (e) {
            e.preventDefault();
            $('html ,body').animate({
                scrollTop:0
            },1000);


        });
    });




    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";


        }

        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;


        elmnt.style.animationDuration = "3s";


    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();





    var x = 0;

    $(".video-play-link").click(function () {
        $(".vidFootX").get(0).play();
    })

    $("span.pause").click(function () {
        $(this).hide();
        $("span.play").show();
        $(".vidFootX").get(0).play();
    })

    $("span.play").click(function () {
        $(this).hide();
        $("span.pause").show();
        $(".vidFootX").get(0).pause();


        $(".date-appo").click(function(){
            $("date-appo-1").toggle();
        });
    })



    function openPopup(popup){
        var target = '.inner-popup.'+popup;
        $('.inner-popup').hide();
        $(target).show();
        console.log(target);
    }




    $('textarea').keyup(function() {

        var characterCount = $(this).val().length,
            current = $('#current'),
            maximum = $('#maximum'),
            theCount = $('#the-count');

        current.text(characterCount);


        /*This isn't entirely necessary, just playin around*/
        if (characterCount < 70) {
            current.css('color', '#666');
        }
        if (characterCount > 70 && characterCount < 90) {
            current.css('color', '#6d5555');
        }
        if (characterCount > 90 && characterCount < 100) {
            current.css('color', '#793535');
        }
        if (characterCount > 100 && characterCount < 120) {
            current.css('color', '#841c1c');
        }
        if (characterCount > 120 && characterCount < 139) {
            current.css('color', '#8f0001');
        }

        if (characterCount >= 140) {
            maximum.css('color', '#8f0001');
            current.css('color', '#8f0001');
            theCount.css('font-weight','bold');
        } else {
            maximum.css('color','#666');
            theCount.css('font-weight','normal');
        }


    });



    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        // $("a").tooltip();
    })


    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("actives");
            current[0].className = current[0].className.replace(" actives", "");
            this.className += " actives";
        });
    }




</script>
