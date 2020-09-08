function addClass(el, klass) {
  el.classList.add(klass);
}

function removeClass(el, klass) {
  el.classList.remove(klass);
}

const accordionItems = document.querySelectorAll('.alm-filter');
const accordionContentPanes = document.querySelectorAll('.alm-filter ul');

// Hide each besides the targeted accordion on click
accordionItems.forEach(function(accordion) {
  // Clicked accordeions clickable target
  const accordionTitleRow = accordion.querySelector('.alm-filter--title');
  accordion.querySelector('ul').classList.add('hidden');
  accordionTitleRow.addEventListener('click', toggleAccordion);
  // console.log(accordion.firstElementChild);  
});

// Show first by default
accordionItems[0].querySelector('.alm-filter ul').classList.remove('hidden');

function toggleAccordion(e) {
  accordionContentPanes.forEach(function(content) {
    // Check if clicked row matches the content's previous element sibling
    console.log(content); 
    if (content.previousElementSibling === e.target) {
      removeClass(content, 'hidden'); 
      addClass(content.parentElement, 'active');
    } else {
      removeClass(content.parentElement, 'active');
      addClass(content, 'hidden');
    }
  });
}