const menu = document.querySelector('.menu')
const aside = document.getElementById('sidebar')
const brand = document.querySelector('.brand')
const navText = document.querySelectorAll('.nav-text')

menu.addEventListener('click', () => {
    if (aside.classList.contains('aside-opened')) {
        aside.classList.remove('aside-opened')
        aside.classList.add('aside-closed')
        brand.classList.add('hidden')
        navText.classList.add('hidden')
    } else {
        aside.classList.add('aside-opened')
        aside.classList.remove('aside-closed')
        brand.remove.add('hidden')
        navText.remove.add('hidden')
    }
})
