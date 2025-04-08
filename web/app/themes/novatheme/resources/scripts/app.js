import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);


// script to show more products
document.addEventListener('DOMContentLoaded', () => {
  const showMoreBtn = document.querySelector('.show-more-products');
  const extraProducts = document.querySelectorAll('.extra-product');

  if (showMoreBtn) {
    showMoreBtn.addEventListener('click', (e) => {
      e.preventDefault();
      extraProducts.forEach(card => card.classList.remove('d-none'));
      showMoreBtn.style.display = 'none';
    });
  }
});

const scrollContainer = document.getElementById('scrollContainer');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    scrollLeft.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });

    scrollRight.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });