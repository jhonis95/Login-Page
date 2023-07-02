const toResisterUser=document.getElementById("toRegisterUser"); 
const toResisterPassword=document.getElementById("toRegisterPassword");
const registerBtn=document.getElementById("register");

const data={user:toResisterUser,password:toResisterPassword}
const myInit = { 
    "method": 'POST',
    "headers": {
        "Content-Type": "application/json; charset=utf-8"
     },
   "body": JSON.stringify(data) 
};

registerBtn.addEventListener("click",()=>{
    fetch("/login.php",myInit)
    .then((res)=>{
        res.json().then((data)=>{
            console.log(data);
        })
    })
})