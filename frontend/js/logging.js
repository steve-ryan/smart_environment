$(document).ready(()=>{

    $(".log").remove();
    $("[rel='login_user']").on("click",()=>{
       // alert("logging");

    $("[rel='register']").remove();
    $("[rel='login']").remove();

   
   $("h2").addClass("log");

   $("[rel='log']").append(`<button rel='btn-log' class='btn-log'>log out</button>`);

   $("[rel='btn-log']").on("click",()=>{
      // $(".log").remove();
    //$("[rel='log']").remove();
    $("[rel='root']").load("./../../backend/php/main.php");
   
   })
});

})