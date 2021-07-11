//Get the button:
mybutton = document.getElementById("myBtn");
const gif = document.getElementById('loading-gif');

window.onload = function() {loadingFunction()};


function loadingFunction(){
  gif.style.display = 'none';
  
}

// setTimeout(function(){
//   gif.style.display = 'none';
// },1000)

// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



function myFunction() {
     var element = document.body;
     element.classList.toggle("dark-mode");
    //  let x = document.getElementById('main-image');
    //  x.style.backgroundColor = black;
  }



//REGISTRASTION PAGE KA JS VALIDATE

// const userName = document.getElementById('username');
// const signBtn = document.getElementById('sign-in-btn');
// const password = document.getElementById('inputPassword');
// const conf_password = document.getElementById('inputConfirmPassword');
// const email = document.getElementById('inputemail');
// const phone = document.getElementById('username');
// const branch = document.getElementById('branch');
// const year = document.getElementById('year');
// const domain = document.getElementById('domain');

// signBtn.addEventListener('click', validate);


// function validate(e){
//   e.preventDefault();
//   console.log('zjxnf')
//   // if((userName.value = '') || (password.value = '') || (conf_password.value = '') || (email.value = '') || (phone.value = '') || (branch.value = '') || (year.value = '') || (domain.value = '') ){
//   //   alert('Enter all fields');
//   // }

//   if(password.value = ''){
//     alert('dk');
//   }

  
// }
