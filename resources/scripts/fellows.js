import Isotope from 'isotope-layout';

// Isotope

if (document.body.classList.contains('term-fellows')) {

  var currentGrid = document.querySelector('.iso-current-fellows .isotope');
  var pastGrid    = document.querySelector('.iso-past-fellows .isotope');
  var itemSelector = document.querySelector(itemSelector);

  console.log(currentGrid);
  console.log(pastGrid);

  var currentIso = new Isotope(currentGrid, {
    itemSelector: itemSelector,
    masonry: {
      columnWidth: itemSelector,
    },
    transitionDuration: '0',
  });

  var pastIso = new Isotope(pastGrid, {
    itemSelector: itemSelector,
    masonry: {
      columnWidth: itemSelector,
    },
    transitionDuration: '0',
  });

  // Filters

  var currentFilters = document.querySelectorAll('.iso-current-fellows .filters button');
  var pastFilters = document.querySelectorAll('.iso-past-fellows .filters button');

  for(let i = 0; i < currentFilters.length;i++) {
    currentFilters[i].addEventListener('click', function(){
      console.log(' '+this.parentElement.getAttribute('class')+' '+this.dataset.filter);
      var filterValue = this.dataset.filter;
      currentIso.arrange({ filter: filterValue });
    });
  }

  for(let i = 0; i < pastFilters.length;i++) {
    pastFilters[i].addEventListener('click', function(){
      console.log(' '+this.parentElement.getAttribute('class')+' '+this.dataset.filter);
      var filterValue = this.dataset.filter;
      pastIso.arrange({ filter: filterValue });
    });
  }

}