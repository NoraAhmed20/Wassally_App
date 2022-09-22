const employeeContainer = document.querySelector('.container-employee')
const orderLink = document.querySelector('#order')
const orderTimeline = document.querySelector('#orderTimeline')
const loginLink = document.querySelector('#login')
const profileLink = document.querySelector('#profileLink')
const logOutLink = document.querySelector('#logOut')

var isLoggedIn = false
let isEmployee = false

window.addEventListener('load', firstLoad())

async function firstLoad() {
  await checkIfUserLoggedIn()
  await checkRegisterEmployee()
}

async function checkIfUserLoggedIn() {
  let user = await localStorage.getItem('user')
  if (user) {
    isLoggedIn = true
    orderLink.style.display = 'inline-block'
    orderTimeline.style.display = 'inline-block'
    profileLink.style.display = 'inline-block'
    loginLink.style.display = 'none'
    logOutLink.style.display = 'inline-block'
  } else {
    isLoggedIn = false
    orderLink.style.display = 'none'
    orderTimeline.style.display = 'none'
    profileLink.style.display = 'none'
    loginLink.style.display = 'inline-block'
    logOutLink.style.display = 'none'
  }
}

async function login() {
  await localStorage.setItem('user', 'true')
  window.location.href = `/index`
}

async function logOut() {
  await localStorage.removeItem('user')
  window.location.href = `/index`
}

function checkIfEmployee(element) {
  if (element.id == 'employee') {
    isEmployee = true
    checkRegisterEmployee()
  } else {
    isEmployee = false
    checkRegisterEmployee()
  }
}


function checkRegisterEmployee() {
  if (isEmployee) {
    employeeContainer.style.display = 'block'
  } else {
    employeeContainer.style.display = 'none'
  }
}
