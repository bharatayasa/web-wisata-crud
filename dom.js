  // scroll card
  function fadeInOnScroll() {
      const cards = document.querySelectorAll('.card');
      
      cards.forEach(card => {
          if (isElementInViewport(card)) {
          card.classList.add('fade-in');
          }
      });
    }

    function isElementInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
    window.addEventListener('scroll', fadeInOnScroll);