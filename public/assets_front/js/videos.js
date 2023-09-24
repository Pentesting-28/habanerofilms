$(document).ready(function($) {

/// HOME ////

  $(".frame-videos").on("finish", function(){
      $('.video-full').fadeOut(300);
      $('.video-full-directores').fadeOut(300);
      $('.video-full-digital').fadeOut(300);
  });

  $(".vimeo-close-1").click(function() {
        $("#video1").vimeo("unload");
        $("#video2").vimeo("unload");
        $("#video3").vimeo("unload");
        $("#video4").vimeo("unload");
        $(".video-full").fadeOut(300);
  });


  $(".boton-1").click(function() {
      $("#video1").vimeo("load");
      $("#video1").vimeo("play");
      $("#video1").css("display" , "block")
      $("#video2").vimeo("unload");
      $("#video2").css("display" , "none");
      $("#video3").vimeo("unload");
      $("#video3").css("display" , "none");
      $("#video4").vimeo("unload");
      $("#video4").css("display" , "none");
      $(".director-1").css("display" , "block");
      $(".director-2").css("display" , "none");
      $(".director-3").css("display" , "none");
      $(".director-4").css("display" , "none");
      $(".video-full").fadeIn(300);
  });

  $(".boton-2").click(function() {
      $("#video2").vimeo("load");
      $("#video2").vimeo("play");
      $("#video2").css("display" , "block")
      $("#video1").vimeo("unload");
      $("#video1").css("display" , "none");
      $("#video3").vimeo("unload");
      $("#video3").css("display" , "none");
      $("#video4").vimeo("unload");
      $("#video4").css("display" , "none");
      $(".director-2").css("display" , "block");
      $(".director-1").css("display" , "none");
      $(".director-3").css("display" , "none");
      $(".director-4").css("display" , "none");
      $(".video-full").fadeIn(300);
  });

  $(".boton-3").click(function() {
      $("#video3").vimeo("load");
      $("#video3").vimeo("play");
      $("#video3").css("display" , "block")
      $("#video1").vimeo("unload");
      $("#video1").css("display" , "none");
      $("#video2").vimeo("unload");
      $("#video2").css("display" , "none");
      $("#video4").vimeo("unload");
      $("#video4").css("display" , "none");
      $(".video-full").fadeIn(300);
      $(".director-3").css("display" , "block");
      $(".director-2").css("display" , "none");
      $(".director-1").css("display" , "none");
      $(".director-4").css("display" , "none");
  });

  $(".boton-4").click(function() {
      $("#video4").vimeo("load");
      $("#video4").vimeo("play");
      $("#video4").css("display" , "block")
      $("#video1").vimeo("unload");
      $("#video1").css("display" , "none");
      $("#video2").vimeo("unload");
      $("#video2").css("display" , "none");
      $("#video3").vimeo("unload");
      $("#video3").css("display" , "none");
      $(".director-4").css("display" , "block");
      $(".director-2").css("display" , "none");
      $(".director-3").css("display" , "none");
      $(".director-1").css("display" , "none");
      $(".video-full").fadeIn(300);
  });


// DIRECTORES // 

  $(".close-directores").click(function() {
        $("#video-directors-1").vimeo("unload");
        $("#video-directors-2").vimeo("unload");
        $("#video-directors-3").vimeo("unload");
        $(".video-full-directores").fadeOut(300);
  });


   $(".btn-directors-1").click(function() {
      $("#video-directors-1").vimeo("load");
      $("#video-directors-1").vimeo("play");
      $("#video-directors-1").css("display" , "block")
      $("#video-directors-2").vimeo("unload");
      $("#video-directors-2").css("display" , "none");
      $("#video-directors-3").vimeo("unload");
      $("#video-directors-3").css("display" , "none");
      $(".titulo-full-1").css("display" , "block");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".video-full-directores").fadeIn(300);
  });

   $(".btn-directors-2").click(function() {
      $("#video-directors-2").vimeo("load");
      $("#video-directors-2").vimeo("play");
      $("#video-directors-2").css("display" , "block")
      $("#video-directors-1").vimeo("unload");
      $("#video-directors-1").css("display" , "none");
      $("#video-directors-3").vimeo("unload");
      $("#video-directors-3").css("display" , "none");
      $(".titulo-full-2").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".video-full-directores").fadeIn(300);
  });

   $(".btn-directors-3").click(function() {
      $("#video-directors-3").vimeo("load");
      $("#video-directors-3").vimeo("play");
      $("#video-directors-3").css("display" , "block")
      $("#video-directors-2").vimeo("unload");
      $("#video-directors-2").css("display" , "none");
      $("#video-directors-1").vimeo("unload");
      $("#video-directors-1").css("display" , "none");
      $(".titulo-full-3").css("display" , "block");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-1").css("display" , "none");
      $(".video-full-directores").fadeIn(300);
  });

  
