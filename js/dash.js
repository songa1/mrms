

const showAdd = document.querySelector("#show-add-menu");
const addMenu = document.querySelector(".add-menu");
const showProfile = document.querySelector("#show-profile-menu");
const profileMenu = document.querySelector(".profile-menu");

showAdd.addEventListener('click', (e)=> {
    e.preventDefault();
    addMenu.classList.toggle('open');
})

showProfile.addEventListener('click', (e)=> {
    e.preventDefault();
    console.log("rrr")
    profileMenu.classList.toggle('open');
})