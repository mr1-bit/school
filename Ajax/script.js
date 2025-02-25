function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
      }
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
  }
  // dom innerhtml
  // doc.getelementbyId => innerhtml => style || . value
  // console.log ||  window alert
  // function() => aanroepen
  // onclick()
  // js array => maken uitbreiden => forloop => inhoud in tabel invullen
  //text => uitlezen => inhoudlezen => actie