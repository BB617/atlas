$(function () {
  const open = document.getElementsByClassName('modal__open');
  console.log(open);
  const modal = document.getElementById('modal');
  const modal__bg = document.getElementById('modal__bg');
  const close = document.getElementsByClassName('modal__close')[0];

  open.addEventListener('click', modalOpen);
  function modalOpen() {
    modal.style.display = 'block';
  }

  close.addEventListener('click', modalClose);
  function modalClose() {
    modal.style.display = 'none';
  }

  addEventListener('click', outsideClose);
  function outsideClose(e) {
    if (e.target == modal__bg) {
      modal.style.display = 'none';
    }
  }
});
