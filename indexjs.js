hamburger = document.querySelector(".hamburger");
let loginCont = document.getElementById('loginCont');

hamburger.onclick = function(){
    navBar = document.querySelector(".nav-bar");
    if(navBar.classList.contains("active")){
    navBar.classList.remove("active");
    loginCont.style.zIndex = '0';
    }else{
    loginCont.style.zIndex = '-20';
    navBar.classList.add("active");
    }
}
let signupCont = document.getElementById('signupCont');

hamburger.onclick = function(){
    navBar = document.querySelector(".nav-bar");
    if(navBar.classList.contains("active")){
    navBar.classList.remove("active");
    signupCont.style.zIndex = '0';
    }else{
    signupCont.style.zIndex = '-20';
    navBar.classList.add("active");
    }
}
