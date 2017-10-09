ServerCall = 
{
  request: function sendRequest() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('displayResponse').innerHTML = this.responseText;
      }
    } 
    xhttp.open('GET', 'http://localbz.co/TM', true);
    xhttp.send();
  }
};
module.exports = ServerCall;