let lumut = document.querySelector('.lumut');
let pte = document.querySelector('.pte');
let spe = document.querySelector('.spe');
   
   $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
      });

    $('.lumut').click(function(){
      $('nav ul .lumut-tampil').toggleClass("show");
      $('nav ul .satu').toggleClass("rotate");

      $('nav ul .pte-tampil').removeClass("show").hide(100);
      $('nav ul .spe-tampil').removeClass("show").hide(100);
      lumut.style.background="#389761";
      pte.style.background="#389761";
      spe.style.background="#389761";
    });
    $('.pte').click(function(){
      $('nav ul .pte-tampil').toggleClass("show");
      $('nav ul .dua').toggleClass("rotate");

      $('nav ul .lumut-tampil').removeClass("show").hide(100);
      $('nav ul .spe-tampil').removeClass("show").hide(100);
      
      pte.style.background="#389761";
      lumut.style.background="#389761";
      spe.style.background="#389761";
    });
    $('.spe').click(function(){
      $('nav ul .spe-tampil').toggleClass("show");
      $('nav ul .tiga').toggleClass("rotate");

      $('nav ul .pte-tampil').removeClass("show").hide(100);
      $('nav ul .lumut-tampil').removeClass("show").hide(100);

      spe.style.background="#389761";

      pte.style.background="#389761";
      lumut.style.background="#389761";
    });
    $('nav ul li').click(function(){
      $(this).addClass("beranda").siblings().removeClass("beranda");
      
    });