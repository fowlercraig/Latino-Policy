import Isotope from 'isotope-layout';

export default {
  init() {

    console.log('boom');

    var grid = document.querySelector('#past');
    console.log(grid);

    var iso = new Isotope(grid, {
      itemSelector: '.fellow',
      //filter: '.cat-commercial, .cat-healthcare, .cat-retail, .cat-hospitality',
        // sortAscending: {
        //  name: true,
        //  date: false
        // },
      masonry: {
        //percentPosition: true,
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
    
  },
};
