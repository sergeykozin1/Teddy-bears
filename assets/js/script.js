var present = true;
  $(document).ready(function($) {
    
    function hrefTube(){
      elm = document.getElementsByClassName('ytbtn');

      for (var i = elm.length - 1; i >= 0; i--) {
        changehref(elm[i])
      };

      function changehref(e){
      if (typeof e != 'undefined' && e != null && e.getAttribute('href') > '') {
        var id = (e.getAttribute('href').match( /watch\?v\=([a-zA-Z0-9_-]{5,11})/ ) || [])[1];
        e.setAttribute('href', '#' + id);
      }
    }
  }


  function startTube(e){
    if(e == null) return false;
    var id = e.getAttribute('href').substring(1);
    yt = $('.popupTube');
    yt.html('<iframe width="860" height="415" src="http://www.youtube.com/embed/' + 
      id + '?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
    yt.css('display', 'block');
  }

  function hideTube(){
    $('.popupTube').css('display','none');
    $('.popupTube').html('');
  }


  pop = document.getElementById('popup');
  if (pop != null)
      document.getElementById('popup').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
    document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}

    $('.ytbtn').on('click', function(){startTube(this)});
    $('.youtube').on('click', function(){startTube(this)});
    $('.popupTube').on('click', function(){hideTube()});

    hrefTube();
  });

  function popup(nm, e) {
      popupElm = document.getElementById("popup-bg");
      if (nm == -1) {
          popupElm.classList.remove('visible');
          document.querySelector('body').style.overflow = 'auto';
      } else {
          elm = popupElm.getElementsByClassName('popup');
          if (typeof nm != 'undefined')
              for (var i = elm.length - 1; i >= 0; i--) {
                  if (elm[i].id == "popup" + nm) {
                      elm[i].classList.add('visible');
                      popupElm.classList.add('visible');


                  if (typeof nm != 'undefined' && typeof e != 'undefined'){
                    bear_number = $(e).parents('.block').attr('data-number');

                    for(key in Bears){
                      var data_number  = $.trim( $(e).parents('.block').attr('data-number') );
                      if(($.trim(key) === data_number)){
                        $('#popup1 .name').text(                    Bears[key].name );
                        $('#popup1 .params .size').text(            Bears[key].size );
                        $('#popup1 .opisanie').text(                Bears[key].description );
                        $('#popup1 .params .color').text(           Bears[key].color );
                        $('#popup1 .video_rev').attr( 'href', '#' + Bears[key].video_ID );
                        $('input[name="product_name"]').val(        Bears[key].name ); 
                        $('input[name="size"]').val(                Bears[key].size ); 
                        $('input[name="color"]').val(               Bears[key].color );
                        $('input[name="price"]').val(               Bears[key].price );
                      }
                      if($('#popup1 .size').html() == '' || $('#popup1 .color').html() == '')
                        $('#popup1 .coma').hide();
                      else
                        $('#popup1 .coma').show();
                    }

                    $('#big_mishka').attr('src', 'assets/img/catalog/mishka' + bear_number + '_1.jpg');
                    $('#small1').attr('src', 'assets/img/catalog/mishka' + bear_number + '_1.jpg');
                    $('#small2').attr('src', 'assets/img/catalog/mishka' + bear_number + '_2.jpg');
                    $('#small3').attr('src', 'assets/img/catalog/mishka' + bear_number + '_3.jpg');

                    $('#small1').attr('data-zoom-image', 'assets/img/catalog/mishka' + bear_number + '_1big.jpg');
                    $('#small2').attr('data-zoom-image', 'assets/img/catalog/mishka' + bear_number + '_2big.jpg');
                    $('#small3').attr('data-zoom-image', 'assets/img/catalog/mishka' + bear_number + '_3big.jpg');
                    $('#big_mishka').attr('data-zoom-image', 'assets/img/catalog/mishka' + bear_number + '_1big.jpg');

                    /* Ф-ия зумирования картинок */
                    zoom = $('#big_mishka').attr('data-zoom-image');
                    $('body #big_mishka').data('zoom-image', zoom).elevateZoom({
                        zoomType: "lens",
                        lensFadeIn: 500,
                        lensFadeOut: 500,
                        lensSize: 500,
                        responsive: true,
                        borderColour: '#5d4037'
                    });

                  }


                      document.querySelector('body').style.overflow = 'hidden';
                  } else {
                      elm[i].classList.remove('visible');
                      document.querySelector('body').style.overflow = 'auto';
                  }
              }
          else {
              popupElm.classList.add('visible');
              document.querySelector('body').style.overflow = 'hidden';
          }
      }
  }

  $('.popup .close').on('click', function(){
    $(this).parents('.popup-bg').removeClass('visible')
    $(this).parents('.popup').removeClass('visible')
    $('body').css({ overflow: 'auto', overflowX: 'hidden'})
  })


