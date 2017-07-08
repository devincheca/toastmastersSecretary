<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <script src="https://www.w3schools.com/lib/w3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="minutes.js"></script>
</head>
<?php 
  $date = ($_GET["date"]);
  $sgtAtArms = ($_GET["sgtAtArms"]);
  $president = ($_GET["president"]);
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
  
  $today = date(DATE_W3C);
  $toFile = fopen($today,"w") or die("Unable to open file!");
  fwrite($toFile, "DREAMBUILDERS TOASTMATERS CLUB MINUTES for".$date."\n");// add all writes here
  fclose($toFile);
?>
<body class="w3-opacity w3-light-blue w3-center w3-padding">
<article>
  <div class="w3-light-green" ng-app="minutesApp" ng-controller="minutesCtrl">
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    DREAMBUILDERS TOASTMATERS CLUB MINUTES for
    <input ng-model="user.date" name="date" type="text" value="<?php echo $date; ?>"></br>
    6:58  Sgt. at Arms
    <input ng-model="user.sgtAtArms" name="sgtAtArms" type="text" value="<?php echo $sgtAtArms; ?>">
    announced a 2 minute warning.</br>
    7 PM  Sgt. at Arms
    <input ng-model="user.sgtAtArms" name="sgtAtArms" type="text" value="<?php echo $sgtAtArms; ?>">
    called the meeting to attention.  Acting President/Presiding Officer
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    called the meeting to order.
    </br>
    7:02
    <input ng-model="user.pledge" name="pledge" type="text" value="<?php echo $pledge; ?>">
    led the club in the Pledge of Allegiance.
    <input ng-model="user.pledgeNotes" name="pledgeNotes" type="text" value="<?php echo $pledgeNotes; ?>">
    </br>
    7:04  President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    welcomed members and guests,
    <input ng-model="user.guests" name="guests" type="text" value="<?php echo $guests; ?>">
    </br>
    During the business meeting,
    <input ng-model="user.businessNotes" name="businessNotes" type="text" value="<?php echo $businessNotes; ?>">
    </br>
    7:15  Toastmaster
    <input ng-model="user.toastmaster" name="toastmaster" type="text" value="<?php echo $toastmaster; ?>">
    was called to the lecturn. She made her opening comments and adjusted the agenda.
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
    In his/her report, General Evaluator
    <input ng-model="user.GEnotes" name="GEnotes" type="text" value="<?php echo $GEnotes; ?>">
    8:12   Toastmaster 
    <input ng-model="user.toastmaster" name="toastmaster" type="text" value="<?php echo $toastmaster; ?>">
    returned to the lecturn, made her closing comments and returned control to Acting President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">.</br>
    8:15    President
    <input ng-model="user.president" name="president" type="text" value="<?php echo $president; ?>">
    called on guests
    <input ng-model="user.guests" name="guests" type="text" value="<?php echo $guests; ?>">
    to give their impression of the meeting.</br>
    Notes:
    <input ng-model="user.notes" name="notes" type="text" value="<?php echo $notes; ?>"></br>
    Attendees were reminded to leave a tip for the servers. </br>
    8:18 Meeting adjourned.</br>
<input type="submit" class="w3-btn w3-ripple" name="submit" value="Submit"></input>
  </form>
  </div>
</article>
</body>