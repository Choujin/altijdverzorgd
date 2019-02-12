$(window).ready(function() {
  $('.navbar-nav>li>a, body, .btt, .tohow, .navbar-brand').on('click', function() {
    $('.navbar-collapse').collapse('hide');
  });
  $('.navbar-toggler').on('click', function() {
    $('header').addClass('bg-green');
  });

  /*TOOLTIP*/
  $('[data-toggle="tooltip"]').tooltip({});
  $('[data-toggle="tooltip"]').on('shown.bs.tooltip', function() {
    setTimeout(function() {
      $('[data-toggle="tooltip"]').tooltip('hide');
    }, 2000);
  });
  /*END TOOLTIP*/
  /*SCROLL*/
  if ($('.btt').length) {
    var scrollTrigger = 10, // px
      backToTop = function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $('.btt').fadeIn();
          $('.tohow').fadeOut();
          $('.hpheader').addClass('bg-green');
        } else {
          $('.btt').fadeOut();
          $('.tohow').fadeIn();
          $('.hpheader').removeClass('bg-green');
        }
      };
    backToTop();
    $(window).on('scroll', function() {
      backToTop();
    });
  }
  /*SCROLLSPY*/
  // $('body').scrollspy({
  //   target: '#navbar-example',
  //   offset: 57
  // })
  /*END SCROLLSPY*/

  /*SMOOTHSCROLL*/
  $(function() {
    $('a[href^="#"]:not([data-toggle="tab"]').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        /* target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); */
        if (target.length) {
          $('html,body').delay(0).animate({
            scrollTop: target.offset().top - 56
          }, 500);
          return false;
        }
      }
    });
  });
  /*END SMOOTHSCROLL*/
  /*END SCROLL*/

  /*MODALS*/
  $(".launchExtra, .launchExtra2").click(function() {
    $(".nav-tabs .active, .tab-content .active").removeClass("active");
  });
  $(".launchExtra2").click(function() {
    $("#login-tab").tab('show');
  });
  $(".showpas").on('click', function(event) {
    event.preventDefault();
    if ($(this).parent().parent().find('input').attr("type") == "text") {
      $(this).parent().parent().find('input').attr('type', 'password');
      $(this).children().addClass('fas fa-eye');
      $(this).children().removeClass('fas fa-eye-slash');
    } else if ($(this).parent().parent().find('input').attr("type") == "password") {
      $(this).parent().parent().find('input').attr('type', 'text');
      $(this).children().removeClass('fas fa-eye');
      $(this).children().addClass('fas fa-eye-slash');
    }
  });
  $(function() {
    var browser = "Unknown OS";
    if (navigator.appVersion.indexOf("Windows Phone") != -1) {
      browser = "btn-windows";
    } else if (navigator.userAgent.indexOf("Android") != -1) {
      browser = "btn-android";
    } else if (navigator.userAgent.indexOf("like Mac") != -1) {
      browser = "btn-apple";
    } else {
      browser = "btn-alles";
    }
    $('.d-btn.' + browser).addClass("active");
    $('.d-btn').hide();
    $('.active' + $(this).val()).show();
  });
  /* $('#mijn-av-login').modal('show'); */
  /*MODALS END*/

  /*DTPICKER*/
  $(function() {
    $('#picktime').datetimepicker({
        format: 'LT',
        defaultDate: 'moment',
        locale: 'nl',
        ignoreReadonly: true,
        stepping: 10
      }),
      $('#pickdays').datetimepicker({
        format: 'ddd D MMM',
        locale: 'nl',
        minDate: 'moment',
        defaultDate: 'moment',
        ignoreReadonly: true
      });
    /* 	 $('#pickdays').datetimepicker(function(){
    		var greeting;
    		var date = $('#pickdays').datetimepicker('viewDate');
    		var today = new Date().getDate();
    		if (date = today) {
    			greeting = "Vandaag";
    		} else if (date > today) {
    			greeting = "Morgen";
    		}
    		$('#pickdays').data('datetimepicker').attr('value', greeting);
         }); */
    $('.btn-reset').click(function() {
      $('#pickdays').data('datetimepicker').date(moment());
      $('#picktime').data('datetimepicker').date(moment());
    });
    $('.btn-next-day').click(function() {
      var date = $('#pickdays').datetimepicker('viewDate');
      var newdate = date.add(1, 'day');
      $('#pickdays').data('datetimepicker').date(newdate);
    });
    $('.btn-prev-day').click(function() {
      var date = $('#pickdays').datetimepicker('viewDate');
      var newdate = date.subtract(1, 'day');
      $('#pickdays').data('datetimepicker').date(newdate);
    });
    $('.btn-next-min').click(function() {
      var date = $('#picktime').datetimepicker('viewDate');
      var newdate = date.add(10, 'minute');
      $('#picktime').data('datetimepicker').date(newdate);
    });
    $('.btn-prev-min').click(function() {
      var date = $('#picktime').datetimepicker('viewDate');
      var newdate = date.subtract(10, 'minute');
      $('#picktime').data('datetimepicker').date(newdate);
    });
    /* $('#pickdays').val('Vandaag'); */
    /* 	    var greeting;
    		var date = $('#pickdays').datetimepicker('viewDate');
    		var today = new Date();
    		if (date = today) {
    			greeting = "Vandaag";
    		} else if (date > today) {
    			greeting = "Morgen";
    		}
    		document.getElementById("demo").innerHTML = greeting; */
  });
  /*END DTPICKER*/

  /*STEPS*/
  var s = 0;
  $(document).on("click", ".steps-btn-backward", function() {
      var e = $(this).parent(),
        r = $(e).find(".steps-wrapper"),
        n = r.attr("data-steps");
      return s = a(e) - 1, 0 > s && (s = n - 1), t(e, s, r), !1
    }),
    $(document).on("click", ".steps-btn-forward", function() {
      var e = $(this).parent(),
        r = $(e).find(".steps-wrapper"),
        n = r.attr("data-steps");
      return s = a(e) + 1, s > n - 1 && (s = 0), t(e, s, r), !1
    })
  /* , $(".steps-slider-dots-wrap span").bind("click", function(s) {
          var a = $(".steps-slider-dots-wrap span").index(this);
          a > 2 && (a -= 3);
          var e = $(this).parent().parent(),
              r = $(e).find(".steps-wrapper"),
              n = r.attr("data-steps");
          return a > n - 1 && (a = 0), t(e, a, r), !1
      }) */
  ;
  var t = function(s, t, a) {
      a.attr("class", "listbox-boxes steps-wrapper").addClass("align-step" + t), e(s, t)
    },
    a = function(s) {
      var t = $(".steps-slider-dots-wrap", s),
        a = 0,
        e = !1;
      return $("span", t).each(function() {
        $(this).hasClass("steps-slider-dot-active") === !0 && (e = a), a++
      }), e
    },
    e = function(s, t) {
      var a = $(".steps-slider-dots-wrap", s),
        e = 0;
      $("span", a).each(function() {
        var s = $(this);
        $(s).removeClass().addClass("steps-slider-dots"), e === t && $(s).addClass("steps-slider-dot-active"), e++
      })
    }
  $(function() {
    //Enable swiping...
    $(".steps-inner").swipe({
      //Generic swipe handler for all directions
      swipeLeft: function(event, direction, distance, duration, fingerCount, fingerData) {
        var e = $(this).parent(),
          r = $(e).find(".steps-wrapper"),
          n = r.attr("data-steps");
        return s = a(e) + 1, s > n - 1 && (s = 0), t(e, s, r), !1
      },
      swipeRight: function(event, direction, distance, duration, fingerCount, fingerData) {
        var e = $(this).parent(),
          r = $(e).find(".steps-wrapper"),
          n = r.attr("data-steps");
        return s = a(e) - 1, 0 > s && (s = n - 1), t(e, s, r), !1
      },
      //Default is 75px, set to 0 for demo so any distance triggers swipe
      threshold: 50
    });
  });
  /*END STEPS*/

  /* RANDOM BG */
  /*  var images = ['bg.jpg', '2.jpg', '3.jpg'];
   $('.page1-1').css({'background-image': 'url(assets/img/bg/' + images[Math.floor(Math.random() * images.length)] + ')'}); */
  /* RANDOM BG END*/

  /* image load on screen view */
  lozad('img', {
    load: function(el) {
      el.src = el.dataset.src;
      el.onload = function() {
        el.classList.add('fade-in')
      }
    }
  }).observe()
  /* image load on screen view END*/
});

$('.btn-zaak').click(function() {
  $('.zoekhome').hide();
  $('.zoekshop').show();
});

$('.btn-home').click(function() {
  $('.zoekhome').show();
  $('.zoekshop').hide();
});
