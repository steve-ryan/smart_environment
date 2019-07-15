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
        $("[rel='exotic']").load("./../../backend/php/exotic_client.php")

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
});