jQuery(document).ready(function($) {

  $("input[type='tel']").mask("+7 (999) 999-99-99");

  $('.accordion .content').hide().prev().click(function(){
      $('.accordion .content').not(this).slideUp().prev('.head').removeClass('active');
      $(this).next().not(':visible').slideDown().prev('.head').addClass('active');
  })

  $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 500);
    return false;
  });

  $('.small-images img').on('click', function(e) {
    src = $(this).attr('src');
    zoom = $(this).attr('data-zoom-image');
    $(this).parents('.content').find('.big-img img').attr('src', src);
    $(this).parents('.content').find('.big-img img').attr('data-zoom-image', zoom);

    $('body #big_mishka').data('zoom-image', zoom).elevateZoom({
        zoomType: "lens",
        lensFadeIn: 500,
        lensFadeOut: 500,
        lensSize: 500,
        responsive: true,
        borderColour: '#5d4037'
    });      
           
});

  $('.catalog .desktop').find('.block .price').prepend('<i class="fa fa-tag orange"></i>');

  if(document.documentElement.clientWidth > 640){

    $('.catalog .block').find('.more').on('click', function(event) {
      popup(1, this);
    });
    $('.catalog .block').find('.product-img').on('click', function(event) {
      popup(1, this);
    });
  }

  $('.catalog .block').find('.buttons .btn').on('click', function(event) {
    popup(3, this);
  });

  $(document).mousemove(function(e) {
    if(e.pageY <= window.scrollY + 5 && present === true){
      popup(4);
      return present = false;
    }
  });

  desktop_product_card = $('.catalog .desktop .block');
  $.each(desktop_product_card, function(index, val) {
    $(this).find('.product-img img').attr('src', 'assets/img/catalog/mishka' + $(val).attr('data-number') + '_prev.jpg');
  });

  $("#spasiboAfterPresent").submit(function() {
  $.ajax({
      type: "POST",
      url: "spasiboAfterPresent.php",
      data: $(this).serialize()
  }).done(function() {
      $( "#submit" ).show();
         $('#submit .close').click(function(){
      $('#submit').css({
        display: "none"
      });
    })
  });
    return false;
  });

  $('.popup form').submit(function(){
    $(this).parents('#popup-bg').find('.popup .close').click();
  });   

  $('.slider').each(function() {
    var $this = $(this);
    var $group = $this.find('.slide_group');
    var $slides = $this.find('.slide');
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;
    
    function move(newIndex) {
      var animateLeft, slideLeft;
      
      advance();
      
      if ($group.is(':animated') || currentIndex === newIndex) {
        return;
      }
      
      bulletArray[currentIndex].removeClass('active');
      bulletArray[newIndex].addClass('active');
      
      if (newIndex > currentIndex) {
        slideLeft = '100%';
        animateLeft = '-100%';
      } else {
        slideLeft = '-100%';
        animateLeft = '100%';
      }
      
      $slides.eq(newIndex).css({
        display: 'block',
        left: slideLeft
      });
      $group.animate({
        left: animateLeft
      }, function() {
        $slides.eq(currentIndex).css({
          display: 'none'
        });
        $slides.eq(newIndex).css({
          left: 0
        });
        $group.css({
          left: 0
        });
        currentIndex = newIndex;
      });
    }
  
    function advance() {
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        if (currentIndex < ($slides.length - 1)) {
          move(currentIndex + 1);
        } else {
          move(0);
        }
      }, 4000);
    }
    
    $('.next_btn').on('click', function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    });
    
    $('.previous_btn').on('click', function() {
      if (currentIndex !== 0) {
        move(currentIndex - 1);
      } else {
        move(3);
      }
    });
    
    $.each($slides, function(index) {
      var $button = $('<a class="slide_btn">&bull;</a>');
      
      if (index === currentIndex) {
        $button.addClass('active');
      }
      $button.on('click', function() {
        move(index);
      }).appendTo('.slide_buttons');
      bulletArray.push($button);
    });
    
    advance();
  });

});


