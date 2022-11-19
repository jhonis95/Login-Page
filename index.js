const submitBTN= document.getElementById("submit-btn");
const inputUser= document.getElementById('user');
const inputPassword= document.getElementById('password');
const errorMessenge= document.getElementById("errorMessenge");

submitBTN.addEventListener("click",(evt)=>{
        evt.preventDefault();
        console.log(inputPassword.value);
        if(!inputUser.value||!inputPassword.value){
            errorMessenge.innerText="User or Password is missing"
            errorMessenge.style.visibility='visible';
        }else {
            fetch("login.php")
        }
})


