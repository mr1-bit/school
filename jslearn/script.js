
let imgs = "uhu.jpg";
    // object
const list = {
    name: "stelle",
    sex: "female",
    age: "18",
    state: "lewd"
    }
    // delete list.age

function change(imgs){

    if (document.getElementById("img").src == "http://127.0.0.1:5500/jslearn/uhu.jpg"){
        imgs = document.getElementById("img");
        imgs.src = "dam.jpg";
        list.state = "lewd";
        document.getElementById("text").innerHTML = "timer"
        document.querySelector("h1").innerHTML = "i'm ready give me your cock"
    }
    else{
        imgs = document.getElementById("img");
        imgs.src = "uhu.jpg";
        list.state = "nude";
        document.getElementById("text").innerHTML = "YYEESS DADDY!!!"
        // document.getElementById().innerText
    }
    console.log(list.name, list.sex, list.age, list.state)

}

let data = [{name: "stelle", sex: "female", age: "18", state: "lewd"},
    {name : "topaz", sex: "female", age : "18", state : "lewd"},
   
]



















// object
// let list = {
//     name: "stelle",
//     sex: "female",
//     age: "18",
//     state: "lewd"

// }
//  delete list.age
// console.log(list.name, list.sex, list.age, list.state)
