let sec = 0;
let mijnInterval = null;

function secTeller() {
    sec += 1; 
    document.getElementById("display").innerHTML = sec + " sec";
    console.log("count");
}

function start() {

    if (!mijnInterval) {
        mijnInterval = setInterval(secTeller, 1000); 
    }
}

function fStop() {
    clearInterval(mijnInterval);
    mijnInterval = null;
}

function reset() {
    fStop(); 
    sec = 0; 
    document.getElementById("display").innerHTML = sec + " sec";
}





// color game javascipt code
// let aColor = ['red', 'lightblue', 'lime','cyan','darkblue','magenta','coral','deeppink','green'];
// let teller;
// let blacklist = [];



// function shuffleArray(array) {
//     for (let i = array.length - 1; i > 0; i--) {
//       // Generate a random index from 0 to i
//       const randomIndex = Math.floor(Math.random() * (i + 1));
//       // Swap elements at i and randomIndex
//       [array[i], array[randomIndex]] = [array[randomIndex], array[i]];
//     }
//     return array;
//   }


//   shuffledArray =  shuffleArray(aColor);

//   console.log(shuffledArray);

//   for (teller = 0; teller <= 9; teller += 1) {

//        console.log("de teller=" + teller);
//        console.log(" de kleur=" + aColor[teller]);
//        document.getElementById("div"+teller).style.backgroundColor = aColor[teller];


//     }