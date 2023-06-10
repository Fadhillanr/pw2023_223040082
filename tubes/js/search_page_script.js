$(document).ready(function () {
  var coffee = $('#coffee'); // Simpan elemen coffee dalam variabel

  $('#search').keyup(function () {
    var keywords = $(this).val().split(' '); // Mengelompokkan kata kunci menjadi array

    if (keywords.length > 0) {
      $.ajax({
        url: '../search_page.php',
        data: {
          keywords: keywords,
        },
        type: 'GET',
        success: function (response) {
          coffee.html(response);
        },
        error: function (error) {
          console.log(error);
        },
      });
    }
  });
});
