function closeAlert() {
  $('.alert').fadeOut();
}


$(document).ready(function() {
  if ($('.alert').length) {
    setTimeout(function() {
        $('.alert').fadeOut();
    }, 3000);
  }
});

