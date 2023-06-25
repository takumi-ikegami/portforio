document.addEventListener("DOMContentLoaded", function () {
  //ioの読み込み
  const isp_spl = new Io(".js_drop");
  //アニメーションの読み込み
  const el_spl = function (target) {
    const sp = new SplitAnimation(target);
    sp.animate();
  };
  //監視を実行
  isp_spl.ob(el_spl);
});

/* ページトップ */
document.addEventListener("DOMContentLoaded", function () {
  new PageTop(".js_topBtn", 100);
});
