const headingElements = [
    document.querySelector('#nav-title'),
    document.querySelector('#nav-region')
]

headingElements.forEach(item => {
    item.classList.add('invisible-menu-start')
})

const navbarScrollFunc = function() {
    let y = window.scrollY;
    if(y < window.innerHeight/2){
        headingElements.forEach(item => {
            item.classList.add('invisible-menu')
            item.classList.remove('not-invisible-menu')
        })
    } else {
        headingElements.forEach(item => {
            item.classList.remove('invisible-menu-start')
            item.classList.remove('invisible-menu')
            item.classList.add('not-invisible-menu')
        })
    }
}

window.addEventListener('scroll', navbarScrollFunc)