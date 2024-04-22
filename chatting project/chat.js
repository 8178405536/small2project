const form= document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector(".button");

FormData.onsubmit =(e)=>{
    e.preventDefault();
}

sendBtn.onclick =()=>{
    let xhr =new XMLHttpRequest(); //create xml object

         xhr.open("POST","chat.php",true);
    xhr.onload = ()=>{
           if(xhr.readyState===XMLHttpRequest.DONE){
           if(xhr.status===200){
            
                  
            }
            }}    
let formdata = new Formdata(form);
xhr.send(formdata);}