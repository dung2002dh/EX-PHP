function multiplyBy()
{
        firstNumber = parseFloat(document.getElementById("firstNumber").value);
        secondNumber = parseFloat(document.getElementById("secondNumber").value);
        document.getElementById("result").innerHTML = firstNumber * secondNumber;
}

function divideBy() 
{ 
        firstNumber = parseFloat(document.getElementById("firstNumber").value);
        secondNumber = parseFloat(document.getElementById("secondNumber").value);
document.getElementById("result").innerHTML = firstNumber / secondNumber;
}
