//問１
function menseki(hankei,ensyu=3.14){
    return(hankei*hankei*ensyu);
}
document.write(menseki(5)+"㎡"+"<br>");
document.write(menseki(7)+"㎡"+"<br>");
document.write(menseki(10)+"㎡"+"<br>");
document.write("<br>"+"<br>");




//問２
function ryokin(otona,kodomo){
    return(otona*500)+(kodomo*200);
}
document.write(ryokin(2,4)+"円です。"+"<br>");
document.write(ryokin(1,5)+"円です。"+"<br>");
document.write(ryokin(3,7)+"円です。"+"<br>");
