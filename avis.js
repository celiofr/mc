const form = document.getElementById('myForm');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const formData = new FormData(form);

  fetch('/submit-form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      alert('Le formulaire a bien été envoyé.');
      form.reset();
    } else {
      alert('Une erreur est survenue.');
    }
  })
  .catch(error => {
    alert('Une erreur est survenue.');
  });
});