if(document.documentElement.clientWidth < 800 && document.documentElement.clientWidth > 640){
  $('.block[data-page]').hide();
  $('.block[data-page="1"]').show();

  function foundPage(e){
    $('.pagination li').attr('onclick', 'foundPage(this)');
    $('.pagination li:first').attr('onclick', 'goFirst(this)');
    $('.pagination li:last').attr('onclick', 'goLast(this)');
    $('.pagination li:first').html('<i class="fa fa-angle-double-left"></i>');
    $('.pagination li:last').html('<i class="fa fa-angle-double-right"></i>')
    page = $(e).text();
    $('.pagination li').removeClass('active');
    $('.pagination').find($(e)).addClass('active');

  var destination = $('#s03').offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
          scrollTop: destination
        }, 500);

  if($('.pagination li').hasClass('active') === false){
    var block = $(".catalog .block:visible");
    var atr = block[0].getAttribute('data-page');
    $('.pagination li:contains("3")').addClass('active')
  }
    $('.block[data-page]').hide();
    $('.block[data-page="' + page + '"]').show();
  }

  function goFirst(e){
    $('.pagination li:first').next('li').click();
  }
  function goLast(e){
    $('.pagination li:last').prev('li').click();
  }
  $(function() {
      $('.pagination').pagination({
          items: 40,
          itemsOnPage: 100,
          pages: 10
      });
    $('.pagination li:first').html('<i class="fa fa-angle-double-left"></i>');
    $('.pagination li:last').html('<i class="fa fa-angle-double-right"></i>');
    $('.pagination li').attr('onclick', 'foundPage(this)');
    $('.pagination li:first').attr('onclick', 'goFirst(this)');
    $('.pagination li:last').attr('onclick', 'goLast(this)');
    $('.pagination li').removeClass('active');
    $('.pagination li:nth-child(2)').addClass('active')

  });

}



