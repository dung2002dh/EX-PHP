function showMaxMin()
{
        firstNumber = parseFloat(document.getElementById("firstNumber").value);
        secondNumber = parseFloat(document.getElementById("secondNumber").value);
        thirdNumber = parseFloat(document.getElementById("thirdNumber").value);
        
        var max = Math.max(firstNumber, secondNumber, thirdNumber);
        var min = Math.min(firstNumber, secondNumber, thirdNumber);
        
        var result = "Số lớn nhất " + max + "<br>" + "Số nhỏ nhất " + min + "<br>"

        document.getElementById("result").innerHTML = result;
}

