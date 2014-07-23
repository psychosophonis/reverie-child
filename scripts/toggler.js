jQuery(function() {
    // run the currently selected effect
    function runEffect() {
    	
      options = { percent: 0 };
     jQuery( "#effect" ).toggle("scale");
    };
 
    jQuery( "#button" ).click(function() {
      runEffect();
      return false;
    });
  });