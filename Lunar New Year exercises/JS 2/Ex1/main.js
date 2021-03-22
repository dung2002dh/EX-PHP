function tellFortune(){
            var numberOfChildren=document.getElementById("numberOfChildren");
            var partnerSName=document.getElementById("partnerSName");
            var geographicLocation=document.getElementById("geographicLocation");
            var jobTitle=document.getElementById("jobTitle");
            var result=document.getElementById("result");
            result.innerHTML+='You will be a '+ jobTitle.value +' in '+geographicLocation.value+', and married to '+ partnerSName.value+' with '+numberOfChildren.value;
            if(parseInt(numberOfChildren.value)>1){
                result.innerHTML+=' kids';
            }else{
                result.innerHTML+=' kid';
            }
        }