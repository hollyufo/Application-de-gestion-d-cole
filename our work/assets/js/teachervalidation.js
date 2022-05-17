// validation for teacher
const fullname = document.getElementById('fullname');
const form = document.getElementById('form-contact');
const phone = document.getElementById('phone');
const classe = document.getElementById('class');
const id = document.getElementById('id');
const gender = document.getElementById('gender');
const subject = document.getElementById('subject');
const nameerror = document.getElementById('nameerror');
const phoneerror = document.getElementById('phoneerror');
const classerror = document.getElementById('classerror');
const iderror = document.getElementById('iderror');
const gendererror = document.getElementById('gendererror');
const subjecterror = document.getElementById('subjecterror');


// checking if inputs are empty or null
var index
form.addEventListener('submit', (e) => {
    index = 0
    if (fullname.value === '' || fullname.value == null) {
        index++
        fullname.classList.add("is-invalid");
        nameerror.innerText = "name is required."
    }
    if(phone.value === '' || phone.value == null){
        index++
        phone.classList.add("is-invalid");
        phoneerror.innerText = "phone is required."
    }
    if(classe.value === '' || classe.value == null){
        index++
        classe.classList.add("is-invalid");
        classerror.innerText = "class is required."
    }
    if(id.value === '' || id.value == null){
        index++
        id.classList.add("is-invalid");
        iderror.innerText = "id is required."
    }
    if(classe.vlaue === '' || classe.value == null){
        index++
        classe.classList.add("is-invalid");
        classerror.innerText = "class is required."
    }
    if(gender.value === '' || gender.vlaue == null){
        index++
        gender.classList.add('is-invalid')
        gendererror.innerHTML = "gender is required."
    }
    // checking subject input
    if(subject.value === '' || gander.vlaue == null){
        subject.classList.add('is-invalid')
        subjecterror.innerHTML = "subject is required."
    }
    if (index > 0) {
        e.preventDefault()
        console.log(index)
    }
}) 
