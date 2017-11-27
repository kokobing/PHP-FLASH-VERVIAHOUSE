// There are two objects defined in this file:
// "slide" - contains all the information for a single slide
// "slideshow" - consists of multiple slide objects and runs the slideshow

//==================================================
// slide object
//==================================================
function slide(src,link,text,window,attr,height) {
// This is the constructor function for the slide object.
// It is called automatically when you create a new slide object.
// For example:
// s = new slide();

  // Image URL
  this.src = src;
  
  // Image height
  this.height = height;
  
  // Image width
  //this.width = width;

  // Link URL
  this.link = link;

  // Text to display
  this.text = text;

  // Name of the target window ("_blank")
  this.window = window;

  // Attributes for the target window:
  // width=n,height=n,resizable=yes or no,scrollbars=yes or no,
  // toolbar=yes or no,location=yes or no,directories=yes or no,
  // status=yes or no,menubar=yes or no,copyhistory=yes or no
  // Example: "width=200,height=300"
  this.attr = attr;

  // Create an image object for the slide
  if (document.images) {
    this.image = new Image();
  }

  // Public methods
  this.load = slide_load;
  this.hotlink = slide_hotlink;
}


function slide_load() {
// This function loads the image for the slide

  if (!document.images) { return; }

  if (!this.image.src) {
    this.image.src = this.src;
  }
}


function slide_hotlink() {
// This function jumps to the slide's link.
// If a window was specified for the slide, then it opens a new window.
  if (this.link != 0) {
  	this.link = "http://www.viiarchive.com/GetPhotoShare.aspx?PhotoID=" + this.link;	
  	if (this.window) {
		// If window attributes are specified, use them to open the new window
    	if (this.attr) {
      		window.open(this.link, this.window, this.attr);

    	} else {
      		// If window attributes are not specified, do not use them
      		// (this will copy the attributes from the originating window)
      		window.open(this.link, this.window);
    	}

  	} else {
    	// Open the hotlink in the current window
    	location.href = this.link;
  	}
  } else {
  	alert ("Coming soon\nThe ability to download direct from the VII Archive.");
  }
}


//==================================================
// slideshow object
//==================================================
function slideshow( slideshowname ) {
// This is the constructor function for the slideshow object.
// It is called automatically when you create a new object.
// For example:
// ss = new slideshow("ss");

  // Name of this object
  // (required if you want your slideshow to auto-play)
  // For example, "SLIDES1"
  this.name = slideshowname;

  // When we reach the last slide, should we loop around to start the
  // slideshow again?
  this.repeat = true;

  // Number of images to pre-fetch.
  // -1 = preload all images.
  //  0 = load each image is it is used.
  //  n = pre-fetch n images ahead of the current image.
  // I recommend preloading all images unless you have large
  // images, or a large amount of images.
  this.prefetch = -1;

  // IMAGE element on your HTML page.
  // For example, document.images.SLIDES1IMG
  this.image;

  // TEXTAREA element on your HTML page.
  // For example, document.SLIDES1FORM.SLIDES1TEXT
  this.textarea;

   // Milliseconds to pause between slides
  this.timeout = 3600;

  // These are private variables
  this.slides = new Array();
  this.current = 0;
  this.timeoutid = 0;

  // Public methods
  this.add_slide = slideshow_add_slide;
  this.set_image = slideshow_set_image;
  this.set_textarea = slideshow_set_textarea;

  this.play = slideshow_play;
  this.pause = slideshow_pause;

  this.update = slideshow_update;
  this.goto_slide = slideshow_goto_slide;
  this.next = slideshow_next;
  this.previous = slideshow_previous;

  this.get_text = slideshow_get_text;
  this.display_text = slideshow_display_text;
  this.hotlink = slideshow_hotlink;

  this.save_position = slideshow_save_position;
  this.restore_position = slideshow_restore_position;

  this.noscript = slideshow_noscript;

  // Private methods
  this.loop = slideshow_loop;
  this.valid_image = slideshow_valid_image;
}


