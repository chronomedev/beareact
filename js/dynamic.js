
function showLogIn(){
    document.getElementById("logInPopUp").style.opacity = 1;
    document.getElementById("logInPopUp").style.display = "inline-block";

}


function hideLogIn(){
    document.getElementById("logInPopUp").style.display = "none";
}


window.onload = ()=>{
    document.getElementById("logInPopUp").style.display = "none";
}