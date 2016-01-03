var peace = {
	dimension: 520,

	canvas: document.getElementById('myCanvas'),

	//profile: document.getElementById('profile'),
	overlay: document.getElementById('overlay'),

	/* ----------------------------------------------------
	 * Function getContext()
	 *     Get the canvas context.
	 * ---------------------------------------------------- */

	loadCanvas: function(photoUrl) {
		// Set up the canvas dimensions.
		this.canvas.width  = this.dimension;
        this.canvas.height = this.dimension;

		this.context = this.canvas.getContext('2d');

		// Set up the new (profile) image.
		var _this = this;
		var img = new Image;
		img.setAttribute('crossOrigin', 'anonymous');

		// Load image assets into the canvas once it is loaded.
		img.onload = function() {
			_this.loadImg(img);
			_this.loadImg(_this.overlay);

			_this.setupDownload();
		};

		// Set the profile image source.
		img.src = photoUrl;
	},

	/* ----------------------------------------------------
	 * Function loadImg()
	 *     Load an individual image asset.
	 * ---------------------------------------------------- */

	loadImg: function(img) {
		this.context.drawImage(img, 0, 0, img.width, img.height, 0, 0, this.dimension, this.dimension);
	},

	/* ----------------------------------------------------
	 * Function setupDownload()
	 *     Set up the click event for the download button
	 * ---------------------------------------------------- */

	setupDownload: function() {
		var _this = this;
		var btn = document.getElementById('downloadBtn');

		$.post('inc/save.php', {
			async: false, 
			data: _this.canvas.toDataURL("image/png")
		}, function (file) {
    		file = file.replace(/"/g,"");
        	btn.href = 'generated/' + file;
        });
	},

	/* ----------------------------------------------------
	 * Function go()
	 *     Run this script!
	 * ---------------------------------------------------- */

	go: function() {
		var _this = this;

		FB.getLoginStatus(function(response) {
			// Create the updated profile picture if user is logged into FB and gives this app access.
			if (response.status === 'connected') {
				var url = '/me/picture?height=' + _this.dimension + '&width=' + _this.dimension;

				FB.api(url, function(response) {
					if (response && !response.error) {
				        var photoUrl = response.data.url;

				        _this.loadCanvas(photoUrl);

				        $('.start').hide();
				        $('.results').show();

				    }
				});
				
			// Otherwise, ask the user to log into Facebook and grant access.
			} else {
				FB.login();
			}
		});
	}
};


$(document).ready(function() {
	$('#startBtn').click(function(e) {
		e.preventDefault();
		peace.go();
	});
});