if(document.documentElement.clientWidth < 640){
  $('body').attr('id', 'mobile');

  $( ".catalog" ).load( "mobile_catalog.php#mobile_catalog", function(){
    $(".regular").slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
  });

  /* Заполнение блоков с товаром данными из объекта */
  for(var key in Bears){
    var product = $('#s03 #mobile_catalog')
    var k = key;
    if(typeof k !== 'undefined'){
      $(product).find('.block[data-number="' + k + '"]')
        .find('.name').html( Bears[k].name)
        .end().find('.color').html( Bears[k].size + " " + Bears[k].color )
        .end().find('.price').html( Bears[k].price )
        .end().find('.opisanie').html( Bears[k].description_mobile )
        .end().find('.video_rev').attr('href', 'https://www.youtube.com/watch?v=' + Bears[k].video_ID + '');
    }
  }

  var form_template = "<form action='spasibo.php' method='post' class='mobile_form'> \
          <label for='form_tel'>Ваш номер телефона</label> \
          <input type='tel' name='tel' required='' placeholder='+7 (___) ___-__-__' id='form_tel'> \
          <input type='hidden' name='product_name'> \
          <input type='hidden' name='size'> \
          <input type='hidden' name='color'> \
          <input type='hidden' name='price'> \
          <input type='submit' value='купить мишку'> \
          <div class='btn-group tablet' data-toggle='buttons'> \
              <label class='active'>\
                  <input type='checkbox' name='agree' checked required=''> \
                  <i class='fa fa-square-o fa-2x'></i> \
                  <i class='fa fa-check-square-o fa-2x'></i> \
                  <span> Вы принимаете условия <a href='Politika_konfidentcialnosti.docx'>Пользовательского соглашения</a></span> \
              </label> \
          </div> \
      </form>";

      $('#mobile_catalog .block .buttons').append(form_template);

      mobile_form = $('#mobile_catalog .block form');

      $.each(mobile_form, function(index, el) {
        var product_name = $(el).parents('.block').find('.name').text();
        var size         = $(el).parents('.block').find('.color').text();
        var color        = $(el).parents('.block').find('.color').text();
        var price        = $(el).parents('.block').find('.price').text();

        $(el).find('input[name="product_name"]').val(product_name);
        $(el).find('input[name="size"]').val(size);
        $(el).find('input[name="color"]').val(color);
        $(el).find('input[name="price"]').val(price);
      });

    $('.block[data-page]').hide();
    $('.block[data-page="1"]').show();

    $(function() {
        $('.pagination').pagination({
            items: 40,
            itemsOnPage: 8,
            pages: 5
        });
      $('.pagination li:first').html('<i class="fa fa-angle-double-left"></i>');
      $('.pagination li:last').html('<i class="fa fa-angle-double-right"></i>');
      $('.pagination li').attr('onclick', 'foundPage(this)');
      $('.pagination li:first').attr('onclick', 'goFirst(this)');
      $('.pagination li:last').attr('onclick', 'goLast(this)');
      $('.pagination li').removeClass('active');
      $('.pagination li:nth-child(2)').addClass('active')

    });
    mob_card = $('#mobile_catalog .block');
    $.each(mob_card, function(index, val) {
      $(this).find('.img1').attr('src', 'assets/img/catalog/mishka' + $(val).attr('data-number') + '_1.jpg');
      $(this).find('.img2').attr('src', 'assets/img/catalog/mishka' + $(val).attr('data-number') + '_2.jpg');
      $(this).find('.img3').attr('src', 'assets/img/catalog/mishka' + $(val).attr('data-number') + '_3.jpg');
    });
        function hrefTube(){
      elm = document.getElementsByClassName('ytbtn');

      for (var i = elm.length - 1; i >= 0; i--) {
        changehref(elm[i])
      };

      function changehref(e){
      if (typeof e != 'undefined' && e != null && e.getAttribute('href') > '') {
        var id = (e.getAttribute('href').match( /watch\?v\=([a-zA-Z0-9_-]{5,11})/ ) || [])[1];
        e.setAttribute('href', '#' + id);
      }
    }
  }


  function startTube(e){
    if(e == null) return false;
    var id = e.getAttribute('href').substring(1);
    yt = $('.popupTube');
    yt.html('<iframe width="860" height="415" src="http://www.youtube.com/embed/' + 
      id + '?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
    yt.css('display', 'block');
  }

  function hideTube(){
    $('.popupTube').css('display','none');
    $('.popupTube').html('');
  }


  pop = document.getElementById('popup');
  if (pop != null)
      document.getElementById('popup').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}
    document.getElementById('popup-bg').onclick = function(e) {if (e.target != this) { return true; } popup(-1);}

    $('.ytbtn').on('click', function(){startTube(this)});
    $('.youtube').on('click', function(){startTube(this)});
    $('.popupTube').on('click', function(){hideTube()});

    hrefTube();

    $("input[type='tel']").mask("+7 (999) 999-99-99");

     
  });

  function foundPage(e){
    $('.pagination li').attr('onclick', 'foundPage(this)');
    $('.pagination li:first').attr('onclick', 'goFirst(this)');
    $('.pagination li:last').attr('onclick', 'goLast(this)');
    $('.pagination li:first').html('<i class="fa fa-angle-double-left"></i>');
    $('.pagination li:last').html('<i class="fa fa-angle-double-right"></i>')
    page = $(e).text();
    $('.pagination li').removeClass('active');
    $('.pagination').find($(e)).addClass('active');

    var destination = $('#s03').offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
          scrollTop: destination
        }, 500);

    if($('.pagination li').hasClass('active') === false){
      var block = $(".catalog .block:visible");
      var atr = block[0].getAttribute('data-page');
      $('.pagination li:contains("3")').addClass('active')
    }
      $('.block[data-page]').hide();
      $('.block[data-page="' + page + '"]').show();
      setTimeout(function(){$('.slick-next').click()},0)
  }

  function goFirst(e){
    $('.pagination li:first').next('li').click();
    $('.slick-next').click()
  }
  function goLast(e){
    $('.pagination li:last').prev('li').click();
    $('.slick-next').click()
  }
    
}

