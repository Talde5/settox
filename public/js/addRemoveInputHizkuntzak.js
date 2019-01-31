$(document).ready(function(){

    var counter = 2;
		
    $("#addButton1").click(function () {
				
	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}   
		
	var newTextBoxHizkuntza = $(document.createElement('div'))
	     .attr("id", 'TextBoxHizkuntza' + counter);
                
	newTextBoxHizkuntza.after().html('<br/><input name="hizkuntza'+ counter +'" type="text" class="form-control" id="hizkuntza'+ counter +'"><br/>'
		+'<br/><input name="maila'+ counter +'" type="text"  class="form-control" id="maila'+ counter +'"><br/>');
	
            
	newTextBoxHizkuntza.appendTo("#TextBoxesGroup2");

				
	counter++;
     });

     $("#removeButton1").click(function () {
	if(counter==2){
          
          return false;
       }   
        
	counter--;
			
        $("#TextBoxHizkuntza" + counter).remove();
			
     });
  });
