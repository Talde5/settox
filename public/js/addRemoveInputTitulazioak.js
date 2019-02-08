
//alert(($('div > a').length)+1);
//var $titu = $('.titulazioa').toArray().length;
//console.log("Hay " + $titu + " elementos");
$(document).ready(function(){

    var counter = ($('div > .titulazioa').length+1);
	
		
    $("#addButton").click(function () {
				
	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}   
		
	var newTextBoxTitulazioa = $(document.createElement('div'))
	     .attr("class", 'TextBoxTitulazioa');
                
	newTextBoxTitulazioa.after().html('<br/><input name="titulazioa[]" type="text"  class="form-control titulazioa" placeholder="Titulazioa"><br/>');
	
            
	newTextBoxTitulazioa.appendTo("#TextBoxesGroup1");

				
	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==2){
          
          return false;
       }   
        
	counter--;
			
        $(".TextBoxTitulazioa:last-child").remove();
			
     });
  });
