
/* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });


/* 2. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };


/* 3. MainSlider-1 */
    // h1-hero-active
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
      BasicSlider.slick({
        autoplay: false,
        autoplaySpeed: 4000,
        dots: false,
        fade: true,
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev"><img src="img/hero_thumb/arrow-left.png" alt=""><img class="secondary-img" src="img/hero_thumb/left-white.png" alt=""></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="img/hero_thumb/arrow-right.png" alt=""><img class="secondary-img" src="img/hero_thumb/right-white.png" alt=""></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false
            }
          }
        ]
      });

      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();

/* 4. Testimonial Active*/
  var testimonial = $('.h1-testimonial-active');
    if(testimonial.length){
    testimonial.slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay:false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrow:false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false,
            }
          }
        ]
      });
    }


/* 5. Gallery Active */
    var client_list = $('.gallery-active');
    if(client_list.length){
      client_list.owlCarousel({
        slidesToShow: 3,
        slidesToScroll: 1,
        loop: true,
        autoplay:true,
        speed: 3000,
        smartSpeed:2000,
        nav: false,
        dots: false,
        margin: 0,

        autoplayHoverPause: true,
        responsive : {
          0 : {
            nav: false,
            items: 2,
          },
          768 : {
            nav: false,
            items: 3,
          }
        }
      });
    }


/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7.  Custom Sticky Menu  */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 245) {
        $(".header-sticky").removeClass("sticky-bar");
      } else {
        $(".header-sticky").addClass("sticky-bar");
      }
    });

    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 245) {
          $(".header-sticky").removeClass("sticky");
      } else {
          $(".header-sticky").addClass("sticky");
      }
    });



/* 8. sildeBar scroll */
    $.scrollUp({
      scrollName: 'scrollUp', // Element ID
      topDistance: '300', // Distance from top before showing element (px)
      topSpeed: 300, // Speed back to top (ms)
      animation: 'fade', // Fade, slide, none
      animationInSpeed: 200, // Animation in speed (ms)
      animationOutSpeed: 200, // Animation out speed (ms)
      scrollText: '<i class="ti-arrow-up"></i>', // Text for element
      activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });


/* 9. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });


/* 10. WOW active */
    new WOW().init();



/* 13. counterUp*/
  $('.counter').counterUp({
    delay: 10,
    time: 3000
  });



// 11. ---- Mailchimp js --------//
    function mailChimp() {
      $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();



// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }


      function showAlert(mensagem, targetElementId, timeout = 2000) {
        // Encontra o lugar onde queremos mostrar a mensagem.
        var messageDiv = document.getElementById(targetElementId);

        // Coloca a mensagem nesse lugar.
        messageDiv.innerHTML = mensagem;

        // Remove uma coisa chamada 'msgContato' do lugar (isso pode esconder ou decorar a mensagem).
        messageDiv.classList.remove('msgContato');

        // Espera por um tempo e depois faz algo.
        setTimeout(function () {
            // Adiciona de volta a 'msgContato' no lugar, possivelmente desfazendo mudanças feitas antes.
            messageDiv.classList.add('msgContato');
        }, timeout);
    }

    function displayError(erros) {

        let todosOsErros ="";

        for (const [key, value] of Object.entries(erros)) {
            todosOsErros +=`<div class="alert alert-danger">${value.join(", ")}</div>`;
        }

        if (todosOsErros) {
            showAlert(todosOsErros, "contatoMensagem");
        }

    }


      function formContato(e) {
        // Não queremos que o formulário faça o que normalmente faria ao ser enviado, para evitar confusão.
       e.preventDefault();

        // Vamos pegar tudo o que alguém digitou no formulário - coisas como nome, e-mail, telefone, etc.
        var data = {
            nomeContato: document.getElementById("nomeContato").value,
            emailContato: document.getElementById("emailContato").value,
            enderecoContato: document.getElementById("enderecoContato").value,
            assuntoContato: document.getElementById("assuntoContato").value,
            mensContato: document.getElementById("mensContato").value
        };

        // Agora, vamos enviar essas informações para um lugar especial no computador que cuida dos e-mails.
        fetch('/contato/enviar', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                // Aqui, estamos verificando se o envio do e-mail foi bem-sucedido. Se não foi, dizemos que algo deu errado.
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw errorData;
                    })
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Se tudo correu bem, mostramos uma mensagem de sucesso por um tempo curto.
                    showAlert(`<br> <div class="alert alert-success">${data.success}</div>`, "contatoMensagem");

                    // Também apagamos as informações do formulário para que alguém possa escrever algo novo.
                    document.getElementById("formContato").reset();
                } else {
                    showAlert(`<br> <div class="alert alert-danger">Erro ao enviar o email!</div>`, "contatoMensagem");
                }
            })
            .catch(error => {
                if(error.errors){
                    displayError(error.errors);
                } else {
                    console.log("Erro Desconhecido", error);
                }

            });

    }
