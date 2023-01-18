// remember to take the comments out in head so the sifr js files load. 
// the comments also need to be taken out of common.css so the sifr.css file gets loaded

// set font variables (define root)  for each new font add a new var
var cent_gothic = {
  src: 'js/sifr/cent_gothic.swf'
};


// activate fonts
sIFR.activate(cent_gothic); // can activate more than one font like this sIFR.activate(museo, next_font);

// replace fonts     add a new replace function for each new font
sIFR.replace(cent_gothic, {
  selector: 'h2'
  ,css: [
    '.sIFR-root { text-align: left; font-size:18px; color:#41596e; leading:18; }'
  ],
	wmode: 'transparent'
});