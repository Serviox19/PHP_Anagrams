$(document).ready(function () {
  $('#submit').on('click', function() {
    var word = $('#word').val();

    var dataString = 'word=' + word;

    if (word === '') {
      alert('Type in a word Bro!');
    } else {
      $.ajax({
        type: "POST",
        url: '../word.php',
        data: dataString,
        success: function (data) {
          $('#word').val('');// clears form
          console.log(word);
        }
      });
    };
    return false;

  });
});
