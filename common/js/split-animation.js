//文字分割
class SplitAnimation {
  constructor(target) {
    this.dom = target;
    this.char = this.dom.innerHTML.trim().split("");
    this.dom.innerHTML = this.split();
    this.chars = this.dom.querySelectorAll(".char");
  }
  split() {
    return this.char.reduce((a, b) => {
      b = b.replace(/\s+/, "&nbsp;");
      if (b == "/") {
        return `${a}<br>`;
      } else {
        return `${a}<span class="char">${b}</span>`;
      }
    }, "");
  }

  animate() {
    this.dom.classList.add("is_active");
    gsap.from(this.chars, {
      y: -20,
      autoAlpha: 0,
      stagger: 0.06,
      delay: 0.1,
      duration: 0.3,
    });
  }
}
