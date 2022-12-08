const email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
const password_format = /^.*(?=.{8,20})(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@$!%*#?&)(^_=+-]).*$/

var first_name = document.getElementById('first-name')
var last_name = document.getElementById('last-name')
var email = document.getElementById('email')
var password = document.getElementById('password')
var confirm_password = document.getElementById('confirm-password')
var toggle_icon = document.getElementById('toggle-password')
var toggle_icon_confirm = document.getElementById('toggle-confirm-password')
var btn_submit = document.getElementById('btn-submit')

var validation = new Map([
    ['first_name', false],
    ['last_name', false],
    ['email', false],
    ['password', false],
    ['confirm_password', false]
])

first_name.onkeyup = function() {
    validateFirstName(this.value)
}

first_name.onchange = function() {
    validateFirstName(this.value)
}

last_name.onkeyup = function() {
    validateLastName(this.value)
}

last_name.onchange = function() {
    validateLastName(this.value)
}

email.onkeyup = function() {
    validateEmail(this.value)
}

email.onchange = function() {
    validateEmail(this.value)
}

password.onkeyup =  function() {
    validatePassword(this.value)
}

password.onchange =  function() {
    validatePassword(this.value)
}

confirm_password.onkeyup = function() {
    validateConfirmPassword(this.value)
}

confirm_password.onchange = function() {
    validateConfirmPassword(this.value)
}

toggle_icon.onclick = function() {
    togglePassword(this, password)
}

toggle_icon_confirm.onclick = function() {
    togglePassword(this, confirm_password)
}

btn_submit.onclick = function() {
    validateData()
}

function validateFirstName(value) {
    if (value === "" || value == null) {
        document.getElementById("first-name-check").innerHTML = "Please enter your first name"
        validation.set('first_name', false)
    }
    else {
        document.getElementById("first-name-check").innerHTML = ""
        validation.set('first_name', true)
    }
}

function validateLastName(value) {
    if (value === "" || value == null) {
        document.getElementById("last-name-check").innerHTML = "Please enter your last name"
        validation.set('last_name', false)
    }
    else {
        document.getElementById("last-name-check").innerHTML = ""
        validation.set('last_name', true)
    }
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
        document.getElementById("password-check").innerHTML = "Please enter your password";
    }
    else {
        document.getElementById('password-check').innerHTML = ""
        if (!value.match(password_format)) {
            document.getElementById("password-check").innerHTML = "Password must contain at least one number and one special character"
            validation.set('password', false)
        }
        else {
            document.getElementById("password-check").innerHTML = ""
            validation.set('password', true)
            
            if(confirm_password.value != "") {
                if (confirm_password.value != value) {
                    document.getElementById("confirm-password-check").innerHTML = "Passwords do not match"
                    validation.set('confirm_password', false)
                }
                else {
                    document.getElementById("confirm-password-check").innerHTML = ""
                    validation.set('confirm_password', true)
                }
            }
        }
    }
}

function validateConfirmPassword(value) {
    if (value === "" || value == null) {
        document.getElementById("confirm-password-check").innerHTML = "Please confirm your password"		
    }
    else {
        document.getElementById('confirm-password-check').innerHTML = ""
        if (!value.match(password.value)) {
            document.getElementById("confirm-password-check").innerHTML = "Passwords do not match"
            validation.set('confirm_password', false)
        }
        else {
            document.getElementById("confirm-password-check").innerHTML = ""
            validation.set('confirm_password', true)
        }
    }
}

function togglePassword(element, input) {
    // toggle the type attribute
    const type = input.getAttribute('type') === 'password' ? 'text' : 'password'
    input.setAttribute('type', type)

    // toggle the eye slash icon
    element.classList.toggle('fa-eye-slash')
}

function validateData() {
    if (first_name.value === "" || first_name.value == null) {
        document.getElementById("first-name-check").innerHTML = "Please enter your first name"
    }

    if (last_name.value === "" || last_name.value == null) {
        document.getElementById("last-name-check").innerHTML = "Please enter your last name"
    }

    if (email.value === "" || email.value == null) {
        document.getElementById("email-check").innerHTML = "Please enter your email"
    }
    
    if (password.value === "" || password.value == null) {
        document.getElementById("password-check").innerHTML = "Please enter your password"
    }

    if (confirm_password.value === "" || confirm_password.value == null) {
        document.getElementById("confirm-password-check").innerHTML = "Please confirm your password"
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