function slideshow_add_slide( slide ) {
// Add a slide to the slideshow.
// For example:
// SLIDES1.add_slide(new slide("s1.jpg", "link.html"))

  // If this version of JavaScript does not allow us to
  // change images, then we can't do the slideshow.
  if (!document.images) { return; }

  var i = this.slides.length;

  // Prefetch the slide image if necessary
  if (this.prefetch == -1) {
    slide.load();
  }

  this.slides[i] = slide;
}


function slideshow_set_textarea( textareaobject ) {
// This function configures the slideshow to use a textarea to display
// the slideshow text.

  // Set the "textarea" property of the slideshow object.
  this.textarea = textareaobject;

  // Initialize the text in the textarea
  this.display_text();
}


function slideshow_set_image( imageobject ) {
// This function configures the slideshow and tells it which image
// needs to be updated.

  // If this version of JavaScript does not allow us to
  // change images, then we can't do the slideshow.
  if (!document.images)
    return

  // Set the "image" property of the slideshow object.
  this.image = imageobject;
}


function slideshow_valid_image() {
// Returns 1 if a valid image has been set for the slideshow

  if (!this.image)
  {
    // Stop the slideshow
    this.pause;

    // Display an error message
    alert ("Error: slideshow image not initialized for " + this.name);
        
    return 0;
  }
  else {
    return 1;
  }
}


function slideshow_hotlink() {
  // This function calls the hotlink() method for the current slide.
  this.slides[ this.current ].hotlink();
}


function slideshow_update() {
// This function updates the slideshow image on the page

  // Make sure the slideshow has been initialized correctly
  if (! this.valid_image()) { return; }

  // Load the slide image if necessary
  this.slides[ this.current ].load();

  // Pre-fetch the next slide image(s) if necessary
  if (this.prefetch > 0) {
    for (i = this.current + 1;
         i <= (this.current + this.prefetch) && i < this.slides.length;
         i++) {
      this.slides[i].load();
    }
  }

  // Update the image.
  this.image.src = this.slides[ this.current ].image.src;
  //this.image.width = this.slides[ this.current ].width;
  this.image.height = this.slides[ this.current ].height;

  // Update the text
  MM_changeProp('caption','','innerHTML',this.slides[ this.current ].text,'SPAN');
}


function slideshow_goto_slide(n) {
// This function jumpts to the slide number you specify.
// If you use slide number -1, then it jumps to the last slide.
// You can use this to make links that go to a specific slide,
// or to go to the beginning or end of the slideshow.
// Thanks to Lennart Groetzbach (lennartg@web.de) for this code.
// Examples:
// <a href="javascript:myslides.goto_slide(0)">First</a>
// <a href="javascript:myslides.goto_slide(-1)">Last</a>
// <a href="javascript:myslides.goto_slide(5)">Catching a Fish</a>

  if (n == -1) {
    n = this.slides.length - 1;
  }

  if (n < this.slides.length && n >= 0) {
    this.current = n;
  }

  this.update();
}


function slideshow_next( ) {
// This function advances to the next slide.

  // Increment the image number
  if (this.current < this.slides.length - 1) {
    this.current++;
  } else if (this.repeat) {
    this.current = 0;
  }

  this.update();
}


function slideshow_previous( ) {
// This function goes to the previous slide.
  
  // Stop slideshow if prev button clicked
  this.pause();  
  
  // Decrement the image number
  if (this.current > 0) {
    this.current--;
  } else if (this.repeat) {
    this.current = this.slides.length - 1;
  }

  this.update();
}


function slideshow_display_text(text) {
// This function displays text in the textarea.

  // If a textarea has been specified,
  // then this function changes the text displayed in it
  MM_changeProp('caption','','innerHTML',this.slides[ this.current ].text,'SPAN');
  /*
  if (this.textarea) {

    if (text) {
      this.textarea.value = text;
    } else {
      this.textarea.value = this.slides[ this.current ].text;
    }
  }
  */
}


