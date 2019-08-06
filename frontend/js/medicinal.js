$(document).ready(()=>{
    $.ajax({
       type: "get",
       url: "./../../backend/php/medicinal.php",
       dataType: "text",
       success: (data) =>{

        const obj=JSON.parse(data);
       
    $("[rel='item-head']").append(`<h1 class="category-head">MEDICINAL TREES</h1>`);
     
        obj.map(item=>{
            let img=item.path;
            let name=item.s_name;
            let details=item.description;
            
          
            
                      
        
            return(
                
                $("[rel='root-h']").append(
                    
                    '<div class="card"><div class="container-main"><img src="'+img+`" alt="image not found" class="card-img-top"  ></div></br>`+
                    `<div class="container" class="card-title"><p><h3>`+name+`</h3></p> </br><div rel="try">`+ details+`</div>`+
                    `<input type="button" rel="more-details" value="MORE DETAILS" class="more-details" /></br></br></div></div>`
                    ));

            });


            $("[rel='try']").hide();

            $("[rel='more-details']").on("click",()=>{
                $("[rel='try']").show();

                $("[rel='more-details']").on("click",()=>{
                    $("[rel='try']").hide();
                })
            })


            
                
       
    }
      
   });

});