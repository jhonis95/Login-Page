const logoutBtn = document.getElementById("logout-btn")

logoutBtn.addEventListener("onclick",()=>{
    fetch('logout.php')
})