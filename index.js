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

            let myInit = { 
                "method": 'GET',
                "headers": {
                    "Content-Type": "application/json; charset=utf-8"
                 },
               "body": JSON.stringify(data) 
            };
            fetch("/login.php",myInit)
            .then((res)=>{
                res.json().then((data)=>{
                    if(data.location){
                        window.location=`/${data.location}`
                    }else{
                        console.log(data.messenge)
                    }
                })
            })
            .catch((err)=>{
                console.log(err);
            })

            // async function postData(url = "", data = {}) {
            //     // Default options are marked with *
            //     const response = await fetch(url, {
            //       method: "POST", // *GET, POST, PUT, DELETE, etc.
            //       mode: "cors", // no-cors, *cors, same-origin
            //       cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
            //       credentials: "same-origin", // include, *same-origin, omit
            //       headers: {
            //         "Content-Type": "application/json",
            //         // 'Content-Type': 'application/x-www-form-urlencoded',
            //       },
            //       redirect: "follow", // manual, *follow, error
            //       referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            //       body: JSON.stringify(data), // body data type must match "Content-Type" header
            //     });
            //     return response.json(); // parses JSON response into native JavaScript objects
            // }
            // postData("/login.php",data)
            // .then((res)=>{
            //     console.log(res)
            // })
            // .cache((err)=>{
            //     JSON.parse(JSON.stringify(err));
            // })
        }
})


