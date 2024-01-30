const btnMobile = document.querySelector('button.btn-mobile-menu')
function initMobileMenu() {
  if (btnMobile) {
    function toggleMenu() {
      const navMobile = document.querySelector('header.menu nav')
      btnMobile.classList.toggle('active')
      navMobile.classList.toggle('active')
    }
    btnMobile.addEventListener('click', toggleMenu)
  }
}
initMobileMenu()

const btnsLanguage = document.querySelector('.btns-language')

function initLanguage() {
  if (btnsLanguage) {
    btnsLanguageHeight = btnsLanguage.scrollHeight
    btnsLanguageSelectedHeight =
      btnsLanguage.querySelector('.language-selected').scrollHeight
    btnsLanguage.addEventListener('mouseover', () => {
      btnsLanguage.style.height = `${btnsLanguageHeight}px`
    })
    btnsLanguage.addEventListener('mouseout', () => {
      btnsLanguage.style.height = `${btnsLanguageSelectedHeight + 20}px`
    })
  }
}
initLanguage()

AOS.init({
  duration: 800,
  offset: 50
})
