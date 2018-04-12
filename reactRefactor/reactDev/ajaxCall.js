var ServerCall = 
{
  request: function sendRequest(appState) 
  {
    return new Promise((resolve, reject) => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var wholeDate = Date() + "";
        var hours = wholeDate.substr(16,2) % 12;
        var minutes = wholeDate.substr(19,2);
        var res = "" +
          this.responseText 
          + " " 
          + hours
          + ":"
          + minutes;
        resolve(res);
      }
    } 
    xhttp.open('POST', 'https://localbz.co/TM/minutes/753159.php', true);
    xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhttp.send(JSON.stringify(appState));
    });
  },
  stringify: function toString(appState)
  {
    var requestString = "";
    requestString += "date=" + appState.date + "&";
    requestString += "sgtAtArms=" + appState.sgtAtArms + "&";
    requestString += "president=" + appState.president + "&";
    requestString += "attendees=" + appState.attendees + "&";
    requestString += "pledge=" + appState.pledge + "&";
    requestString += "pledgeNotes=" + appState.pledgeNotes + "&";
    requestString += "guests=" + appState.guests + "&";
    requestString += "businessNotes=" + appState.businessNotes + "&";
    requestString += "toastmaster=" + appState.toastmaster + "&";
    requestString += "generalEvaluator=" + appState.generalEvaluator + "&";
    requestString += "grammarian=" + appState.grammarian + "&";
    requestString += "wordOfTheDay=" + appState.wordOfTheDay + "&";
    requestString += "ahCounter=" + appState.ahCounter + "&";
    requestString += "timer=" + appState.timer + "&";
    requestString += "networkMaster=" + appState.networkMaster + "&";
    requestString += "respondent1=" + appState.respondent1 + "&";
    requestString += "respondent1Time=" + appState.respondent1Time + "&";
    requestString += "respondent2=" + appState.respondent2 + "&";
    requestString += "respondent2Time=" + appState.respondent2Time + "&";
    requestString += "respondent3=" + appState.respondent3 + "&";
    requestString += "respondent3Time=" + appState.respondent3Time + "&";
    requestString += "respondent4=" + appState.respondent4 + "&";
    requestString += "respondent4Time=" + appState.respondent4Time + "&";
    requestString += "respondent5=" + appState.respondent5 + "&";
    requestString += "respondent5Time=" + appState.respondent5Time + "&";
    requestString += "speaker1=" + appState.speaker1 + "&";
    requestString += "speaker1Time=" + appState.speaker1Time + "&";
    requestString += "speaker2=" + appState.speaker2 + "&";
    requestString += "speaker2Time=" + appState.speaker2Time + "&";
    requestString += "speaker3=" + appState.speaker3 + "&";
    requestString += "speaker3Time=" + appState.speaker3Time + "&";
    requestString += "speaker4=" + appState.speaker4 + "&";
    requestString += "speaker4Time=" + appState.speaker4Time + "&";
    requestString += "speaker5=" + appState.speaker5 + "&";
    requestString += "speaker5Time=" + appState.speaker5Time + "&";
    requestString += "evaluator1=" + appState.evaluator1 + "&";
    requestString += "evaluator1Time=" + appState.evaluator1Time + "&";
    requestString += "evaluator2=" + appState.evaluator2 + "&";
    requestString += "evaluator2Time=" + appState.evaluator2Time + "&";
    requestString += "evaluator3=" + appState.evaluator3 + "&";
    requestString += "evaluator3Time=" + appState.evaluator3Time + "&";
    requestString += "evaluator4=" + appState.evaluator4 + "&";
    requestString += "evaluator4Time=" + appState.evaluator4Time + "&";
    requestString += "evaluator5=" + appState.evaluator5 + "&";
    requestString += "evaluator5Time=" + appState.evaluator5Time + "&";
    requestString += "GEnotes=" + appState.GEnotes + "&";
    requestString += "notes=" + appState.notes + "&";
    return requestString;
  }
};
module.exports = ServerCall;