import Isotope from 'isotope-layout';

var grid = document.querySelector('.iso-past-fellows .isotope');

var iso = new Isotope(grid, {
  itemSelector: '.iso-person',
  masonry: {
    columnWidth: '.iso-person',
  },
  stagger: 10,
  transitionDuration: '0',
});

var gridFilters = document.querySelectorAll('.iso-past-fellows .filters button');

for(let i = 0; i < gridFilters.length;i++) {
  gridFilters[i].addEventListener('click', function(){
    var filterValue = this.dataset.filter;
    iso.arrange({ filter: filterValue });
  });
}