

const forgetPasswordBtn = document.getElementById('forget-password');
const forgetPasswordText = document.querySelector('.forget-text');

forgetPasswordBtn.addEventListener('click', (e)=>{
    e.preventDefault();
    forgetPasswordText.classList.toggle('open');
})