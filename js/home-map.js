
/* -------------------------------------------------------------------------- */
/*                                  Constants                                 */
/* -------------------------------------------------------------------------- */
const countries_list = [
    '#south-africa', '#botswana', '#zimbabwe', '#malawi',' #zambia', '#kenya', '#uganda', '#rwanda', '#tanzania'
]
const countries = []
let screenWidth = window.innerWidth
let isMobile = false
let unTouchedInterval
if(screenWidth < 768){isMobile = true}
const mobileMap = document.querySelector('#mobile-map')
const desktopMap = document.querySelector('#lgScreen-map')

// filling empty array with constants
countries_list.forEach(id => {
    if(isMobile){countries.push(mobileMap.querySelector(id))}
    else {countries.push(desktopMap.querySelector(id))}
    
})
const results = document.querySelector('#map-results')
const country_name = document.querySelector('.country-name h2')
const result_items = document.querySelectorAll('.country-result-actual')
let of_this = []
let current
let chevron = document.querySelector('.chevron-down')
const close = document.querySelector('.close-btn')

/* -------------------------------------------------------------------------- */
/*                               Event Listeners                              */
/* -------------------------------------------------------------------------- */

countries.forEach(country => {
    country.addEventListener('click', () => {
        clearInterval(unTouchedInterval)
        if(country.classList.contains('active')  && isMobile){
            country.classList.remove('active')
            results.classList.remove('active')
        } else {
            clickCountry(country)
        }
    })
})

if(!isMobile){
    clickCountry(countries[Math.floor(Math.random()*countries.length)])
    unTouchedInterval = setInterval(() => {
        let item = Math.floor(Math.random()*countries.length)
        clickCountry(countries[item])
    }, 10000);
}

chevron.addEventListener('click', () => {
    chevron.classList.add('hide')
    if(current < of_this.length -1){
        current ++
    } else {
        current = 0
    }
    of_this.forEach(el => {
        el.classList.add('hide')
        setTimeout(() => {
            el.classList.add('d-none')
        }, 500)
    })
    setTimeout(() => {
        of_this[current].classList.remove('hide')
        of_this[current].classList.remove('d-none')
        chevron.classList.remove('hide')
    }, 500)

})

close.addEventListener('click', () => {
    close.classList.add('spin')
    setTimeout(() => {
        removeActive()
        results.classList.remove('active')
    }, 300);
})

/* -------------------------------------------------------------------------- */
/*                                  Functions                                 */
/* -------------------------------------------------------------------------- */

function removeActive(){
    countries.forEach(country => {
        country.classList.remove('active')
    })
}

function filterCountries(selected) {
    of_this = []
    result_items.forEach((item) => {
        if(item.dataset.country === selected){
            of_this.push(item)
            setTimeout(() => {
                if(of_this.length === 1){
                    chevron.classList.add('d-none')
                } else {
                    chevron.classList.remove('d-none')
                }
            }, 500);
        } 
       setTimeout(() => {
        item.classList.add('d-none')
        item.classList.add('hide')
       }, 500);
    })

    setTimeout(() => {
        of_this[0].classList.remove('d-none')
        of_this[0].classList.remove('hide')
    }, 500)
    current = 0

    
}

function clickCountry(country) {
    close.classList.remove('spin')
    removeActive()
    results.classList.remove('active')
    let str = country.id.replace('-', ' ')
    filterCountries(str)
    setTimeout(() => {
        country_name.innerText = str
        country.classList.add('active')
        results.classList.add('active')
    }, 500)
}

