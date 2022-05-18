const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('loginform')
const passworderror = document.getElementById('passwordError')
const emailErrorField = document.getElementById('usernameError')
var valid
// checking data for all inputs if it exist
var index
const patterns =  /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
const passpattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
form.addEventListener('submit', (e) => {
    index = 0
    if (email.value === '' || email.value == null) {
        index++
        email.classList.add("is-invalid");
        emailErrorField.innerText = "email is required."
        if(patterns.test(email.value) == false){
            index++
            email.classList.add("is-invalid");
            emailErrorField.innerText = "This is not a valid Email."
        }
    }
    // testing password if it pass regex
    if(passpattern.test(password.value) == false){
        index++
        password.classList.add("is-invalid");
        passworderror.innerText = "Password must contain at least 8 characters, one uppercase, one lowercase, one number and one special character."
    }
    if (password.value === '' || password.value == null) {
        index++
        password.classList.add("is-invalid");
        passworderror.innerText = "password is required"
    }
    if (index > 0) {
        e.preventDefault()
        console.log(index)
    }
}) 
