$(document).ready(()=>{

    // $("[rel='register']").on("click",()=>{
    //     $("[rel='root']").load("./../html/register.html");
    // })
    // $("[rel='login']").on("click",()=>{
    //     $("[rel='root']").load("./../html/login.html");
    // })
    

    $("[rel='register']").on("click",(evt)=>{
        evt.preventDefault();
        evt.stopPropagation();
        evt.stopImmediatePropagation();
        $("[rel='root']").load("./../../backend/php/register_clients.php");
       $("[rel='reg_user']").on("click",(evt)=>{
           evt.preventDefault();
           evt.stopPropagation();
           evt.stopImmediatePropagation();
        $("[rel='root']").load("./backend/php/login_client.php")
    })
    })

    $("[rel='login']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/login_client.php");
      
    })

    $("[rel='home']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/fruit_client.php")
    })
    $("[rel='medicinal']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/medicinal_client.php")
    })
    $("[rel='exotic']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/exotic_client.php")

    })

    $("[rel='fruits']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/fruit_client.php")
    })
    $("[rel='indiginious']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/indiginous_client.php")
    })
    $("[rel='tree-ben']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/fruit_client.php")
    })




    $("[rel='btn-log']").on("click",()=>{
        $(".log").remove();
        alert("being called");
     $("[rel='log']").remove();
     $("[rel='root']").remove();
      window.location.assign("./../../backend/php/index.php");
     
     })

    //  $("[rel='backreg']").on("click",(evt)=>{
    //      evt.preventDefault();
    //      alert("backtrack")
    //      $("[rel='root']").load("./../../backend/php/register_clients.php");
    //  })

    //  $("[rel='regfro']").on("click",(evt)=>{
    //      evt.preventDefault();
    //     $("[rel='root']").load("./../../backend/php/login_client.php");
    // })
});



