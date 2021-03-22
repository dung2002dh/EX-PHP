function Equation()
{
        firstNumber = parseFloat(document.getElementById("firstNumber").value);
        secondNumber = parseFloat(document.getElementById("secondNumber").value);
        var kq = - secondNumber / firstNumber;
        document.getElementById("result").innerHTML = "x=" + kq;
}
