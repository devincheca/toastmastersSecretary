<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<?php // some reason bob and qwerty are being echoed into the state of angular
  $pledge = "";// so minutes are no logged each time
  $pledge = ($_GET["pledge"]);
  if ($pledge != "") {
  $date = ($_GET["date"]);
  $sgtAtArms = ($_GET["sgtAtArms"]);
  if ($sgtAtArms == "") { "Cossette Strassberg"; }
  $president = ($_GET["president"]);
  if ($president == "") { "Joe Mamaradlo"; }
  $attendees = ($_GET["attendees"]);
  $pledge = ($_GET["pledge"]);
  $pledgeNotes = ($_GET["pledgeNotes"]);
  $guests = ($_GET["guests"]);
  $businessNotes = ($_GET["businessNotes"]);
  $toastmaster = ($_GET["toastmaster"]);
  $generalEvaluator = ($_GET["generalEvaluator"]);
  $grammarian = ($_GET["grammarian"]);
  $wordOfTheDay = ($_GET["wordOfTheDay"]);
  $ahCounter = ($_GET["ahCounter"]);
  $timer = ($_GET["timer"]);
  $networkMaster = ($_GET["networkMaster"]);
  $respondent1 = ($_GET["respondent1"]);
  $respondent1Time = ($_GET["respondent1Time"]);
  $respondent2 = ($_GET["respondent2"]);
  $respondent2Time = ($_GET["respondent2Time"]);
  $respondent3 = ($_GET["respondent3"]);
  $respondent3Time = ($_GET["respondent3Time"]);
  $respondent4 = ($_GET["respondent4"]);
  $respondent4Time = ($_GET["respondent4Time"]);
  $respondent5 = ($_GET["respondent5"]);
  $respondent5Time = ($_GET["respondent5Time"]);
  $speaker1 = ($_GET["speaker1"]);
  $speaker1Time = ($_GET["speaker1Time"]);
  $speaker2 = ($_GET["speaker2"]);
  $speaker2Time = ($_GET["speaker2Time"]);
  $speaker3 = ($_GET["speaker3"]);
  $speaker3Time = ($_GET["speaker3Time"]);
  $speaker4 = ($_GET["speaker4"]);
  $speaker4Time = ($_GET["speaker4Time"]);
  $speaker5 = ($_GET["speaker5"]);
  $speaker5Time = ($_GET["speaker5Time"]);
  $evaluator1 = ($_GET["evaluator1"]);
  $evaluator1Time = ($_GET["evaluator1Time"]);
  $evaluator2 = ($_GET["evaluator2"]);
  $evaluator2Time = ($_GET["evaluator2Time"]);
  $evaluator3 = ($_GET["evaluator3"]);
  $evaluator3Time = ($_GET["evaluator3Time"]);
  $evaluator4 = ($_GET["evaluator4"]);
  $evaluator4Time = ($_GET["evaluator4Time"]);
  $evaluator5 = ($_GET["evaluator5"]);
  $evaluator5Time = ($_GET["evaluator5Time"]);
  $GEnotes = ($_GET["GEnotes"]);
  $notes = ($_GET["notes"]);
  $toFile = fopen($date, "w") or die("Unable to open file!");
  fwrite($toFile, "DREAMBUILDERS TOASTMATERS CLUB MINUTES for ".$date."\n");
  fwrite($toFile, "Attendees:".$attendees."\n");
  fwrite($toFile, "6:58  Sgt. at Arms, ".$sgtAtArms." announced a 2 minute warning.\n");
  fwrite($toFile, "7PM  Sgt. at Arms, ".$sgtAtArms." called the meeting to attention.  Acting President/Presiding Officer");
  fwrite($toFile, " ".$president." called the meeting to order.\n");
  fwrite($toFile, "7:02 ".$pledge." led the club in the Pledge of Allegiance.\n");
  fwrite($toFile, "".$pledgeNotes."\n");
  fwrite($toFile, "7:04  President, ".$president.", welcomed members and guests, ".$guests.".\n");
  fwrite($toFile, "During the business meeting, ".$businessNotes."\n");
  fwrite($toFile, "7:15  Toastmaster ".$toastmaster." was called to the lectern. He/She made his/her opening comments and adjusted the agenda.\n");
  fwrite($toFile, "7:20  General Evaluator ".$generalEvaluator." discussed his/her duties and called on his/her team of functionaries.\n");
  fwrite($toFile, "Grammarian: ".$grammarian."\n");
  fwrite($toFile, "Word of the Day: ".$wordOfTheDay."\n");
  fwrite($toFile, "Ah Counter: ".$ahCounter."\n");
  fwrite($toFile, "Timer: ".$timer."\n");
  fwrite($toFile, "7:28  Networking Session with Networking Master ".$networkMaster."\n");
  fwrite($toFile, "Respondent / Time\n");
  if ($respondent1 !== "") { fwrite($toFile, "".$respondent1." / ".$respondent1Time."\n"); }
  if ($respondent2 !== "") { fwrite($toFile, "".$respondent2." / ".$respondent2Time."\n"); }
  if ($respondent3 !== "") { fwrite($toFile, "".$respondent3." / ".$respondent3Time."\n"); }
  if ($respondent4 !== "") { fwrite($toFile, "".$respondent4." / ".$respondent4Time."\n"); }
  if ($respondent5 !== "") { fwrite($toFile, "".$respondent5." / ".$respondent5Time."\n"); }
  fwrite($toFile, "7:48  Ten Minute Break\n");
  fwrite($toFile, "7:58  The meeting was called back into session.\n");
  fwrite($toFile, "8:05  Prepared Speech(es)\n");
  fwrite($toFile, "Speaker / Time\n");
  if ($speaker1 !== "") { fwrite($toFile, "".$speaker1." / ".$speaker1Time."\n"); }
  if ($speaker2 !== "") { fwrite($toFile, "".$speaker2." / ".$speaker2Time."\n"); }
  if ($speaker3 !== "") { fwrite($toFile, "".$speaker3." / ".$speaker3Time."\n"); }
  if ($speaker4 !== "") { fwrite($toFile, "".$speaker4." / ".$speaker4Time."\n"); }
  if ($speaker5 !== "") { fwrite($toFile, "".$speaker5." / ".$speaker5Time."\n"); }
  fwrite($toFile, "8:09   Evaluation Session:\n");
  fwrite($toFile, "Evaluator / Time\n");
  if ($evaluator1 !== "") { fwrite($toFile, "".$evaluator1." / ".$evaluator1Time."\n"); }
  if ($evaluator2 !== "") { fwrite($toFile, "".$evaluator2." / ".$evaluator2Time."\n"); }
  if ($evaluator3 !== "") { fwrite($toFile, "".$evaluator3." / ".$evaluator3Time."\n"); }
  if ($evaluator4 !== "") { fwrite($toFile, "".$evaluator4." / ".$evaluator4Time."\n"); }
  if ($evaluator5 !== "") { fwrite($toFile, "".$evaluator5." / ".$evaluator5Time."\n"); }
  fwrite($toFile, "General Evaluator ".$generalEvaluator." led the Evaulation Session.\n");
  fwrite($toFile, "Grammarian, ".$grammarian.", noted use of the Word of the Day and Interesting Phrases.\n");
  fwrite($toFile, "Ah Counter, ".$ahCounter.", noted use of ahs and uhs, etc.\n");
  fwrite($toFile, "Timer, ".$timer.", reported the length of Time spoken by Networking Session Respondents, speaker(s) and evaluator(s).\n");
  fwrite($toFile, "In ".$generalEvaluator." report, ".$GEnotes."\n");
  fwrite($toFile, "8:12  Toastmaster ".$toastmaster." returned to the lectern, made his/her closing comments and returned control to Acting President, ".$president.".\n");
  fwrite($toFile, "8:15  President, ".$president.", called on guests ".$guests." to give their impression of the meeting.\n");
  fwrite($toFile, "Notes: ".$notes."\n");
  fwrite($toFile, "Attendees were reminded to leave a tip for the servers.\n8:18 Meeting adjourned.");
  fclose($toFile);
  echo "Minutes Logged On Server"; 
  }
  echo "<script>\n";
  echo "var wholeDate = Date() + \"\";\n";
  echo "var month = wholeDate.substr(4,3);\n";
  echo "var day = wholeDate.substr(8,2);\n";
  echo "var year = wholeDate.substr(11,4);\n";
  echo "var finalDate = month + \" \" + day + \", \" + year;\n";
  echo "var app = angular.module('minutesApp', []);\n";
  echo "app.controller('minutesCtrl', function(\$scope) {\n";
  echo "\$scope.master = {\n";
  echo "date: finalDate,\n";
  echo "sgtAtArms: \"".$sgtAtArms."\",\n";
  echo "president: \"".$president."\",\n";
  echo "attendees: \"".$attendees."\",\n";
  echo "pledge: \"".$pledge."\",\n";
  echo "pledgeNotes: \"".$pledgeNotes."\",\n";
  echo "guests: \"".$guests."\",\n";
  echo "businessNotes: \"".$businessNotes."\",\n";
  echo "toastmaster: \"".$toastmaster."\",\n";
  echo "generalEvaluator: \"".$generalEvaluator."\",\n";
  echo "grammarian: \"".$grammarian."\",\n";
  echo "wordOfTheDay: \"".$wordOfTheDay."\",\n";
  echo "ahCounter: \"".$ahCounter."\",\n";
  echo "timer: \"".$timer."\",\n";
  echo "networkMaster: \"".$networkMaster."\",\n";
  echo "respondent1: \"".$respondent1."\",\n";
  echo "respondent1Time: \"".$respondent1Time."\",\n";
  echo "respondent2: \"".$respondent2."\",\n";
  echo "respondent2Time: \"".$respondent2Time."\",\n";
  echo "respondent3: \"".$respondent3."\",\n";
  echo "respondent3Time: \"".$respondent3Time."\",\n";
  echo "respondent4: \"".$respondent4."\",\n";
  echo "respondent4Time: \"".$respondent4Time."\",\n";
  echo "respondent5: \"".$respondent5."\",\n";
  echo "respondent5Time: \"".$respondent5Time."\",\n";
  echo "speaker1: \"".$speaker1."\",\n";
  echo "speaker1Time: \"".$speaker1Time."\",\n";
  echo "speaker2: \"".$speaker2."\",\n";
  echo "speaker2Time: \"".$speaker2Time."\",\n";
  echo "speaker3: \"".$speaker3."\",\n";
  echo "speaker3Time: \"".$speaker3Time."\",\n";
  echo "speaker4: \"".$speaker4."\",\n";
  echo "speaker4Time: \"".$speaker4Time."\",\n";
  echo "speaker5: \"".$speaker5."\",\n";
  echo "speaker5Time: \"".$speaker5Time."\",\n";
  echo "evaluator1: \"".$evaluator1."\",\n";
  echo "evaluator1Time: \"".$evaluator1Time."\",\n";
  echo "evaluator2: \"".$evaluator2."\",\n";
  echo "evaluator2Time: \"".$evaluator2Time."\",\n";
  echo "evaluator3: \"".$evaluator3."\",\n";
  echo "evaluator3Time: \"".$evaluator3Time."\",\n";
  echo "evaluator4: \"".$evaluator4."\",\n";
  echo "evaluator4Time: \"".$evaluator4Time."\",\n";
  echo "evaluator5: \"".$evaluator5."\",\n";
  echo "evaluator5Time: \"".$evaluator5Time."\",\n";
  echo "GEnotes: \"".$GEnotes."\",\n";
  echo "notes: \"".$notes."\"\n";
  echo "};\n";
  echo "\$scope.reset = function() {\n";
        echo "\$scope.user = angular.copy(\$scope.master);\n";
    echo "};\n";
    echo "\$scope.reset();\n";
