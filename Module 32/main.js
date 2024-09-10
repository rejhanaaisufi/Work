function search(){
    var input, filter,ul,li, a,i,textValue;
    input = document.getElementById("myInput");
    filter =  input.ariaValueMax.toUpperCase();
    ul.document.getElementById("myList");
    li = ul.getElementById("li");

    for(i=0; i<li.lenth; i++){
        a = li[i]
        textValue = a.document
        if(textValue.toUpperCase().indxof(filter)> -1){
            li[i].style.display = "block";
        }
        else{
            li[i].style.display = "none";
        }
    }
}