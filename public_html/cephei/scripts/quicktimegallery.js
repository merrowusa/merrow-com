frontRowSection = Class.create();
Object.extend(Object.extend(frontRowSection.prototype, AC.FrontRowSection.prototype), {

	activate: function() {
		Element.addClassName(this.trigger, 'active');
		this.trigger.innerHTML = this.trigger.innerHTML.replace(/Play now/, 'Now playing');
	},
	
	deactivate: function() {
		Element.removeClassName(this.trigger, 'active');
		this.trigger.innerHTML = this.trigger.innerHTML.replace(/Now Playing/, 'Play now');
	}
	
});

QuicktimeGallery = Class.create();
QuicktimeGallery.prototype = {
	
	displayPanel: null,
	controller: null,
	descriptionPanel: null,
	gallerySections: null,
	
	frontrow: null,
	
	initialSection: null,
	requestedSpecificSection: false,
	
	waitingToLookForFinished: null,
	
	order: 0,
	
	initialize: function() {
		// DOM //TODO way too intimate with the DOM here, extract and pass in
		this.displayPanel = $('quicktime');
		this.controller = 'quicktimecontroller';
		this.descriptionPanel = $('descriptionpanel');
		this.gallerySections = $('videos').getElementsByClassName('button');

		 if (!this.checkQuicktime()) {
			return;
		}
		
		var initialMovieId = this.getInitialSectionId();
		
		this.populateFrontrow(initialMovieId);
		
		//if no movie specified observe banner for start
		if (!this.requestedSpecificSection) {
			var placeholder = this.displayPanel.getElementsByClassName('poster')[0];
			placeholder = $(placeholder);

			Event.observe(placeholder, 'click', 
				this.frontrow.show.bind(this.frontrow, this.initialSection));

			var links = placeholder.getElementsBySelector('a');
			links.each(function(link) {
				link.onclick = function() {
					return false;
				}
			});
				
		} else {
			//otherwise just show the initial section
			this.frontrow.show(this.initialSection);
		}
	},
	
	track: function(movieName, replayed) {
		if (typeof(s_gi) == 'undefined' || !s_gi) {
			return;
		}
		
		this.order++;
		
		var replayedStatus = "not replayed";
		if (replayed) {
			replayedStatus = "replayed";
		}
		
		if (movieName.innerHTML) {
			movieName = movieName.innerHTML;
		}
		
		var title = $$('#videos h2 a')[0].innerHTML;
		
		var properties = {
		    prop2: this.order,
            prop3: title + ": " + movieName,
		    prop8: replayedStatus};
		
        AC.Tracking.trackClick(properties, this,'o', title + ": " + movieName);
		
	},
	
	checkQuicktime: function() {
		if (!AC.Detector.isValidQTAvailable('7')) {
			this.displayPanel.innerHTML = '<a href="/go/quicktime/"><img src="http://images.apple.com/iphone/images/quicktime_required.gif" alt="QuickTime 7 Required." width="547" height="312" border="0"></a>';
			return false;
		} else {
			return true;
		}
	},

	getInitialSectionId: function() {
		var initialMovieId = document.location.search.toQueryParams()['movie'];
		
		if (!initialMovieId && defaultId) {
			initialMovieId = defaultId;  //TODO where did default id come from?
		} else {
			this.requestedSpecificSection = true;
		}
		
		return initialMovieId;
	},
		
	populateFrontrow: function(initialMovieId) {
		var sections = [];
		
		for(var i = 0; i < this.gallerySections.length; i++) {
			if (this.gallerySections[i].hasAttribute('id')) {
				var movieLinks = this.gallerySections[i].getElementsByClassName('movielink');
				var movieUrl = movieLinks[0].href;
				var title = Builder.node('span', movieLinks[0].innerHTML);
				var description = this.gallerySections[i].getElementsByClassName('description');
				description = (description.length>0) ? this.gallerySections[i].getElementsByClassName('description')[0] : title;
				
				var id = this.gallerySections[i].id.replace(/^mov-/, '');
				
				//replace href of all the movielinks 
				for (var j=0; j<movieLinks.length; j++){
					movieLinks[j].setAttribute('href', '?movie=' + id);
				};
				
				var newSection = new frontRowSection(this.gallerySections[i], 'object'+i, movieUrl, description);
				sections.push(newSection);

				
				//if this is the requested movie, be sure to show it first
				if (initialMovieId == id) {
					this.initialSection = newSection;
				}
			}
		}
		
		//if we couldn't find a section matching the specified id from the url
		//assume the first section
		if (!this.initialSection) {
			this.initialSection = sections[0];
		}
		
		var moviePackage = this.createMovie(this.initialSection.movieUrl, true);
		var movie = moviePackage.movie;
		var movieController = moviePackage.controller;

		var beforeStartMovieCallback = function(gallery) {
			return function(section) {
				
				if(gallery.initialSection != section) {
				
					var moviePackage = gallery.createMovie(section.movieUrl, false);
					var movie = moviePackage.movie;
					
					gallery.frontrow.currentMovie = movie;
					
					moviePackage = null;
					movie = null;
				}	
				$('quicktime').innerHTML = ""; //TODO this is too heavy handed atm, we'll want the endstates to sit here before movie plays, don't want to lose them

				gallery.refreshDisplay(false, section);

				//no need to call this again
				gallery.frontrow.options.beforeStartMovie = gallery.refreshDisplay.bind(gallery, false);
			}
		}


		var startMovieCallback = function(gallery) {
			
			return function(section) {
				
				var controller = gallery.frontrow.currentController;
				
				if (controller && !controller.movie) {
					controller.attachToMovie(gallery.frontrow.currentMovie);
					controller.monitorMovie();
				}
				
				//no need to call this again
				gallery.frontrow.options.onStartMovie = null;
				
			}
			
		}

		this.frontrow = new AC.FrontRow(movie, this.displayPanel, this.descriptionPanel, sections, {
			controller: movieController,
			
			beforeStartMovie: beforeStartMovieCallback(this),
			onStartMovie: startMovieCallback(this)});
		
		moviePackage = null;
		movie = null;
	},
	
	createMovie: function(movieUrl, createController) {
		var moviewidth = 560;
		var movieheight = 316;

		// if we're Opera, use the standard movie controller, otherwise attach movie controller
		//TODO crerating controller should probably be separate from ccreating the movie
		if (AC.Detector.isOpera()) {
			var controllerstatus = true;
			this.controller.style.display = 'none';
			movieheight += 16;
			if (createController) {
				this.displayPanel.style.width = moviewidth+'px';
			}
		} else {
			var controllerstatus = false;
			if (createController) {
				var movieController = new AC.QuicktimeController();
				movieController.render(this.controller);
			}
		}

		// package movie
		var movie = new AC.Quicktime.packageMovie('gallery-movie', movieUrl, {
			width: moviewidth,
			height: movieheight,
			autostart: true,
			controller: controllerstatus,
			showlogo: false,
			cache: true,
			bgcolor: '#f6f6f6'
		});
		
		return {movie: movie, controller: movieController};
	},
	
	showSectionEnd: function() {
		
		//assuming the user may have jogged to/past the end
		//prevent them from jogging back into movie once controller is hidden
		this.frontrow.currentController.hardPaused = true;
		
		var endState = this.frontrow.currentSection.trigger.getElementsByClassName('endstate')[0].cloneNode(true); //TODO eventually not clone this, or atl east cache something of this
		
		this.displayPanel.addClassName('loading');
		this.frontrow.currentController.controllerPanel.removeClassName('active');
		
		this.displayPanel.appendChild(endState);
		new Effect.Appear(endState);
		
		var replayButton = $(endState).getElementsByClassName('replay')[0];
		replayButton.onclick = function() {
			this.refreshDisplay(true);
			return false;
		}.bind(this);
		
	},
	
	refreshDisplay: function(replaySection, section) {
		
		if (section) {
			//section specified
			this.track(section.description, replaySection);
		} else {
			//no section specified (initial movie) or replayed
			this.track(this.frontrow.currentSection.description, replaySection);
		}
		
		var endState = this.displayPanel.getElementsByClassName('endstate')[0];
		if (endState) {
			endState.parentNode.removeChild(endState);
		}

		this.displayPanel.removeClassName('loading');
		this.frontrow.currentController.controllerPanel.addClassName('active');

		//if replaying, assume cached don't delay waiting for finished
		clearTimeout(this.waitingToLookForFinished);

		if (typeof(replaySection) != 'undefined' && replaySection) {

			this.frontrow.currentController.Rewind();
			this.frontrow.currentController.Play();

		} else {

			//prevent previous movie views form having their timeouts set the finished callback
			if(this.frontrow.currentController.options) {
				this.frontrow.currentController.options.onMovieFinished = null;
			}

			var movieFinishedCallback = this.showSectionEnd.bind(this);


			var lookForFinished = function(controller, callback) {
				return function() {
					// try {console.debug("now waiting for finished");} catch(e) {}
					controller.options.onMovieFinished = callback;
				}
			}

			//give the movie some time to load before asking if it's finished
			this.waitingToLookForFinished = setTimeout(lookForFinished(this.frontrow.currentController, movieFinishedCallback), 10000);
		}
	}
}

