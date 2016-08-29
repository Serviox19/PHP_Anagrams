$(document).ready(function () {
  $('#submit').on('click', function () {
    var word = $('#word').val();

    if (word === '') {
      alert('Type in a word Bro!');
    } else {
      $.ajax({
        type: 'POST',
        url: '../word.php',
        data: word,
        success: function (text) {
          $('#word').val('');
        }
      });
    }

    return false;
  });
});
