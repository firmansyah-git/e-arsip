const menu = document.querySelector('.menu')
const aside = document.getElementById('sidebar')
const header = document.getElementById('header')
const main = document.getElementById('main')

menu.addEventListener('click', () => {
    aside.classList.toggle('aside-opened')
    header.classList.toggle('header')
    main.classList.toggle('main')
})
