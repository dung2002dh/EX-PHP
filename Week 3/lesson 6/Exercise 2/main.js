function biggest()
{
        firstNumber = parseFloat(document.getElementById("firstNumber").value);
        secondNumber = parseFloat(document.getElementById("secondNumber").value);
        if(secondNumber > firstNumber){
        document.getElementById("result").innerHTML = secondNumber;
        }
        else{
         document.getElementById("result").innerHTML = firstNumber;
        }
        
}