function slideshow_get_text() {
// This function returns the text of the current slide

  return(this.slides[ this.current ].text);
}


function slideshow_loop( ) {
// This function is for internal use only.
// This function gets called automatically by a JavaScript timeout.
// It advances to the next slide, then sets the next timeout.
  
  //if (this.repeat) {
    //this.current = this.slides.length - 1;
  // Go to the next image
  this.next( );

  // Keep playing the slideshow
  this.play( );
}


function slideshow_play(timeout) {
// This function implements the automatically running slideshow.

  // Make sure we're not already playing
  this.pause();

  // If a new timeout was specified (optional)
  // set it here
  if (timeout) {
    this.timeout = timeout;
  }

  // After the timeout, call this.loop()
  this.timeoutid = setTimeout( this.name + ".loop()", this.timeout);
}


function slideshow_pause( ) {
// This function stops the slideshow if it is automatically running.

  if (this.timeoutid != 0)
  {
    clearTimeout(this.timeoutid);
    this.timeoutid = 0;
  }
}


function slideshow_save_position(cookiename) {
// Saves the position of the slideshow in a cookie,
// so when you return to this page, the position in the slideshow
// won't be lost.

  if (!cookiename) {
    cookiename = this.name + '_slideshow';
  }

  document.cookie = cookiename + '=' + this.current;
}


function slideshow_restore_position(cookiename) {
// If you previously called slideshow_save_position(),
// returns the slideshow to the previous state.

  //Get cookie code by Shelley Powers

  if (!cookiename) {
    cookiename = this.name + '_slideshow';
  }

  var search = cookiename + "=";

  if (document.cookie.length > 0) {
    offset = document.cookie.indexOf(search);
    // if cookie exists
    if (offset != -1) { 
      offset += search.length;
      // set index of beginning of value
      end = document.cookie.indexOf(";", offset);
      // set index of end of cookie value
      if (end == -1) end = document.cookie.length;
      this.current = unescape(document.cookie.substring(offset, end));
      }
   }
}


function slideshow_noscript() {
// This function is not for use as part of your slideshow,
// but you can call it to get a plain HTML version of the slideshow
// images and text.
// You should copy the HTML and put it within a NOSCRIPT element, to
// give non-javascript browsers access to your slideshow information.
// This also ensures that your slideshow text and images are indexed
// by search engines.

  $html = "\n";

  // Loop through all the slides in the slideshow
  for (i=0; i < this.slides.length; i++) {

    slide = this.slides[i];

    $html += '<P>';

    if (slide.link) {
      $html += '<a href="' + slide.link + '">';
    }

    $html += '<img src="' + slide.src + '" ALT="slideshow image">';

    if (slide.link) {
      $html += '</a>';
    }

    if (slide.text) {
      $html += "<BR>\n" + slide.text;
    }

    $html += '</P>' + "\n\n";
  }

  // Make the HTML browser-safe
  $html = $html.replace(/\&/g, "&amp;" );
  $html = $html.replace(/</g, "&lt;" );
  $html = $html.replace(/>/g, "&gt;" );

  return('<pre>' + $html + '</pre>');
}


function MM_findObj(n, d) { //v4.01
  var p,i,x;  
  
  if(!d) 
  	d=document; 
  
  if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; 
	n=n.substring(0,p);
  }
  if(!(x=d[n])&&d.all) 
  	x=d.all[n]; 
  
  for (i=0;!x&&i<d.forms.length;i++) 
  	x=d.forms[i][n];
  
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) 
  	x=MM_findObj(n,d.layers[i].document);
  
  if(!x && d.getElementById) 
  	x=d.getElementById(n); 
  
  return x;
}

function MM_changeProp(objName,x,theProp,theValue) { //v6.0
  var obj = MM_findObj(objName);
  if (obj && (theProp.indexOf("style.")==-1 || obj.style)){
    if (theValue == true || theValue == false)
      eval("obj."+theProp+"="+theValue);
    else 
	  eval("obj."+theProp+"='"+theValue+"'");
  }
}