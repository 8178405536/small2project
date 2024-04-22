const searchBar= document.querySelector(".users .search input");
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick =()=>{
    searchBar.classlist.toggle("active");
    searchBar.focus();
    searchBtn.classlist.toggle("active");
    
}