const button = document.querySelector(".drop-dawn");
const menu = document.querySelector(".ul-perfil");
const arrow = document.querySelector(".arrow");

function mudarVisualizacaoMenu() {
    menu.style.display = (menu.style.display == "none" || !menu.style.display)
        ? "block"
        : "none";
    arrow.classList.toggle("rotated");
}