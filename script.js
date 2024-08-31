const submitButton = document.querySelector('input[type="submit"]');

submitButton.addEventListener('click', () => {
  submitButton.classList.add('loading');
  setTimeout(() => {
    submitButton.classList.remove('loading');
  }, 2000);
});
