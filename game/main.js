var nrSelect = document.getElementById('nrSelect');
var btnGuess = document.getElementById('btnGuess');


btnGuess.onclick = function(){
    var count = 1;
    var guessNumber = false;
    count=1;
    guessNumber=false;

    while(guessNumber == false){
        var random = Math.floor(Math.random()*6);
        console.log(random)

        if(nrSelect.value == random){
            guessNumber= true;
            console.log("Guessed with in : "+ count + "times");

        }else{
            count=count+1;
        }
    }
}
