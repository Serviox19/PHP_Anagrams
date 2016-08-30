$(document).ready(function () {
  $('#submit').on('click', function() {
    var wordInput = $('#word').val();

    var data = {word:wordInput};

    if (word === '') {
      alert('Type in a word Bro!');
    } else {
      $.ajax({
        type: "POST",
        url: '../word.php',
        data: data,
        success: function(msg) {
          $('#word').val('');// clears form
          $('#response').html(msg);
        }
      });
    };
    return false;

  });
});
