(function($){
	$(document).on('click', function(e) {
		var jelm = $(e.target);

		if (jelm.hasClass('cm-login-provider') || jelm.parents('.cm-login-provider').length > 0) {
			if (!jelm.hasClass('cm-login-provider')) {
				jelm = jelm.closest('.cm-login-provider');
			}

			var idp = jelm.data('idp');
			var open_id = false;

			switch (idp) {
				case "google": case "twitter": case "yahoo": case "facebook": case "aol": 
				case "vimeo": case "myspace": case "tumblr": case "lastfm": case "twitter": 
				case "linkedin": 
					var url = fn_url('auth.login_provider?provider=' + idp + '&_ts' + (new Date()).getTime());
					window.open(
						url, 
						"hybridauth_social_sing_on", 
						"location=0,status=0,scrollbars=0,width=800,height=500"
					);  
					break; 

				case "wordpress": case "blogger": case "flickr": case "livejournal":  
					var open_id = true;
					if (idp == "blogger" ){
						var un = prompt("Please enter your blog name");
					} else {
						var un = prompt("Please enter your username");
					}
					break;
				case "openid": 
					var open_id = true;
					var un = prompt("Please enter your OpenID URL");
					break;
			}

			if (open_id) {
				var oi = un;

				if (!un) {
					return false;
				}

				switch (idp) { 
					case "wordpress": oi = "http://" + un + ".wordpress.com"; break;
					case "livejournal": oi = "http://" + un + ".livejournal.com"; break;
					case "blogger": oi = "http://" + un + ".blogspot.com"; break;
					case "flickr": oi = "http://www.flickr.com/photos/" + un + "/"; break;   
				}
				
				var url = fn_url('auth.login_provider?provider=OpenID&_ts' + (new Date()).getTime() + '&openid_identifier=' + escape(oi));
				window.open(
					url, 
					"hybridauth_social_sing_on", 
					"location=0,status=0,scrollbars=0,width=800,height=500"
				); 
			}
		}
	});
})(Tygh.$);