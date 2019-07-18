$(document).ready(()=>{

//alert("home-load");
    $.ajax({
        type: "get",
        url: "./../../backend/php/home.php",
        data: "html",
        dataType: "html",
        success: function (resp) {


           // $("[rel='smar']").on("click",()=>{

            $("h2.log").css({
                "z-index": "10px",
                " color": "red",
                "font-size": "19px",
                "margin-top": "-460px",
                "padding-left": "1220px",
                position: "relative"
              });

                $("[rel='root']").append(resp);
                
                $("[rel='med']").on("click",(evt)=>{
                    evt.preventDefault();
                    $("h2.log").css({
                        "z-index": "10px",
                        " color": "red",
                        "font-size": "19px",
                        "margin-top": "-380px",
                        "padding-left": "1220px",
                        position: "relative"
                      });

                    $("[rel='root']").load("./../../backend/php/medicinal_client.php");

                    //alert("hhhhhhhhhhhhhh");
                })

                $("[rel='ind']").on("click",(evt)=>{
                    evt.preventDefault();
                    $("h2.log").css({
                        "z-index": "10px",
                        " color": "red",
                        "font-size": "19px",
                        "margin-top": "-380px",
                        "padding-left": "1220px",
                        position: "relative"
                      });

                    $("[rel='root']").load("./../../backend/php/indiginous_client.php");
                    
                })


                $("[rel='exo']").on("click",(evt)=>{
                    evt.preventDefault();
                    $("h2.log").css({
                        "z-index": "10px",
                        " color": "red",
                        "font-size": "19px",
                        "margin-top": "-380px",
                        "padding-left": "1220px",
                        position: "relative"
                      });

                    $("[rel='root']").load("./../../backend/php/exotic_client.php");
                    
                })

                $("[rel='fru']").on("click",(evt)=>{
                    evt.preventDefault();
                    $("h2.log").css({
                        "z-index": "10px",
                        " color": "red",
                        "font-size": "19px",
                        "margin-top": "-380px",
                        "padding-left": "1220px",
                        position: "relative"
                      });

                    $("[rel='root']").load("./../../backend/php/fruit_client.php");
                    
                })

            //})
          
        }
    });





});