$(document).ready(()=>{

    // $("[rel='register']").on("click",()=>{
    //     $("[rel='root']").load("./../html/register.html");
    // })
    // $("[rel='login']").on("click",()=>{
    //     $("[rel='root']").load("./../html/login.html");
    // })
    

    $("[rel='register']").on("click",()=>{
        $("[rel='root']").load("../../backend/php/register.php")
    })

    $("[rel='login']").on("click",()=>{
        $("[rel='root']").load("../../backend/php/login_client.php")
    })
});



