$(document).ready(()=>{

    $("[rel='home']").on("click",()=>{
        $("[rel='root']").load("./../html/client.html");
    })
});

$(document).ready(()=>{
    $("[rel='register']").on("click",()=>{
        $("[rel='root']").load("../../backend/php/register.php")
    })
});

$(document).ready(()=>{
    $("[rel='login']").on("click",()=>{
        $("[rel='root']").load("../../backend/php/login.php")
    })
});

