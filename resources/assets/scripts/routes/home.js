export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    /* eslint-disable no-unused-vars */
    //window.addEventListener('scroll', function(ev) {
    //  var slider = document.getElementById('slideshow');
    //  var header = document.getElementById('header');
    //  var distanceToTop = slider.getBoundingClientRect().top;
    //  console.log(distanceToTop);
    //  if (distanceToTop < 100) {
    //    header.classList.add('bg-brand-darker');
    //  } else {
    //    header.classList.remove('bg-brand-darker');
    //  }
    //});

    var doc, bod, htm;
    addEventListener('load', function(){
      doc = document; bod = doc.body; htm = doc.documentElement;
      addEventListener('scroll', function(){
        doc.getElementById('header').style.backgroundColor = htm.scrollTop > 50 ? '#003B5C' : 'transparent';
      });
    });
    /* eslint-enable no-unused-vars */    
  },
};
