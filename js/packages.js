document.querySelectorAll('.days').forEach(item => {
      item.addEventListener('click', event => {
          event.preventDefault();
          const parent = item.parentElement;
          const hiddenText = parent.querySelector('.hidden-text');
          hiddenText.classList.toggle('show');
          const shower = parent.querySelector('.days');
          if (hiddenText.classList.contains('show')) {
              shower.classList.toggle('show');
          } else {
              shower.classList.toggle('show');
          }
      });
  });
