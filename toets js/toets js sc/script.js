
// werk in een los js bestand, want dat vind ik fijner werken 👍
let naam = document.getElementById("naam");
let wachtwoord = document.getElementById("wachtwoord");
let one = document.getElementById("one");
let two = document.getElementById("two");
let three = document.getElementById("three");
let users = [
                {naam: "Chris", wachtwoord: "Deltion12345!!"},
                {naam: "Kevin", wachtwoord: "Deltion45678!!"},
                {naam: "Koos", wachtwoord: "DeltionX12345!"},
                {naam: "Marloes", wachtwoord: "DeltionY45678!"},
                {naam: "Ronald", wachtwoord: "DeltionZ12345!"}
            ];
                


// kan fast in 1 fuction lol 
function check() {
        console.log(naam.value);
        if (naam.value.length == "") {
            console.log("leeg")

        }

        else if (naam.value.length < 2) {
            naam.style.borderColor = "red"
            console.log("te kort")
            one.innerHTML = "Naam is te kort"
            one.style.color = "red"
        }

        else if(naam.value.length >= 2) {
            naam.style.borderColor = "green"
        }
}
function check2() {
    console.log(wachtwoord.value);
    if (wachtwoord.value.length == "") {
        console.log("leeg")

    }

    else if (wachtwoord.value.length < 2) {
        wachtwoord.style.borderColor = "red"
        console.log("te kort")
        two.innerHTML = "Wachtwoord is te kort"
        two.style.color = "red"
    }

    else if(wachtwoord.value.length >= 2) {
        wachtwoord.style.borderColor = "green"
    }
}

// login kan vast beter nu geen tijd om aan te passen tho
// kan ook wel een to lower case gebruiken maar ja daar is nu geen tijd meer voor
// je lowkey wilt ook dat het case sensitive is toch?
function Login() {
    console.log(naam.value + " probeert in te loggen")
    for (let i = 0; i < users.length; i++) {
        const j = users[i];
        if (j.naam == naam.value && j.wachtwoord == wachtwoord.value) {
            console.log("log in gelukt")
            DisplayTable()
        }
        else{
            console.log("log in mislukt")
            three.innerHTML = "Log in mislukt "
            three.style.color = "red"
            continue
        }
        
    }
}


function DisplayTable(){
    
        let table = "<table border='1'>";
        table += "<tr><th>Naam</th><th>wachtwoord</th></tr>";
        for (let i = 0; i < users.length; i++)
        {
            table += "<tr>";
            table += "<td>" + users[i].naam + "</td>";
            table += "<td onmouseover='Reveal(" + i + ")' onmouseleave='Hide()' id='" + i + "'>" +  "*************"+ "</td>";
            table += "</tr>";
        }
        table += "</table>";
        document.getElementById('Table').innerHTML = table;
    
}
function Reveal(index) {
    document.getElementById(index).innerHTML = users[index].wachtwoord
    
}
function Hide() {
    DisplayTable()
}