QuicktimeSwitcher = Class.create();
QuicktimeSwitcher.prototype = {
	
	displayPanel: null,
	descriptionPanel: null,
	gallerySections: null,
	
	sections: null,
	
	
	initialize: function() {
		// DOM //TODO way too intimate with the DOM here, extract and pass in
		this.displayPanel = $('quicktime');
		this.descriptionPanel = $('descriptionpanel');
		this.gallerySections = $$('#slider li:not([class~=cloned]) > .slideritem>.button');
		
		//this.gallerySections = $('videos').getElementsByClassName('movielink');
		
		$('quicktimecontroller').style.height = "30px";
		
		var sections = [
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2008/01/endframe_customize.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-silence_ring_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_silencering.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-silence_ring_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_deletemessage.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-delete_a_message_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_favorites.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-create_favorites_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_ringtone.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-assign_a_ringtone_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_songcontrols.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-more_song_controls_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_coverflow.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-cover_flow_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_magnify.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-magnify_to_edit_text_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_mail.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-mail_preferences_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_passcode.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-passcode_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>',
		
		'<object width="560" height="316" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab">\
			<param name="src" value="http://images.apple.com/iphone/images/2007/06/endframe_reset.jpg">\
			<param name="href" value="http://movies.apple.com/movies/us/apple/iphone/2007/tips/iphone-tip-reset_iphone_i480x272.m4v">\
			<param name="controller" value="false">\
			<param name="autoplay" value="true">\
			<param name="target" value="myself">\
			<param name="scale" value="1">\
		</object>']
		
		for (var i = 0; i < this.gallerySections.length; i++) {
			
			Event.observe(this.gallerySections[i], 'click', function(evt, section, j) {
				Event.stop(evt);
				this.showSection(section);
			}.bindAsEventListener(this, sections[i], i));
		}
		
		this.showSection(sections[0]);
		
	},
	
	showSection: function(section) {
		this.displayPanel.innerHTML = "";
		this.displayPanel.removeClassName('loading');
		this.displayPanel.innerHTML = section;
		
		if (typeof(s_gi) == 'undefined' || !s_gi) {
			return;
		}

		var movieName = section.match(/\/2007\/tips\/(.*)\.m4v/gi)[0];

		s = s_gi("appleglobal,appleusip");

		s.prop4 = "";
		s.g_prop4 = "";
		s.prop6 = "";
		s.g_prop6 = "";
		s.pageName = "";
		s.g_pageName = "";
		s.pageURL = "";
		s.g_pageURL = "";
		s.g_channel = "";

		if (movieName.innerHTML) {
			movieName = movieName.innerHTML;
		}
		
		var title = $$('#videos h2 a')[0].innerHTML;

		s.linkTrackVars="prop3,prop13";
		s.prop3 = title + ": " + movieName.toLowerCase();
		s.prop13 = title + ": " + movieName.toLowerCase();
		s.tl(this,'o','');
		
		s.prop3 = "";
		s.prop13 = "";
	}
	
}

// LOCAL
Event.observe(window, 'load', function() { 
	
	if (!AC.Detector.isiPhone()) {
		new QuicktimeGallery(); 
	} else {
		new QuicktimeSwitcher();
	}
}, false);
