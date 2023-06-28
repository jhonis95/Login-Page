const submitBTN= document.getElementById("submit-btn");
const inputUser= document.getElementById('user');
const inputPassword= document.getElementById('password');
const errorMessenge= document.getElementById("errorMessenge");

submitBTN.addEventListener("click",(evt)=>{
        // evt.preventDefault();
        if(evt){
            console.log(inputUser.value);
            console.log(inputPassword.value);
        }
        if(!inputUser.value||!inputPassword.value){
            errorMessenge.innerText="User or Password is missing"
            errorMessenge.style.visibility='visible';
        }else {
            let data={user:inputUser.value, password:inputPassword.value}
            let myHeaders = new Headers();
            let myInit = { method: 'POST',
               headers: myHeaders,
               mode: 'cors',
               cache: 'default',
               body: JSON.stringify(data) };

            fetch("/login.php",myInit).then((res)=>{
                console.log()
                if(res.status=="200"){
                    
                }
                // if(res){
                //     window.location.replace("AppUser.php")
                // }
            })
        }
})


