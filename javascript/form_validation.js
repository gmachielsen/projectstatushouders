var form = document.getElementById('form');
form.onsubmit = function(event){

    // Do not submit the form
    event.preventDefault();

    var errors = 0;
    var userName = form.querySelector('#user_name');
    var userNameInput = userName.querySelector('input');
    var userNameError = userName.querySelector('.error');
    var userMail = form.querySelector('#user_mail');
    var userMailInput = userMail.querySelector('input');
    var userMailError = userMail.querySelector('.error');

    // Reset the class, remove active
    userNameError.classList.remove('active');
    userMailError.classList.remove('active');
    
    // Check name
    if(userNameInput.value.length === 0){
        userNameError.classList.add('active');
        errors ++; 
    }

    // Check mailadress
    if(userMailInput.value.length === 0 || !validateEmail(userMailInput.value)){
        userMailError.classList.add('active');
        errors ++; 
    }
}