/*function add()
{
    location.href="Add_item.html";
}
function send(){ location.href="result.html";}

/*let popup=document.getElementById("popup");
    function send(){
       popup.classList.add("open-popup");
    }
    function re(){
        history.back();
    }*/


    let popup=document.getElementById("popup");
function openpopup(){
   popup.classList.add("open-popup");
}
    function closepopup(){
    popup.classList.remove("open-popup");
        }

        
let coc=document.getElementById("coc");
function send(){
   coc.classList.add("cov");
}
    function closecoc() {
    coc.classList.remove("cov");
        }