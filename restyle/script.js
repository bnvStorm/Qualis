
// burger menu animation
 

$('.menu').click(function () {
    $(this).toggleClass('active');
    $('.menu-mobile').toggleClass('active');
})

// drobdown menu
$('.menu-list > li').hover(function(){
    $(this).find('.level-2').slideDown('fast')
      
}, function(){
    $(this).find('.level-2').slideUp('fast', function(){
        $(this).stop(true);
    });
});
$('.level-2 > ul > li').hover(function(){
    $(this).find('.level-3').slideDown('fast')
     
}, function(){
    $(this).find('.level-3').slideUp('fast', function(){
        $(this).stop(true);
    });
});

// popup-window close button


$('.hidden__window').click(function(){
    $(this).parent().parent().addClass('d-none')
})


// drobdown mobile menu
$('.menu-mobile__list > .menu-mobile__item > .menu-mobile__link').click(function(){
    $(this).parent().find('.mob-level-2').addClass('active');
    $(this).parent().find('.mob-level-2').find('.back__mobile__list').click(function(){
        $(this).parent().removeClass('active');
    })
    $(this).parent().find('.mob-level-2 .menu-mobile__link').click(function(){
        $(this).parent().find('.mob-level-3').addClass('active');
        $(this).parent().find('.mob-level-3').find('.back__mobile__list').click(function(){
            $(this).parent().parent().parent().parent().addClass('active');
            $(this).parent().removeClass('active');
        })
    })
})


// Homepage header slider

$('.header__slider-desc').slick({
    autoplay: true,
    autoplaySpeed: 7000,
    slidesToShow: 1
})



$('.header__slider-mobile').slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 7000,
    slidesToShow: 1
})

$('.header__slider-mobile .slick-dots li button').html('')




// animate scroll
$('.article__list .article__list__link').on('click',function(){
    let selector2 = $(this).attr('href');
    let h = $(selector2);
    $('html, body').animate({
    scrollTop: h.offset().top
    }, 400);
})




// scroll TOp show
$(".scrollTop").hide();
if ($(window).scrollTop()>=1650) $(".scrollTop").fadeIn("slow")
$(window).scroll(function(){
if ($(window).scrollTop()<=1650) $(".scrollTop").fadeOut("slow")
else $(".scrollTop").fadeIn("slow")
});

$(".scrollTop").click(function(){
$("html, body").animate({scrollTop:1100}, "slow")
})


// slick carousel

$('.slider').slick({
    prevArrow: '.left__button',
    nextArrow: '.right__button',
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    adaptiveHeight: true
  });

// validate
$.validator.setDefaults({
    highlight: function(element){
        $(element)
        .closest('.form-control, .windiow_form-control')
        .addClass('has-error');
    },
    unhighlight: function(element){
        $(element)
        .closest('.form-control, .windiow_form-control')
        .removeClass('has-error');
    }
});

$('.form__btn').click(function() {
    $(this).parent().parent('.form').validate({
        rules:{
            name:{
                minlength: 3,
                lettersonly: true
            },
            email:{
                required: true,
                email: true
            },
            textarea:{ 
                minlength: 5,
                required: true
            },
            number:{
                required: true
            }
        },
        messages: {
            email:{
                required: 'Поле "Email" обязытельно должно быть заполнено',
                email: 'Email был введен не правильно'
            },
            name:{
                minlength: 'Длина именя должна быть более 3х символов',
                required: 'Поле "Имя " обязытельно должно быть заполнено'
            },
            textarea:{
                minlength: 'Длина текста должна быть более 10ти символов',
                required: 'Поле "Текст комментария" обязытельно должно быть заполнено'
            },
            number:{
                required: 'Поле "Телефон" обязытельно должно быть заполнено'
            }
        }
    });
})