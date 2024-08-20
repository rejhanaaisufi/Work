// Functions

// function showMessage(){
//     alert("This message is inside a function")
// }

// showMessage()

function sum(number1, number2){
    return number1 + number2
}

console.log(sum(30,45))

function toCelcius(f){
    return (5/9)*(f-32)
}
console.log("54 Fahrenheit is equal to " + toCelcius(54)+"celsius")

var result = toCelcius(54)
console.log("54 Fahrenheit is equal to" + result+ "celsius")

function ds(){
    var localVar = "digital School"
    alert(localVar)
}
ds()

function toSeconds(minutes){
    return minutes * 60 
}
console.log(toSeconds(60))

function triangle(lenght,height){
    return 0.5 * lenght * height
}

console.log(triangle(5,7))


//Objects_______________________

var car = {
    name:"BMW",
    color:"black",
    year:2024,
    km : 0,
    startEngine:function(){
        alert("Vroooom!")
    },
    get getKm(){
        return this.km;
    },
    set setKm(k){
        this.km = k
    }

}
console.log(car.getKm)

car.setKm = 100
console.log(car.getKm)

alert(car['color'])

car.startEngine()

var school = {
    name:"Digital",
    subject:"Programming",
    students:1500,
    year:2019
}

console.log(school.name)

