class smooth {
  constructor(target) {
    this.element = document.querySelectorAll(target);
  }
  sm_scroll() {
    this.element.forEach((dom) => {
      dom.addEventListener("click", function () {
        //idに連動した要素を取得
        let sm = dom.dataset.sm;
        let sm_target = document.querySelector(
          '.js_smooth[data-sm="sm-' + sm + '"]'
        );
        let sm_rect = sm_target.getBoundingClientRect();
        //
        let sm_top = sm_rect.top + window.pageYOffset - 30;
        //scrollTntoViewでスクロール
        window.scrollTo({
          top: sm_top,
          behavior: "smooth",
        });
      });
    });
  }
}
