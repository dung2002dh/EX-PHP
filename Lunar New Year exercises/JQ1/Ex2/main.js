$(document).ready(function () {
    $("#result").click(function () {
        var number=$("#number").val();
        var odd='';
        var even='';
        if(number==''){
            $('span').text('Dữ liệu không hợp lệ').css('color','red');
        }else{
            for(var i=1;i<=number;i++){
                if (i%2==0){
                    even+=i+'   ';
                }else{
                    odd+=i+'   ';
                }
            }
            $('span').html('Các số chẵn từ 1-'+number+': '+even+'<br>Các số lẻ 1-'+number+': '+odd);
        }
    });
});