function tax(){
            var salary=document.getElementById("salary");
            var result=document.getElementById("result");
            if(parseInt(salary.value)>500){
                result.innerHTML='Thuế bạn phải nộp là: '+ salary.value/10;
            }else{
                result.innerHTML='Bạn không phải nộp thuế!';
            }
        }