import Isotope from 'isotope-layout';

export default {
  init() {

    var grid = document.querySelector('#past');
    console.log(grid);

    var iso = new Isotope(grid, {
      itemSelector: '.fellow',
      masonry: {
        columnWidth: '.fellow',
      },
      stagger: 10,
      transitionDuration: '0.6s',
    });

    // bind filter button on click
    var gridFilters = document.querySelectorAll('#past-filters button');
    for(let i = 0; i < gridFilters.length;i++) {
      gridFilters[i].addEventListener('click', function(){
        console.log(' '+this.parentElement.getAttribute('class')+' '+this.dataset.filter);
        var filterValue = this.dataset.filter;
        // use filter if matches value
        iso.arrange({ filter: filterValue });
      });
    }


    var currentGrid = document.querySelector('#current');
    console.log(currentGrid);

    var currentIso = new Isotope(currentGrid, {
      itemSelector: '.fellow',
      masonry: {
        columnWidth: '.fellow',
      },
      stagger: 10,
      transitionDuration: '0.6s',
    });

    // bind filter button on click
    var currentgridFilters = document.querySelectorAll('#current-filters button');
    for(let i = 0; i < currentgridFilters.length;i++) {
      currentgridFilters[i].addEventListener('click', function(){
        console.log(' '+this.parentElement.getAttribute('class')+' '+this.dataset.filter);
        var currentfilterValue = this.dataset.filter;
        // use filter if matches value
        currentIso.arrange({ filter: currentfilterValue });
      });
    }
    
  },
};
