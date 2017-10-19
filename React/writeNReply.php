<?php
  if ($_GET["attendees"] != "") 
  {
    if ($_GET["sgtAtArms"] == "") 
    { 
      "Cossette Strassberg"; 
    }
    if ($_GET["president"] == "") 
    { 
      "Joe Mamaradlo"; 
    }
    $toFile = fopen($_GET["date"], "w") or die("Unable to open file!");
    fwrite($toFile, "DREAMBUILDERS TOASTMASTERS CLUB MINUTES for ".$_GET["date"]."\n");
    fwrite($toFile, "Attendees: ".$_GET["attendees"]."\n");
    fwrite($toFile, "6:58  Sgt. at Arms, ".$_GET["sgtAtArms"]." announced a 2 minute warning.\n");
    fwrite($toFile, "7PM  Sgt. at Arms, ".$_GET["sgtAtArms"]." called the meeting to attention.  Acting President/Presiding Officer");
    fwrite($toFile, " ".$_GET["president"]." called the meeting to order.\n");
    fwrite($toFile, "7:02 ".$_GET["pledge"]." led the club in the Pledge of Allegiance.\n");
    fwrite($toFile, "".$_GET["pledgeNotes"]."\n");
    fwrite($toFile, "7:04  President, ".$_GET["president"].", welcomed members and guests, ".$_GET["guests"].".\n");
    fwrite($toFile, "During the business meeting, ".$_GET["businessNotes"]."\n");
    fwrite($toFile, "7:15  Toastmaster ".$_GET["toastmaster"]." was called to the lectern. He/She made his/her opening comments and adjusted the agenda.\n");
    fwrite($toFile, "7:20  General Evaluator ".$_GET["generalEvaluator"]." discussed his/her duties and called on his/her team of functionaries.\n");
    fwrite($toFile, "Grammarian: ".$_GET["grammarian"]."\n");
    fwrite($toFile, "Word of the Day: ".$_GET["wordOfTheDay"]."\n");
    fwrite($toFile, "Ah Counter: ".$_GET["ahCounter"]."\n");
    fwrite($toFile, "Timer: ".$_GET["timer"]."\n");
    fwrite($toFile, "7:28  Networking Session with Networking Master ".$_GET["networkMaster"]."\n");
    fwrite($toFile, "Respondent / Time\n");
    if ($_GET["respondent1"] !== "") { fwrite($toFile, "".$_GET["respondent1"]." / ".$_GET["respondent1Time"]."\n"); }
    if ($_GET["respondent2"] !== "") { fwrite($toFile, "".$_GET["respondent2"]." / ".$_GET["respondent2Time"]."\n"); }
    if ($_GET["respondent3"] !== "") { fwrite($toFile, "".$_GET["respondent3"]." / ".$_GET["respondent3Time"]."\n"); }
    if ($_GET["respondent4"] !== "") { fwrite($toFile, "".$_GET["respondent4"]." / ".$_GET["respondent4Time"]."\n"); }
    if ($_GET["respondent5"] !== "") { fwrite($toFile, "".$_GET["respondent5"]." / ".$_GET["respondent5Time"]."\n"); }
    fwrite($toFile, "7:48  Ten Minute Break\n");
    fwrite($toFile, "7:58  The meeting was called back into session.\n");
    fwrite($toFile, "8:05  Prepared Speech(es)\n");
    fwrite($toFile, "Speaker / Time\n");
    if ($_GET["speaker1"] !== "") { fwrite($toFile, "".$_GET["speaker1"]." / ".$_GET["speaker1Time"]."\n"); }
    if ($_GET["speaker2"] !== "") { fwrite($toFile, "".$_GET["speaker2"]." / ".$_GET["speaker2Time"]."\n"); }
    if ($_GET["speaker3"] !== "") { fwrite($toFile, "".$_GET["speaker3"]." / ".$_GET["speaker3Time"]."\n"); }
    if ($_GET["speaker4"] !== "") { fwrite($toFile, "".$_GET["speaker4"]." / ".$_GET["speaker4Time"]."\n"); }
    if ($_GET["speaker5"] !== "") { fwrite($toFile, "".$_GET["speaker5"]." / ".$_GET["speaker5Time"]."\n"); }
    fwrite($toFile, "8:09   Evaluation Session:\n");
    fwrite($toFile, "Evaluator / Time\n");
    if ($_GET["evaluator1"] !== "") { fwrite($toFile, "".$_GET["evaluator1"]." / ".$_GET["evaluator1Time"]."\n"); }
    if ($_GET["evaluator2"] !== "") { fwrite($toFile, "".$_GET["evaluator2"]." / ".$_GET["evaluator2Time"]."\n"); }
    if ($_GET["evaluator3"] !== "") { fwrite($toFile, "".$_GET["evaluator3"]." / ".$_GET["evaluator3Time"]."\n"); }
    if ($_GET["evaluator4"] !== "") { fwrite($toFile, "".$_GET["evaluator4"]." / ".$_GET["evaluator4Time"]."\n"); }
    if ($_GET["evaluator5"] !== "") { fwrite($toFile, "".$_GET["evaluator5"]." / ".$_GET["evaluator5Time"]."\n"); }
    fwrite($toFile, "General Evaluator ".$_GET["generalEvaluator"]." led the Evaluation Session.\n");
    fwrite($toFile, "Grammarian, ".$_GET["grammarian"].", noted use of the Word of the Day and Interesting Phrases.\n");
    fwrite($toFile, "Ah Counter, ".$_GET["ahCounter"].", noted use of ahs and uhs, etc.\n");
    fwrite($toFile, "Timer, ".$_GET["timer"].", reported the length of Time spoken by Networking Session Respondents, speaker(s) and evaluator(s).\n");
    fwrite($toFile, "In ".$_GET["generalEvaluator"]." report, ".$_GET["GEnotes"]."\n");
    fwrite($toFile, "8:12  Toastmaster ".$_GET["toastmaster"]." returned to the lectern, made his/her closing comments and returned control to Acting President, ".$_GET["president"].".\n");
    fwrite($toFile, "8:15  President, ".$_GET["president"].", called on guests ".$_GET["guests"]." to give their impression of the meeting.\n");
    fwrite($toFile, "Notes: ".$_GET["notes"]."\n");
    fwrite($toFile, "Attendees were reminded to leave a tip for the servers.\n8:18 Meeting adjourned.");
    fclose($toFile);
    echo "Minutes Logged On Server";
  }
  else
  {
    echo "Attendees are required to save.";
  }
  ?>

