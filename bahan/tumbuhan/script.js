//mengarahkan menit tertentu dengan button
//mengarahkan menit tertentu dengan button
// function burung() { 
//     vid.currentTime=0;
//     vid.play();
//   } 
//   function salmon() { 
//     vid.currentTime=97;
//     vid.play();
//   } 
//   function penyu() { 
//     vid.currentTime=152;
//     vid.play();
//   } 
//   function lobster() { 
//     vid.currentTime=217.5;
//     vid.play();
//   } 
//   function bakteri() { 
//     vid.currentTime=270;
//     vid.play();
//   } 

var video= document.getElementById("vidio");
console.log(video.ariaCurrent);
//memunculkan class setelah vidio selesai
//memunculkan class setelah vidio selesai
  $(document).ready(function(){ 
    $('.kesimpulan').hide();
    
    var video = document.getElementById("vidio");

    video.addEventListener('ended',myHandler,false);

    function myHandler(e) {
      $('.kesimpulan').show(100);
      $('.sebelum').hide(100);
    }

    // if (vid.currenTime<55) {
    //   $('.kesimpulan').hide();
    //   $('.sebelum').show();
    // } 

    // console.log(vid.currentTime);
  
});
