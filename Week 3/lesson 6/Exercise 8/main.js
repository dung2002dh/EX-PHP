var letter='Robin Singh';
var src=prompt('lettersToCut "Robin Singh": ');
var newLetter='';
if(src>letter.length){
    src=letter.length;
}
for (var i=0;i<src;i++){
    newLetter+=letter[i];
    break;
}
alert(newLetter);