$(document).ready(()=>{
       
    

    // $.get("http://localhost/smart/backend/php/home.php")
    // .then((data)=>{

    //     const obj=JSON.parse(data);
    //     //$("[rel='root']").html(data);

    //     let x=0;
    //     let y =obj.length;
         
    // console.log(obj.length)
    // $("[rel='item-head']").append(`<h1 class="category-head">FRUIT TREES</h1>`);
    //  while(x<y){
    //     let came = obj.map(item=>{
    //         let img=item.path;
    //         let name=item.s_name;
    //         let details=item.description;

    //         console.log(item);
        
    //         return(
                
    //             $("[rel='root']").append(
                    
    //                 '<img src="'+img+`" alt="image not found"></br>`+
    //                 `<p><h3>`+name+`</h3></p> </br>`+
    //                 `<input type="button" rel="more-details" value="MORE DETAILS" class="more-details"/></br></br>`+
    //                 `<input type="button" rel="buy" value="BUY" class="buy"/>\n`
    //                 ));

            
    //     });
    //     x++;
    // }
    //     //$("[rel='root']").append("Your name is"+came);

    //     // console.log(obj);
    //     // console.log(came);
    // })
    // .fail((error)=>{console.error(error)})
    // .always(()=>{console.log("done")})
    $.ajax({
       type: "get",
       url: "./../../backend/php/home.php",
       dataType: "text",
       success: (data) =>{

        const obj=JSON.parse(data);
        //$("[rel='root']").html(data);

        let x=0;
        let y =obj.length;
         
    console.log(obj.length)
    $("[rel='item-head']").append(`<h1 class="category-head">FRUIT TREES</h1>`);
     while(x<y){
        let came = obj.map(item=>{
            let img=item.path;
            let name=item.s_name;
            let details=item.description;

            console.log(item);
        
            return(
                
                $("[rel='root']").append(
                    
                    '<img src="'+img+`" alt="image not found"></br>`+
                    `<p><h3>`+name+`</h3></p> </br>`+
                    `<input type="button" rel="more-details" value="MORE DETAILS" class="more-details"/></br></br>`+
                    `<input type="button" rel="buy" value="BUY" class="buy"/>\n`
                    ));

            
        });
        x++;
    }
       }
   });


 //alert("am live")
    //console.log(me);
    

    $("[rel='buy']").on("click",()=>{
       
      
        $("[rel='root']").append("<p>kenya</p>");
    });
});