echo "});\n";
  echo "</script>\n";
?>

</head>
<body class="w3-light-blue w3-center w3-animate-opacity">
<article>
  <div class="w3-blue" ng-app="minutesApp" ng-controller="minutesCtrl">
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    DREAMBUILDERS TOASTMATERS CLUB MINUTES for
    <input ng-model="user.date" name="date" type="text" value="<?php echo $date; ?>"></br>
    6:58  Sgt. at Arms
    <input ng-model="user.sgtAtArms" name="sgtAtArms" type="text" value="<?php echo $sgtAtArms; ?>">
    announced a 2 minute warning.</br>
    Attendees:<input ng-model="user.attendees" name="attendees" type="text" value="<?php echo $attendees; ?>" class="w3-animate-input">
    7 PM  Sgt. at Arms
    <input ng-model="user.sgtAtArms" name="sgtAtArms" type="text" value="<?php echo $sgtAtArms; ?>">
    called the meeting to attention.  Acting President/Presiding Officer
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    called the meeting to order.
    </br>
    7:02
    <input ng-model="user.pledge" name="pledge" type="text" value="<?php echo $pledge; ?>">
    led the club in the Pledge of Allegiance.
    <input ng-model="user.pledgeNotes" name="pledgeNotes" type="text" value="<?php echo $pledgeNotes; ?>" class="w3-animate-input">
    </br>
    7:04  President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    welcomed members and guests,
    <input ng-model="user.guests" name="guests" type="text" value="<?php echo $guests; ?>" class="w3-animate-input">
    </br>
    During the business meeting,
    <input ng-model="user.businessNotes" name="businessNotes" type="text" value="<?php echo $businessNotes; ?>" class="w3-animate-input">
    </br>
    7:15  Toastmaster
    <input ng-model="user.toastmaster" name="toastmaster" type="text" value="<?php echo $toastmaster; ?>">
    was called to the lectern. She made her opening comments and adjusted the agenda.
    </br>
    7:20  General Evaluator
    <input ng-model="user.generalEvaluator" name="generalEvaluator" type="text" value="<?php echo $generalEvaluator; ?>">
    discussed her duties and called on her team of functionaries.
    </br>
    Grammarian:
    <input ng-model="user.grammarian" name="grammarian" type="text" value="<?php echo $grammarian; ?>">
    </br>
    Word of the Day
    <input ng-model="user.wordOfTheDay" name="wordOfTheDay" type="text" value="<?php echo $wordOfTheDay; ?>">
    </br>
    Ah Counter
    <input ng-model="user.ahCounter" name="ahCounter" type="text" value="<?php echo $ahCounter; ?>">
    </br>
    Timer:
    <input ng-model="user.timer" name="timer" type="text" value="<?php echo $timer; ?>">
    </br>
    7:28  Networking Session with Networking Master
    <input ng-model="user.networkMaster" name="networkMaster" type="text" value="<?php echo $networkMaster; ?>">
    </br>
    <div class="w3-center w3-row">
      <div class="w3-col s6">Respondent</div>
      <div class="w3-col s6">Time</div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.respondent1" name="respondent1" type="text" value="<?php echo $respondent1; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.respondent1Time" name="respondent1Time" type="text" value="<?php echo $respondent1Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.respondent2" name="respondent2" type="text" value="<?php echo $respondent2; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.respondent2Time" name="respondent2Time" type="text" value="<?php echo $respondent2Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.respondent3" name="respondent3" type="text" value="<?php echo $respondent3; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.respondent3Time" name="respondent3Time" type="text" value="<?php echo $respondent3Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.respondent4" name="respondent4" type="text" value="<?php echo $respondent4; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.respondent4Time" name="respondent4Time" type="text" value="<?php echo $respondent4Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.respondent5" name="respondent5" type="text" value="<?php echo $respondent5; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.respondent5Time" name="respondent5Time" type="text" value="<?php echo $respondent5Time; ?>"></div>
    </div>
    7:48  Ten Minute Break</br>
    7:58  The meeting was called back into session.</br>
    8:05   Prepared Speech(es)
    <div class="w3-center w3-row">
      <div class="w3-col s6">Speaker</div>
      <div class="w3-col s6">Time</div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.speaker1" name="speaker1" type="text" value="<?php echo $speaker1; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.speaker1Time" name="speaker1Time" type="text" value="<?php echo $speaker1Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.speaker2" name="speaker2" type="text" value="<?php echo $speaker2; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.speaker2Time" name="speaker2Time" type="text" value="<?php echo $speaker2Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.speaker3" name="speaker3" type="text" value="<?php echo $speaker3; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.speaker3Time" name="speaker3Time" type="text" value="<?php echo $speaker3Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.speaker4" name="speaker4" type="text" value="<?php echo $speaker4; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.speaker4Time" name="speaker4Time" type="text" value="<?php echo $speaker4Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.speaker5" name="speaker5" type="text" value="<?php echo $speaker5; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.speaker5Time" name="speaker5Time" type="text" value="<?php echo $speaker5Time; ?>"></div>
    </div>
    8:09   Evaluation Session:
    <div class="w3-center w3-row">
      <div class="w3-col s6">Evaluator</div>
      <div class="w3-col s6">Time</div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.evaluator1" name="evaluator1" type="text" value="<?php echo $evaluator1; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.evaluator1Time" name="evaluator1Time" type="text" value="<?php echo $evaluator1Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.evaluator2" name="evaluator2" type="text" value="<?php echo $evaluator2; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.evaluator2Time" name="evaluator2Time" type="text" value="<?php echo $evaluator2Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.evaluator3" name="evaluator3" type="text" value="<?php echo $evaluator3; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.evaluator3Time" name="evaluator3Time" type="text" value="<?php echo $evaluator3Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.evaluator4" name="evaluator4" type="text" value="<?php echo $evaluator4; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.evaluator4Time" name="evaluator4Time" type="text" value="<?php echo $evaluator4Time; ?>"></div>
    </div>
    <div class="w3-center w3-row">
      <div class="w3-col s6"><input ng-model="user.evaluator5" name="evaluator5" type="text" value="<?php echo $evaluator5; ?>"></div>
      <div class="w3-col s6"><input ng-model="user.evaluator5Time" name="evaluator5Time" type="text" value="<?php echo $evaluator5Time; ?>"></div>
    </div>
    General Evaluator
    <input ng-model="user.generalEvaluator" name="generalEvaluator" type="text" value="<?php echo $generalEvaluator; ?>">
    leads Evaulation Session.</br>
    Grammarian
    <input ng-model="user.grammarian" name="grammarian" type="text" value="<?php echo $grammarian; ?>">
    noted use of the Word of the Day and Interesting Phrases.</br>
    Ah Counter 
    <input ng-model="user.ahCounter" name="ahCounter" type="text" value="<?php echo $ahCounter; ?>">
    noted use of ahs and uhs, etc.</br>
    Timer
    <input ng-model="user.timer" name="timer" type="text" value="<?php echo $timer; ?>">
    reported the length of Time spoken by Networking Session Respondents, speaker(s) and evaluator(s).</br>
    In his/her report, the General Evaluator noted 
    <input ng-model="user.GEnotes" name="GEnotes" type="text" value="<?php echo $GEnotes; ?>" class="w3-animate-input">
    8:12   Toastmaster 
    <input ng-model="user.toastmaster" name="toastmaster" type="text" value="<?php echo $toastmaster; ?>">
    returned to the lectern, made her closing comments and returned control to Acting President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">.</br>
    8:15    President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    called on guests
    <input ng-model="user.guests" name="guests" type="text" value="<?php echo $guests; ?>" class="w3-animate-input">
    to give their impression of the meeting.</br>
    Notes:
    <input ng-model="user.notes" name="notes" type="text" value="<?php echo $notes; ?>" class="w3-animate-input"></br>
    Attendees were reminded to leave a tip for the servers. </br>
    8:18 Meeting adjourned.</br>
<input type="submit" class="w3-btn w3-ripple w3-white w3-hover-green" name="submit" value="Save"></input>
  </form>
  </div>
</article>
</body>