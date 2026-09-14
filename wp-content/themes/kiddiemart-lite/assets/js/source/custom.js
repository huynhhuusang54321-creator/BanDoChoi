/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let url = window.location.href;
const catLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
catLink.forEach((item) => {
  if (item.href === url) {
    item.classList.add("active");
  }
});



// wrapping product category title and category link to a new div 

const catWrappers = document.querySelectorAll('.wp-block-featured-category .wc-block-featured-category__wrapper');

catWrappers.forEach(wrapper => {
  const title = wrapper.querySelector('.wp-block-woocommerce-category-title');
  const button = wrapper.querySelector('.wp-block-button');

  if (!title || !button) return;

  const btnWrap = document.createElement('div');
  btnWrap.classList.add('btn-wrap');

  title.parentNode.insertBefore(btnWrap, title);

  btnWrap.appendChild(title);
  btnWrap.appendChild(button);
});


//  FOR HEADER PRODUCT SEARCH 

const searchInput = document.querySelector('.wp-header-right .search-product input[type="search"]');
const searchDummy = document.querySelector('.dummy-icon .wp-block-search__button');
const searchWrap = document.querySelector('.wp-header-right .search-popup');


const kiddiemartShowHandler = (e) => {
  e.preventDefault();
  let body = document.body;
  body.classList.toggle('search-toggle');
}

if (searchWrap !== null) {

  if (searchDummy !== null) {
    searchDummy.addEventListener('click', kiddiemartShowHandler)
  }

  document.addEventListener('click', function (e) {
    if (!searchWrap.contains(e.target) && !searchDummy.contains(e.target)) {
      let body = document.body;
      body.classList.remove('search-toggle')
    }
  }
  )
}

// Function to Add/remove class for mobile Woocommerce sidebar Widgets/filters
const toggleFunc = (targetElem) => {
  let filterButtons = document.querySelectorAll(targetElem);

  filterButtons.forEach((filterButton) => {
    if (filterButton !== null) {
      filterButton.addEventListener("click", () => {
        if (filterButton.classList.contains("toggled-on")) {
          // if has 'toggled-on' class remove class
          filterButton.classList.remove("toggled-on");
        } else {
          // otherwise add 'toggled-on' class
          filterButton.classList.add("toggled-on");
        }
      });
    }
  });
};

toggleFunc(".btn-mobile-filters");