let aColor = [ 'lightblue', 'lime','cyan','darkblue','magenta','coral','deeppink','green', "orange"];
let teller;
let correct;
let wins = 0;
let tries = 0;
let baseColor = document.getElementById("MainPart");
let started = false
let mijnInterval;


function start() {
  let sec = document.getElementById("intervaltime").value
  console.log(sec)
  mijnInterval = setInterval(secTeller, (sec * 1000))
  document.getElementById("start").disabled = true;
  document.getElementById("stop").disabled = false;

}



function shuffleArray(array) {
  for (let i = array.length - 1; i < 9; i++) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
  }

  return array;
}

function secTeller() {
  reshuffle()

}


function stop() {
  clearInterval(mijnInterval);

  mijnInterval = null;

  document.getElementById("start").disabled = false;
  document.getElementById("stop").disabled = true;

  for (let i = 0; i < aColor.length; i++) {
    document.getElementById("div"+i).style.backgroundColor = "grey";

  }
  baseColor.style.backgroundColor = "grey";
}

function reshuffle() {

  reshuffledArray = shuffleArray(aColor)
  ChangeGamePartColor(reshuffledArray)

}



function ChangeGamePartColor(array){
  for (let i = 0; i < array.length; i++) {
    document.getElementById("div"+i).style.backgroundColor = array[i];

  }
  const d = Math.floor(Math.random() * (10));
  baseColor.style.backgroundColor = aColor[d];

  return correct = d;
}


function check(a) {
  if (a == correct) {
    document.getElementById("wins").innerHTML.value += 1 
    stop()
    reshuffle()

  }
  else{
       document.getElementById("wins").innerHTML = "0"
       reshuffle()
  }

}



// console.log(correct)

// function check(a){

//     if (started) {
//       if (a == correct) {
//         wins++
//         tries++
//       }
//       else{
//         tries++
//       }
//     }



//   console.log(a)
//   console.log(document.getElementById("div" + correct))
//   baseColor.style.backgroundColor = aColor[a];
//     if (a == correct) {
//       wins += 1
//       reshuffle()

//     }
//     else{

//      reshuffle()
//       tries += 1;
//     }

// }
