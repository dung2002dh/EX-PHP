function EnterN()
{
        inN = parseFloat(document.getElementById("inN").value);
        var n = inN;
        giaithua = 1;
        for (i=1; i<=n; i++){
        	giaithua = giaithua * i;	
        }
        document.getElementById("result").innerHTML = n +"!" + "= " + giaithua;
}
