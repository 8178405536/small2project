const searchBar= document.querySelector(".users .search input");
searchBtn = document.querySelector(".users .search button");
userslist = document.querySelector(".users . users-list");

searchBtn.onclick =()=>{
    searchBar.classlist.toggle("active");
    searchBar.focus();
    searchBtn.classlist.toggle("active");
    
}

searchBar.onkeyup =()=>{
    let searchTerm =searchBar.value;
    let xhr =new XMLHttpRequest(); //create xml object

    xhr.open("POST","search.php",true);
xhr.onload = ()=>{
      if(xhr.readyState===XMLHttpRequest.DONE){
      if(xhr.status===200){
       let data =xhr.response;
       console.log(data);
             
       }
       }}    

xhr.send();}

setInterval(()=>{
    let xhr =new XMLHttpRequest(); //create xml object

    xhr.open("GET","user.php",true);
xhr.onload = ()=>{
      if(xhr.readyState===XMLHttpRequest.DONE){
      if(xhr.status===200){
       let data =xhr.response;
       console.log(data);
             
       }
       }}    

xhr.send();},500);