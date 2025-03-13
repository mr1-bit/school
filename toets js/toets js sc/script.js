let naam = document.getElementById("naam");
let wachtwoord = document.getElementById("wachtwoord");

let errorUsernameElement  = document.getElementById("userNameError");
let errorPasswordElement  = document.getElementById("passwordError");
let loginErrorElement = document.getElementById("loginError");

let users = [
                {naam: "Chris", wachtwoord: "Deltion12345!!"},
                {naam: "Kevin", wachtwoord: "Deltion45678!!"},
                {naam: "Koos", wachtwoord: "DeltionX12345!"},
                {naam: "Marloes", wachtwoord: "DeltionY45678!"},
                {naam: "Ronald", wachtwoord: "DeltionZ12345!"}
            ];
                

function check(value) {

    if(value == "username"){
        console.log(naam.value);
        if (naam.value.length == "") {
            console.log("leeg");

        }

        else if (naam.value.length < 2) {
            naam.style.borderColor = "red";
            console.log("te kort");
            errorUsernameElement.innerHTML = "Naam is te kort";
            errorUsernameElement.style.color = "red";
        }

        else if(naam.value.length >= 2) {
            naam.style.borderColor = "green";
            errorUsernameElement.innerHTML = "";
        }
    }
    else if(value == "password"){
        console.log(wachtwoord.value);
        if (wachtwoord.value.length == "") {
            console.log("leeg")
    ;
        }
    
        else if (wachtwoord.value.length < 2) {
            wachtwoord.style.borderColor = "red";
            console.log("te kort");
            errorPasswordElement.innerHTML = "Wachtwoord is te kort";
            errorPasswordElement.style.color = "red";
        }
    
        else if(wachtwoord.value.length >= 2) {
            wachtwoord.style.borderColor = "green";
            errorPasswordElement.innerHTML = "";
        }
    }
}

function Login() {
    console.log(naam.value + " probeert in te loggen");
    for (let i = 0; i < users.length; i++) {

        const userdata = users[i];

        if (userdata.naam == naam.value && userdata.wachtwoord == wachtwoord.value) {

            console.log("log in gelukt");
            loginErrorElement.innerHTML = "";
            DisplayTable();

            break;
        }
        else{

            loginErrorElement.innerHTML = "error has occured";
            loginErrorElement.style.color = "red";

            continue;
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
function Reveal(index){
    document.getElementById(index).innerHTML = users[index].wachtwoord  
}

function Hide() {
    DisplayTable()
}