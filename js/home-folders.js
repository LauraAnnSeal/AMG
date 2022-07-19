const tab1 = document.querySelector('.tab-1')
const tab2 = document.querySelector('.tab-2')
const tabContents = document.querySelectorAll('.tab-contents')

tab1.addEventListener('click', () => {
    tab1.classList.add('tab-open')
    tab2.classList.add('tab-closed')
    tab1.classList.remove('tab-closed')
    tab2.classList.remove('tab-open')
    tabContents[0].classList.remove('d-none')
    tabContents[1].classList.add('d-none')
})

tab2.addEventListener('click', () => {
    tab2.classList.add('tab-open')
    tab1.classList.add('tab-closed')
    tab2.classList.remove('tab-closed')
    tab1.classList.remove('tab-open')
    tabContents[1].classList.remove('d-none')
    tabContents[0].classList.add('d-none')
})