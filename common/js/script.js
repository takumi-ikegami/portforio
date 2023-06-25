/* ナビゲーション */
document.addEventListener("DOMContentLoaded", function () {
  const n_list = [".js_hum_body"];
  const na = new Nav(".js_hum_btn", n_list);
  na.animation();
});

/* 監視処理（テキストアニメーション） */
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

/* 監視処理(fadeUp) */
document.addEventListener("DOMContentLoaded", function () {
  const isp_fup = new Io(".js_up");
  const el_fup = function (target) {
    const fup = new fadeup(target);
    fup.animate();
  };
  isp_fup.ob(el_fup);
});

/* モーダルウィンドウ */
document.addEventListener("DOMContentLoaded", function () {
  new modal(".js_modal");
});

/* スムーススクロール */
document.addEventListener("DOMContentLoaded", function () {
  const sm = new smooth(".js_hum_link");
  sm.sm_scroll();
});

/* ページトップ */
document.addEventListener("DOMContentLoaded", function () {
  new PageTop(".js_topBtn", 400);
});
