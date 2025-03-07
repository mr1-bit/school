let elementId = document.getElementById("naam")
let objec = [{name: "bjorn", lastname: "bakker"},
    {name: "john", lastname: "jogal"},
    {name: "jose", lastname: "martines"},
    {name: "nick", lastname: "valentino"},
]
let achternaam  = document.getElementById("achternaam")

function Com(){
    
    // a bit slow with large dataset but it works
    // also  runs in to issues with when there are 2 ppl with the same name
    // also case sensitive lol
    for (let i = 0; i < objec.length; i++) {
        const j = objec[i];

        if (elementId.value == j.name) {
            elementId.value = j.name + " " + j.lastname
            achternaam.value = j.lastname
        }
        

        else if(elementId.value.length <= 9){
            elementId.style.backgroundColor = "red"
        }
        else if(elementId.value.length >= 10){
            elementId.style.backgroundColor = "green"
        }
        else{
            continue
        }
        
        
    }

    
   }
    

   function ShowBMICategoryTable()
   {
       let table = "<table border='1'>";
       table += "<tr><th>Categorie</th><th>Naam</th></tr>";
       for (let i = 0; i < jsonArrayBMICategories.length; i++)
       {
           table += "<tr>";
           table += "<td>" + jsonArrayBMICategories[i].categorie + "</td>";
           table += "<td>" + jsonArrayBMICategories[i].naam + "</td>";
           table += "</tr>";
       }
       table += "</table>";
       document.getElementById('bmiTable').innerHTML = table;
   }
   