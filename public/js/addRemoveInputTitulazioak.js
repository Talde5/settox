

$(document).ready(function(){

    var counter = 2;
		
    $("#addButton").click(function () {
				
	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}   
		
	var newTextBoxTitulazioa = $(document.createElement('div'))
	     .attr("id", 'TextBoxTitulazioa' + counter);
                
	newTextBoxTitulazioa.after().html('<br/><input name="titulazioa'+ counter +'" type="text"  class="form-control" id="titulazioa'+ counter +'"><br/>');
	
            
	newTextBoxTitulazioa.appendTo("#TextBoxesGroup1");

				
	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==2){
          
          return false;
       }   
        
	counter--;
			
        $("#TextBoxTitulazioa" + counter).remove();
			
     });
  });
