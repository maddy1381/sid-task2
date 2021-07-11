const userName = document.getElementById('username');
const signBtn = document.getElementById('sign-in-btn');
const password = document.getElementById('inputPassword');
const conf_password = document.getElementById('inputConfirmPassword');
const email = document.getElementById('inputemail');
const phone = document.getElementById('username');
const branch = document.getElementById('branch');
const year = document.getElementById('year');
const domain = document.getElementById('domain');

signBtn.addEventListener('click', validate);


function validate(e){
  e.preventDefault();
  
  // if((userName.value = '') || (password.value = '') || (conf_password.value = '') || (email.value = '') || (phone.value = '') || (branch.value = '') || (year.value = '') || (domain.value = '') ){
  //   alert('Enter all fields');
  // }

  if(password.value = ''){
    
    console.log('dh')
  }

  
}