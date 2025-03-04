let elementId = document.getElementById("naam")
let objec = [{name: "bjorn", lastname: "bakker"},
    {name: "john", lastname: "jogal"},
    {name: "jose", lastname: "martines"},
    {name: "nick", lastname: "valentino"},
]

function Com(){
    
    // a bit slow with large dataset but it works
    // also  runs in to issues with when there are 2 ppl with the same name
    // also case sensitive lol
    for (let i = 0; i < objec.length; i++) {
        const j = objec[i];

        if (elementId.value == j.name) {
            elementId.value = j.name + " " + j.lastname
        }

        else{
           continue;
        }
        
    }

    
   }
    