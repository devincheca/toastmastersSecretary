<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<?php // some reason bob and qwerty are being echoed into the state of angular
  $attendees = "";// so minutes are no logged each time
  $attendees = ($_GET["attendees"]);
  if ($attendees != "") 
  {
  $date = ($_GET["date"]);
  $sgtAtArms = ($_GET["sgtAtArms"]);
  if ($sgtAtArms == "") 
  { 
    "Cossette Strassberg"; 
  }
  $president = ($_GET["president"]);
  if ($president == "") 
  { 
    "Joe Mamaradlo"; 
  }
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
  fwrite($toFile, "DREAMBUILDERS TOASTMASTERS CLUB MINUTES for ".$date."\n");
  fwrite($toFile, "Attendees: ".$attendees."\n");
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
  fwrite($toFile, "General Evaluator ".$generalEvaluator." led the Evaluation Session.\n");
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
?>

</head>
<body class="w3-light-blue w3-center w3-animate-opacity">
<article>
  <div class="w3-blue" ng-app="minutesApp" ng-controller="minutesCtrl">
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="w3-light-blue" id="minutesApp"></div>
  <script src="reactOutput/minutesApp.js"></script>
  <input type="submit" class="w3-btn w3-ripple w3-white w3-hover-green" name="submit" value="Save"></input>
  </form>
  </div>
</article>
</body>