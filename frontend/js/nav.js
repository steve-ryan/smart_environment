$(document).ready(()=>{

    $("[rel='register']").on("click",()=>{
        $("[rel='root']").load("./../html/register.html");
    })
    $("[rel='login']").on("click",()=>{
        $("[rel='root']").load("./../html/login.html");
    })

    $("[rel='backreg']").on("click",(evt)=>{
        
        evt.preventDefault();
        evt.stopPropagation();
        evt.stopImmediatePropagation();
        $("[rel='desp']").load("./../html/register.html");
    });

    
});