// DIGITAL // 

  $(".close-digital").click(function() {
        $("#video-digital-1").vimeo("unload");
        $("#video-digital-2").vimeo("unload");
        $("#video-digital-3").vimeo("unload");
        $("#video-digital-4").vimeo("unload");
        $("#video-digital-5").vimeo("unload");
        $("#video-digital-6").vimeo("unload");
        $("#video-digital-7").vimeo("unload");
        $("#video-digital-8").vimeo("unload");
        $("#video-digital-9").vimeo("unload");
        $(".video-full-digital").fadeOut(300);
  });

  $(".btn-digital-1").click(function() {
      $("#video-digital-1").vimeo("load");
      $("#video-digital-1").vimeo("play");
      $("#video-digital-1").css("display" , "block")
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-1").css("display" , "block");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-2").click(function() {
      $("#video-digital-2").vimeo("load");
      $("#video-digital-2").vimeo("play");
      $("#video-digital-2").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-2").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-3").click(function() {
      $("#video-digital-3").vimeo("load");
      $("#video-digital-3").vimeo("play");
      $("#video-digital-3").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-3").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-4").click(function() {
      $("#video-digital-4").vimeo("load");
      $("#video-digital-4").vimeo("play");
      $("#video-digital-4").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-4").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-5").click(function() {
      $("#video-digital-5").vimeo("load");
      $("#video-digital-5").vimeo("play");
      $("#video-digital-5").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-5").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-6").click(function() {
      $("#video-digital-6").vimeo("load");
      $("#video-digital-6").vimeo("play");
      $("#video-digital-6").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-6").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-7").click(function() {
      $("#video-digital-7").vimeo("load");
      $("#video-digital-7").vimeo("play");
      $("#video-digital-7").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-7").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-8").click(function() {
      $("#video-digital-8").vimeo("load");
      $("#video-digital-8").vimeo("play");
      $("#video-digital-8").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-9").vimeo("unload");
      $("#video-digital-9").css("display" , "none");
      $(".titulo-full-8").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-9").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

  $(".btn-digital-9").click(function() {
      $("#video-digital-9").vimeo("load");
      $("#video-digital-9").vimeo("play");
      $("#video-digital-9").css("display" , "block")
      $("#video-digital-1").vimeo("unload");
      $("#video-digital-1").css("display" , "none");
      $("#video-digital-2").vimeo("unload");
      $("#video-digital-2").css("display" , "none");
      $("#video-digital-3").vimeo("unload");
      $("#video-digital-3").css("display" , "none");
      $("#video-digital-4").vimeo("unload");
      $("#video-digital-4").css("display" , "none");
      $("#video-digital-5").vimeo("unload");
      $("#video-digital-5").css("display" , "none");
      $("#video-digital-6").vimeo("unload");
      $("#video-digital-6").css("display" , "none");
      $("#video-digital-7").vimeo("unload");
      $("#video-digital-7").css("display" , "none");
      $("#video-digital-8").vimeo("unload");
      $("#video-digital-8").css("display" , "none");
      $(".titulo-full-9").css("display" , "block");
      $(".titulo-full-1").css("display" , "none");
      $(".titulo-full-2").css("display" , "none");
      $(".titulo-full-3").css("display" , "none");
      $(".titulo-full-4").css("display" , "none");
      $(".titulo-full-5").css("display" , "none");
      $(".titulo-full-6").css("display" , "none");
      $(".titulo-full-7").css("display" , "none");
      $(".titulo-full-8").css("display" , "none");
      $(".video-full-digital").fadeIn(300);
  });

});