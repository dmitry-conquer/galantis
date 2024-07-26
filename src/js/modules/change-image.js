const changeImage = {
  init(obj) {
    this.triggers = document.querySelectorAll(obj.triggers);
    this.mainImage = document.querySelector(obj.mainImage);
    this.listeners();
  },

  listeners() {
    this.triggers.forEach(t => {
      t?.addEventListener("click", e => {
        this.updateSrc(e);
        this.updateStyle(e);
      });
    });
  },

  updateSrc(e) {
    const url = e.target.dataset.image;
    e.target.classList.add("text-gold");
    this.mainImage.src = url;
  },
  updateStyle(e) {
    const el = e.target;
    this.triggers.forEach(t => {
      t.classList.remove("text-gold");
    });
    el.classList.add("text-gold");
  },
};

export default changeImage;
