//modal-window
class modal {
  constructor(el) {
    this.modal = document.querySelectorAll(el);
    this.active(this.modal);
  }
  //取得したdomにクリック属性を付与
  active(modal) {
    modal.forEach((dom) => {
      dom.addEventListener("click", function () {
        //取得したidを持つ要素にis_activeを付与
        let id = dom.dataset.id;
        let modal_window = document.querySelector(
          '.js_modalWindow[data-id="modal' + id + '"]'
        );
        modal_window.classList.add("is_active");

        //画面を固定
        let now_scroll = $(window).scrollTop();
        let body = document.querySelector("body");
        body.classList.add("fixed");
        body.style.top = -now_scroll + "px";

        //animation
        gsap.to(modal_window, {
          opacity: 1,
          autoAlpha: 1,
          delay: 0.1,
          duration: 0.2,
          ease: Power4.out,
        });
        //閉じるを実行
        let modal_close = document.querySelectorAll(
          '.js_modalWindow[data-id="modal' + id + '"] .js_modal_close'
        );
        modal_close.forEach((close) => {
          close.addEventListener("click", function () {
            modal_window.classList.remove("is_active");
            //固定の解除
            body.classList.remove("fixed");
            body.style.top = 0;
            window.scrollTo(0, now_scroll);
            //animation
            gsap.to(modal_window, {
              opacity: 0,
              autoAlpha: 0,
              delay: 0.1,
              duration: 0.2,
              ease: Power4.out,
            });
          });
        });
      });
    });
  }
}
