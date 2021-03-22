  
var string = document.querySelector('.string')
var myColor = ["Red","Green","White","Black"];
var newColor = '';
for (var i = 0; i < myColor.length; i++){
    if(i < myColor.length - 1){
        newColor += myColor[i] +',';
    }else{
        newColor += myColor[i];
    }
}

console.log(newColor) ;