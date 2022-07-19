const burgerNav = document.querySelector('.nav-icon-5')
const menu = document.querySelector('#menu')
const wrapper = document.querySelector('#wrapper')
const backing = document.querySelector('#menu-backing')

burgerNav.addEventListener('click', () => {
    changeMenu()
})

backing.addEventListener('click', () => {
    changeMenu()
})

function changeMenu() {
    burgerNav.classList.toggle('open')
    menu.classList.toggle('menu-closed')
    menu.classList.toggle('menu-open')
    wrapper.classList.toggle('menu-open')
}