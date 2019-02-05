$(document).ready(function(){

    var counter = ($('div > .TextBoxHizkuntza').length+1);
		
    $("#addButton1").click(function () {
				
	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}   
		
	var newTextBoxHizkuntza = $(document.createElement('div'))
	     .attr("class", 'TextBoxHizkuntza');
                
	newTextBoxHizkuntza.after().html('<br/><input name="hizkuntza[]" type="text" class="form-control hizkuntza" placeholder="Hizkuntza"><br/>'
		+'<br/><input name="maila[]" type="text"  class="form-control maila" placeholder="Maila"><br/>');
	
            
	newTextBoxHizkuntza.appendTo("#TextBoxesGroup2");

				
	counter++;
     });

     $("#removeButton1").click(function () {
	if(counter==2){
          
          return false;
       }   
        
	counter--;
			
        $(".TextBoxHizkuntza:last-child").remove();
			
     });
  });
