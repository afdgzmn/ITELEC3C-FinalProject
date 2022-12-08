const email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

var email = document.getElementById('email')
var password = document.getElementById('password')
var toggle_icon = document.getElementById('toggle-password')
var btn_submit = document.getElementById('btn-submit')

var validation = new Map([
    ['email', false],
    ['password', false]
])

email.onkeyup = function() {
    validateEmail(this.value)
}

email.onchange = function() {
    validateEmail(this.value)
}

password.onkeyup = function() {
    validatePassword(this.value)
}

password.onchange = function() {
    validatePassword(this.value)
}

toggle_icon.onclick = function() {
    togglePassword(this)
}

btn_submit.onclick = function() {
    validateData()
}

function validateEmail(value) {
    if (value === "" || value == null) {
        document.getElementById("email-check").innerHTML = "Please enter your email"
    }
    else {
        if (!value.match(email_format)) {
            document.getElementById("email-check").innerHTML = "Please enter a valid email"
            validation.set('email', false)
        }
        else {
            document.getElementById("email-check").innerHTML = ""
            validation.set('email', true)
        }
    }
}

function validatePassword(value) {
    if (value === "" || value == null) {
        document.getElementById("password-check").innerHTML = "Please enter your password"
        validation.set('password', false)
    }
    else {
        document.getElementById("password-check").innerHTML = ""
        validation.set('password', true)
    }
}

function togglePassword(element) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password'
    password.setAttribute('type', type)

    // toggle the eye slash icon
    element.classList.toggle('fa-eye-slash')
}

function validateData() {
    if (email.value === "" || email.value == null) {
        document.getElementById("email-check").innerHTML = "Please enter your email"
    }
    
    if (password.value === "" || password.value == null) {
        document.getElementById("password-check").innerHTML = "Please enter your password"
    }

    let errors = 0
    validation.forEach(function(value, _) {
        if (!value) errors++
    })

    if (errors > 0) {
        event.preventDefault()
    }
    else {
        return
    }
}