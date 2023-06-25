/* targetをクリックするとtarget,elmに指定した要素にis_activが付く */
class Nav {
  constructor(target, elm) {
    this.button = document.querySelector(target);
    this.target = target;
    this.elm = elm;
  }
  animation() {
    const anim_list = this.elm;
    anim_list.push(this.target);
    let check = this.button;
    this.button.addEventListener("click", function () {
      if (check.classList.contains("is_active") != true) {
        for (let i in anim_list) {
          this.target_name = document.querySelector(anim_list[i]);
          this.target_name.classList.add("is_active");
        }
      } else {
        for (let i in anim_list) {
          this.target_name = document.querySelector(anim_list[i]);
          this.target_name.classList.remove("is_active");
        }
      }
    });
  }
}
