const email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
const mobile_number_format = /^.*(?=.*[0][9])(?=.*[0-9])/

const first_name = document.getElementById("first-name")
const last_name = document.getElementById("last-name")
const date_of_birth = document.getElementById("date-of-birth")
const sex = document.getElementById("sex")
const email = document.getElementById("email")
const mobile_number = document.getElementById("mobile-number")
const visits = document.getElementsByName("is_first_visit")
const schedules = document.getElementsByName("schedule")
const months = document.getElementById("months");
const days = document.getElementById("days");
const years = document.getElementById("years");
const btn_submit = document.getElementById("btn-submit")

let validation = new Map([
    ["first_name", false],
    ["last_name", false],
    ["date_of_birth", false],
    ["sex", false],
    ["email", false],
    ["mobile_number", false],
    ["is_first_visit", true],
    ["schedule", true]
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

date_of_birth.onchange = function() {
    validateDateOfBirth(this.value)
}

sex.onchange = function() {
    validateSex(this.value)
}

email.onkeyup = function() {
    validateEmail(this.value)
}
email.onchange = function() {
    validateEmail(this.value)
}

mobile_number.onkeyup = function() {
    validateMobileNumber(this.value)
}
mobile_number.onchange = function() {
    validateMobileNumber(this.value)
}

schedules.forEach((schedule) => {
    schedule.onchange = function() {
        removeDays()
        addDays(years.value, months.value)
    }
})

// set default
removeDays()
addDays(2022, 1)

months.onchange = function() {
    removeDays()
    addDays(years.value, this.value)
}

years.onchange = function() {
    removeDays()
    addDays(this.value, months.value)
}

btn_submit.onclick = function() {
    validateData()
}

function validateFirstName(value) {
    if (value === "" || value == null) {
        document.getElementById("first-name-check").innerHTML = "Please enter your first name"
        validation.set("first_name", false)
    }
    else {
        document.getElementById("first-name-check").innerHTML = ""
        validation.set("first_name", true)
    }
}

function validateLastName(value) {
    if (value === "" || value == null) {
        document.getElementById("last-name-check").innerHTML = "Please enter your last name"
        validation.set("last_name", false)
    }
    else {
        document.getElementById("last-name-check").innerHTML = ""
        validation.set("last_name", true)
    }
}

function validateDateOfBirth(value) {
    if (value === "" || value == null) {
        document.getElementById("date-of-birth-check").innerHTML = "Please enter your date of birth"
        validation.set("date_of_birth", false)
    }
    else {
        document.getElementById("date-of-birth-check").innerHTML = ""
        validation.set("date_of_birth", true)
    }
}

function validateSex(value) {
    if (value === "" || value == null) {
        document.getElementById("sex-check").innerHTML = "Please select your sex"
        validation.set("sex", false)
    }
    else {
        document.getElementById("sex-check").innerHTML = ""
        validation.set("sex", true)
    }
}

function validateEmail(value) {
    if (value === "" || value == null) {
        document.getElementById("email-check").innerHTML = "Please enter your email"
    }
    else {
        if (!value.match(email_format)) {
            document.getElementById("email-check").innerHTML = "Please enter a valid email"
            validation.set("email", false)
        }
        else {
            document.getElementById("email-check").innerHTML = ""
            validation.set("email", true)
        }
    }
}

function validateMobileNumber(value) {
    if (value === "" || value == null) {
        document.getElementById("mobile-number-check").innerHTML = "Please enter your mobile number"
    }
    else {
        if (!value.match(mobile_number_format) || value.length < 11 || value.length > 14) {
            document.getElementById("mobile-number-check").innerHTML = "Please enter a valid mobile number"
            validation.set("mobile_number", false)
        }
        else {
            document.getElementById("mobile-number-check").innerHTML = ""
            validation.set("mobile_number", true)
        }
    }
}

function validateFirstVisit(elements) {
    let checked = 0
    elements.forEach((visit) => {
        if (visit.checked) checked++
    })

    if (checked == 0) {
        document.getElementById("is-first-visit-check").innerHTML = "Please select an answer"
        validation.set("is_first_visit", false)
    }
    else {
        document.getElementById("is-first-visit-check").innerHTML = ""
        validation.set("is_first_visit", true)
    }
}

function validateSchedule(elements) {
    let checked = 0
    elements.forEach((schedule) => {
        if (schedule.checked) checked++
    })

    if (checked == 0) {
        document.getElementById("schedule-check").innerHTML = "Please select a schedule"
        validation.set("schedule", false)
    }
    else {
        document.getElementById("schedule-check").innerHTML = ""
        validation.set("schedule", true)
    }
}

function addDays(year, month) {
    let first_date_in_month = new Date(year, month - 1, 1)
    let first_week_day_in_month = first_date_in_month.getDay()

    let schedule_day = 1
    schedules.forEach((schedule) => {
        if (schedule.checked) {
            schedule_day = parseInt(schedule.id)
        }
    })

    let days_in_month = new Date(year, month, 0).getDate() // last day of month
    for(i = 1; i <= days_in_month; i += 7) {
        let diff = Math.abs(first_week_day_in_month - schedule_day)
        let day = (first_week_day_in_month > schedule_day) ? i - diff : i + diff

        if (day >= 1 && day <= days_in_month) {
            let option = document.createElement("option")
            option.text = day
            option.value = day
            days.appendChild(option)
        }
    }
}

function removeDays() {
    let options_length = days.options.length
    for(i = 0; i < options_length; i++) {
        days.options[0] = null
    }
}

function validateData() {
    if (first_name.value === "" || first_name.value == null) {
        document.getElementById("first-name-check").innerHTML = "Please enter your first name"
    }

    if (last_name.value === "" || last_name.value == null) {
        document.getElementById("last-name-check").innerHTML = "Please enter your last name"
    }

    if (date_of_birth.value === "" || date_of_birth.value == null) {
        document.getElementById("date-of-birth-check").innerHTML = "Please select your date of birth"
    }

    if (sex.value != 1 || sex.value != 2) {
        document.getElementById("sex-check").innerHTML = "Please select your sex"
    }

    if (email.value === "" || email.value == null) {
        document.getElementById("email-check").innerHTML = "Please enter your email"
    }

    if (mobile_number.value === "" || mobile_number.value == null) {
        document.getElementById("mobile-number-check").innerHTML = "Please enter your mobile number"
    }

    validateFirstVisit(visits)
    validateSchedule(schedules)

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