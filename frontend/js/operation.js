$(document).ready(()=>{

   const ab = $("[rel='val']").on("click",()=>{
       $("[rel='val']").value;
   });
 
  const a = document.getElementById("valo").value;
   
console.log(a);  

$.ajax({
    type: "get",
    url: "./../../backend/php/oders.php",
    dataType: "text",
    success: (data) =>{

     const obj=JSON.parse(data);
    

  
     obj.map(item=>{
         let img=item.path;
         let name=item.s_name;
         let details=item.description;
         let amount =item.price;
         
console.table(amount);
   var calc=document.getElementById("valo").value;
         

   
         return(
             
             
             $("[rel='container']").append(
                 `
                 <table id="cart" class="table table-hover table-condensed">
            <thead class="table-success">
                <tr>
                    <th style="width:50%"></th>
                    <th style="width:10%"></th>
                    <th style="width:8%"></th>
                    <th style="width:22%" class="text-center"></th>
                    <th style="width:10%" class="text-center"></th>
                </tr>
            </thead>
                 
                 <tbody>
                   
                
                 <tr>
                      <td data-th="Product" class="product">
                          <div class="row">
                              <div class="col-sm-2 hidden-xs"><img src="`+img+`" alt="..." width="70" height="70"
                                      class="img-responsive" /></div>
                              <div class="col-sm-10">
                                  <h4 class="nomargin">`+ name+`</h4>
                                  <p>`+details+`</p>
                              </div>
                          </div>
                      </td>
                      <td data-th="Price">`+amount+`</td>
                      <td data-th="Quantity">
                          <input type="number" class="form-control text-center" name="quantity" value="" min="1" id="valos" rel="valo">
                      </td>
                      <td data-th="Subtotal" class="text-center">`+ amount * calc+`</td>
                      <td data-th="remove" class="text-center"><button type="button" class="remove-item" rel="remove-item">X</button></td>
  
                  </tr>
                  
                  
              </tbody>
              
            </table>
              
              `
                
                 ));

             });


             
    
 }
   
});






});