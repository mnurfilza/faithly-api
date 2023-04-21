const aside = document.getElementsByTagName("aside")[0]
const sideBar = document.querySelector(".toggle-mobile-menu")
const overlay = document.querySelector(".overlay_aside")

const toggleSidebar = () => {
    sideBar.classList.toggle("left-32")
    overlay.classList.toggle("hidden")
    sideBar.classList.toggle("open")
    aside.classList.toggle("translate-x-[-100%]")
} 

sideBar.addEventListener("click", () => {
    toggleSidebar()
})
overlay.addEventListener("click", () => {
    toggleSidebar()
})