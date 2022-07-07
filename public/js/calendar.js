$(function () {

  // .edit-modal-openクラスがくりっくされたときの処理
  $('.modal__open').on('click', function () {
    $('#modal').fadeIn();

    var date = $(this).attr('date');
    var part = $(this).attr('part');
    var part_text = $(this).text();

    $('#date_text').text(date);
    $('#part_text').text(part_text);
    $('#date').val(date);
    $('#part').val(part);

    return false;
  });

  $('.modal__close').on('click', function () {
    $('#modal').fadeOut();
    return false;
  });
});
