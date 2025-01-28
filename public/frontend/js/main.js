(function() {
    "use strict";
  
    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector('.scroll-top');
  
    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  
    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  
  
    /**
     * Countdown timer
     */
    function updateCountDown(countDownItem) {
      const timeleft = new Date(countDownItem.getAttribute('data-count')).getTime() - new Date().getTime();
  
      const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
  
      countDownItem.querySelector('.count-days').innerHTML = days;
      countDownItem.querySelector('.count-hours').innerHTML = hours;
      countDownItem.querySelector('.count-minutes').innerHTML = minutes;
      countDownItem.querySelector('.count-seconds').innerHTML = seconds;
  
    }
  
    document.querySelectorAll('.countdown').forEach(function(countDownItem) {
      updateCountDown(countDownItem);
      setInterval(function() {
        updateCountDown(countDownItem);
      }, 1000);
    });
  
  })();