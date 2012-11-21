	function letras(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || (charCode == 241) || (charCode == 209) || (charCode == 225) || 
	   (charCode == 233) || (charCode == 237) || (charCode == 243) || (charCode == 250) || (charCode == 32) || (charCode == 46)){
		  return true;
       }
       return false;
     }
	 
	  function numeros(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if ((charCode >= 48 && charCode <= 57)){
		  return true;
       }
       return false;
     }