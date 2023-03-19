let migrasi = document.querySelector('.migrasi');
let kemagnetan = document.querySelector('.kemagnetan');
let produk = document.querySelector('.produk');
   
   $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
      });

    $('.migrasi').click(function(){
      $('nav ul .migrasi-tampil').toggleClass("show");
      $('nav ul .first').toggleClass("rotate");

      $('nav ul .kemagnetan-tampil').removeClass("show1").hide(100);
      $('nav ul .produk-tampil').removeClass("show2").hide(100);
      migrasi.style.background="#389761";
      kemagnetan.style.background="#389761";
      produk.style.background="#389761";
    });
    $('.kemagnetan').click(function(){
      $('nav ul .kemagnetan-tampil').toggleClass("show1");
      $('nav ul .second').toggleClass("rotate");

      $('nav ul .migrasi-tampil').removeClass("show").hide(100);
      $('nav ul .produk-tampil').removeClass("show2").hide(100);
      
      kemagnetan.style.background="#389761";
      migrasi.style.background="#389761";
      produk.style.background="#389761";
    });
    $('.produk').click(function(){
      $('nav ul .produk-tampil').toggleClass("show2");
      $('nav ul .tiga').toggleClass("rotate");

      $('nav ul .kemagnetan-tampil').removeClass("show1").hide(100);
      $('nav ul .migrasi-tampil').removeClass("show").hide(100);

      produk.style.background="#389761";

      kemagnetan.style.background="#389761";
      migrasi.style.background="#389761";
    });
    $('nav ul li').click(function(){
      $(this).addClass("beranda").siblings().removeClass("beranda");
      
    });