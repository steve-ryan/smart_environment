$(document).ready(()=>{

    // $("[rel='register']").on("click",()=>{
    //     $("[rel='root']").load("./../html/register.html");
    // })
    // $("[rel='login']").on("click",()=>{
    //     $("[rel='root']").load("./../html/login.html");
    // })
    

    $("[rel='register']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/register.php")
    })

    $("[rel='login']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/login_client.php")
    })

    $("[rel='home']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/home_client.php")
    })
    $("[rel='medicinal']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/home_client.php")
    })
    $("[rel='exotic']").on("click",()=>{
        $("[rel='exotic']").load("./../../backend/php/home_client.php")

    })

    $("[rel='fruits']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/home_client.php")
    })
    $("[rel='indiginious']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/home_client.php")
    })
    $("[rel='tree-ben']").on("click",()=>{
        $("[rel='root']").load("./../../backend/php/home_client.php")
    })
});



