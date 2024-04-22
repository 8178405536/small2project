const password= document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick =()=>{
    if(password.type =="password"){
        password.type ="text";
        toggleBtn.classlist.add("active");
    }else{
        password.type ="password";
        toggleBtn.classlist.remove("active");
    }
}