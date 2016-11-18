'use strict';

(function() {

document.getElementById("image-input").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);

    $('#delete').click(function(){
    	if(confirm("Are you sure you ant to delete this?")) {
	    	$("#delete").attr("href", "/account");
    	}
    });
};

})();