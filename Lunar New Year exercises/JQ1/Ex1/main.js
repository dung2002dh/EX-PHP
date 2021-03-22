function perimeter()
{
        length = parseFloat(document.getElementById("length").value);
        width = parseFloat(document.getElementById("width").value);
        var acreage =  width*2+length*2;
        document.getElementById("perimeter").innerHTML = "chu vi = " + acreage +"m";
}
function acreage()
{
        length = parseFloat(document.getElementById("length").value);
        width = parseFloat(document.getElementById("width").value);
        var acreage =  width * length;
        document.getElementById("acreage").innerHTML = "diện tích = " + acreage +"m";
}
