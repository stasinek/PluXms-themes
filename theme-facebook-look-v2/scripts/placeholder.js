/*

Input Placeholder Text
by DotJay's Lab
http://lab.dotjay.co.uk/

*/

window.onload = function () {

	if (!document.getElementsByTagName) return true;

	ourForms = document.getElementsByTagName('form');

	// go through each form
	var numForms = ourForms.length;
	for (var i=0;i<numForms;i++) {

		// go through each form element
		var numFormElements = ourForms[i].elements.length;
		for (var j=0;j<numFormElements;j++) {

			var el = ourForms[i].elements[j];

			// ignore submit buttons
			if (el.type == "submit") continue;

			// if we got a text type input
			if (el.type == "text") {
				// only populate if we want it to
				// note: might want title attribute but no pre-population of inputs
				var ourClassName = el.className;
				if (ourClassName.match('auto-select') || ourClassName.match('auto-clear') || ourClassName.match('populate')) {
					// only populate if empty
					if (el.value == '') el.value = el.title;
				}

				// add auto select if class contains auto-select
				// note: else if below so auto-select takes precedence (assuming select is better than clear)
				if (el.className.match('auto-select')) {
					el.onfocus = function () {
						if (this.value == this.title) this.select();
					}
					if (el.captureEvents) el.captureEvents(Event.FOCUS);
				}

				// add auto clear if class contains auto-clear
				else if (el.className.match('auto-clear')) {
					el.onfocus = function () {
						if (this.value == this.title) this.value = '';
					}
					if (el.captureEvents) el.captureEvents(Event.FOCUS);

					el.onblur = function () {
						if (this.value == '') this.value = this.title;
					}
					if (el.captureEvents) el.captureEvents(Event.BLUR);
				}
			}

			// if we got a textarea
			if (el.type == "textarea") {
				// only populate if we want it to
				// note: might want title attribute but no pre-population of inputs
				var ourClassName = el.className;
				if (ourClassName.match('auto-select') || ourClassName.match('auto-clear') || ourClassName.match('populate')) {
					// only populate if empty
					if (el.value == '') el.value = el.title;
				}

				// add auto select if class contains auto-select
				if (el.className.match('auto-select')) {
					el.onfocus = function () {
						if (this.value == this.title) this.select();
					}
					if (el.captureEvents) el.captureEvents(Event.FOCUS);
				}

				// add auto clear if class contains auto-clear
				else if (el.className.match('auto-clear')) {
					el.onfocus = function () {
						if (this.value == this.title) this.value = '';
					}
					if (el.captureEvents) el.captureEvents(Event.FOCUS);

					el.onblur = function () {
						if (this.value == '') this.value = this.title;
					}
					if (el.captureEvents) el.captureEvents(Event.BLUR);
				}
			}

		}

	}

}
