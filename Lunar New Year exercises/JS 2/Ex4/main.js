function setImageBasedOnSelect(){
    var picture=document.getElementById("picture");
    var background=document.getElementById("background");
    background.style.backgroundImage='url("images/'+ picture.value +'.jpg")';
}