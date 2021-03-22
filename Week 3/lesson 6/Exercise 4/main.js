var a,b;
function UCLN(x,y){
while(x!=y)   {
            if(x>y) x=x-y;
            else y=y-x;
}
return x;
}
a=prompt("Nhap gia tri a:");
b=prompt("Nhap gia tri b:");
document.write("Uoc chung lon nhat: " + UCLN(a,b))
