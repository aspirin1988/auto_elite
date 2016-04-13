(function() {
	var showContent = function(event) {
	  document.getElementById('all-content').classList.remove('hidden');

	  new WOW().init();
	};

	if(window.attachEvent) {
	    window.attachEvent('onload', showContent);
	} else {
	    if(window.onload) {
	        var curronload = window.onload;
	        var newonload = function(evt) {
	            curronload(evt);
	            showContent(evt);
	        };
	        window.onload = newonload;
	    } else {
	        window.onload = showContent;
	    }
	}
})();