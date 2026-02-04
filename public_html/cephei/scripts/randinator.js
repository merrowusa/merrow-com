if (typeof(AC) == "undefined") AC = {};

AC.Randinator = Class.create();
AC.Randinator.prototype = {
	initialize: function() {	
		if (arguments.length > 0 && typeof(arguments[arguments.length-1]) == 'object') { // looking for a container object at the end
			Event.onDOMReady(this.randomizeContent.bind(this, arguments));
		}
		else if (arguments.length > 0) {
			this.renderInline(arguments[Math.floor(Math.random() * arguments.length)]);
		}
	},
	randomizeContent: function(args) {	
		var randNum = Math.floor(Math.random() * (args.length-1)); // avoid the container arg at the end		
		this.renderToContainer($(args[args.length-1].container), args[randNum]);
	},
	renderToContainer: function(container, content) {
		container.innerHTML = content;
	},
	renderInline: function(content) {
		document.write(content);
	}
};

function randinator() {
	if (arguments.length > 0) new AC.Randinator(arguments[Math.floor(Math.random() * arguments.length)]);
}
