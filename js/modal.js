

const modal = document.querySelector('.modal');
const attModal = document.getElementById('attendance-modal');
const roleModal = document.getElementById('role-modal');
const userModal = document.getElementById('user-modal');
const closeAttModal = document.getElementById("close-att-modal");
const closeUserModal = document.getElementById("close-user-modal");
const closeRoleModal = document.getElementById("close-role-modal");
const addNewMenu = document.querySelector(".add-menu");
const showAttendance = document.getElementById("show-attendance-modal");
const showUser = document.getElementById("show-user-modal");
const showRole = document.getElementById("show-role-modal");

showAttendance.addEventListener('click', (e)=>{
    e.preventDefault();
    attModal.style.display = "block";
    addNewMenu.classList.toggle('open')
})

closeAttModal.addEventListener('click', (e)=>{
    e.preventDefault();
    attModal.style.display = "none"
})

showUser.addEventListener('click', (e)=>{
    e.preventDefault();
    userModal.style.display = "block";
    addNewMenu.classList.toggle('open')
})

closeUserModal.addEventListener('click', (e)=>{
    e.preventDefault();
    userModal.style.display = "none"
})

showRole.addEventListener('click', (e)=>{
    e.preventDefault();
    roleModal.style.display = "block";
    addNewMenu.classList.toggle('open')
})

closeRoleModal.addEventListener('click', (e)=>{
    e.preventDefault();
    roleModal.style.display = "none"
})