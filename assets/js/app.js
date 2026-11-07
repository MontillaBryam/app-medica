document.addEventListener('click', function (event) {
  if (event.target.closest('.nav-link')) document.body.classList.remove('nav-open');
});
