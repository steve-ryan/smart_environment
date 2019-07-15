$(document).ready(()=>{

    $(".log").remove();
    $("[rel='login_user']").on("click",()=>{
       // alert("logging");

    $("[rel='register']").remove();
    $("[rel='login']").remove();

   
   $("h2").append(".log");
});

   //$("[rel='log']").append(`<button rel='btn-log' class='btn-log'>log out</button>`);

   $("[rel='btn-log']").on("click",()=>{
      //$(".log").remove();
      alert("being called");
   // $("[rel='log']").remove();
    //$("[rel='root']").load("./../../backend/php/main.php");
   
   })


  


})