  
var result= document.getElementById('result');

for (var i=1;i<=25;i++){
    if (i%5==0){
        result.innerHTML += '* <br>';
    }else{
        result.innerHTML += '*';
    }
}