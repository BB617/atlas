$(function () {
  // const open = document.getElementsByClassName('modal__open');
  // console.log(open);
  // const modal = document.getElementById('modal');
  // const modal__bg = document.getElementById('modal__bg');
  // const close = document.getElementsByClassName('modal__close')[0];

  // open.addEventListener('click', modalOpen);
  // function modalOpen() {
  //   modal.style.display = 'block';
  // }

  // close.addEventListener('click', modalClose);
  // function modalClose() {
  //   modal.style.display = 'none';
  // }

  // addEventListener('click', outsideClose);
  // function outsideClose(e) {
  //   if (e.target == modal__bg) {
  //     modal.style.display = 'none';
  //   }
  // }

  // .edit-modal-openクラスがくりっくされたときの処理
  $('.modal__open').on('click', function () {
    $('#modal').fadeIn();

    // var delete_date = $(this).attr('delete_date');
    // $('#submit button').val(delete_date);

    var part = $(this).attr('part');
    var value = $(this).attr('value');

    $('#date').text(value);
    $('#part').text(part);
    $('#submit').val(value);

    return false;
  });

  $('.modal__close').on('click', function () {
    $('#modal').fadeOut();
    return false;
  });
});




    // .modal__openの任意で設定した各属性を変数に代入。
    // var post_title = $(this).attr('date');
    // var post_body = $(this).attr('part');
    // var post_id = $(this).attr('post_id');

    // 対象のHTMLのvalue属性を上書き
    // $('.modal-inner-title input').val(post_title);
    // 対象のHTMLのテキストを上書き
    // $('.modal-inner-body textarea').text(post_body);
    // 対象のHTMLのvalue属性を上書き
    // $('.edit-modal-hidden').val(post_id);
