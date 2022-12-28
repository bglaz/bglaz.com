const $hamburger = document.getElementById("hamburger"),
  $menu = document.getElementById("menu");

const init = () => {
  $hamburger.addEventListener("click", function(e) {
    this.classList.toggle("open");
    $menu.classList.toggle("open");
  });
};

export { init };
