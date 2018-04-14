<?php
  $_POST = json_decode(file_get_contents('php://input'), true);
  if ($_POST["attendees"] != "") 
  {
    foreach ($_POST as $value)
    {
      $value = str_replace("<","",$value);
      $value = str_replace(">","",$value);
      $value = str_replace("{","",$value);
      $value = str_replace("}","",$value);
      $value = str_replace("(","",$value);
      $value = str_replace(")","",$value);
      $value = str_replace("#","",$value);
      $value = str_replace("&","",$value);
    }
    $toFile = fopen($_POST["date"].".json", "w") or die("Unable to open file!");
    fwrite($toFile, file_get_contents('php://input'));
    fclose($toFile);
    if ($_POST["sgtAtArms"] == "")
    { 
      "Cossette Strassberg"; 
    }
    if ($_POST["president"] == "")
    { 
      "Joe Mamaradlo"; 
    }
    $toFile = fopen($_POST["date"].".txt", "w") or die("Unable to open file!");
    fwrite($toFile, "DREAMBUILDERS TOASTMASTERS CLUB MINUTES for ".$_POST["date"]."\n");
    fwrite($toFile, "Attendees: ".$_POST["attendees"]."\n");
    fwrite($toFile, "6:58  Sgt. at Arms, ".$_POST["sgtAtArms"]." announced a 2 minute warning.\n");
    fwrite($toFile, "Start Time:".$_POST["startTime"]."\n");
    fwrite($toFile, "Sgt. at Arms, ".$_POST["sgtAtArms"]." called the meeting to attention. Acting President/Presiding Officer");
    fwrite($toFile, " ".$_POST["president"]." called the meeting to order.\n");
    fwrite($toFile, "".$_POST["pledge"]." led the club in the Pledge of Allegiance.\n");
    fwrite($toFile, "".$_POST["pledgeNotes"]."\n");
    fwrite($toFile, "President, ".$_POST["president"].", welcomed members and guests, ".$_POST["guests"].".\n");
    fwrite($toFile, "During the business meeting, ".$_POST["businessNotes"]."\n");
    fwrite($toFile, "Toastmaster ".$_POST["toastmaster"]." was called to the lectern. He/She made his/her opening comments and adjusted the agenda.\n");
    fwrite($toFile, "General Evaluator ".$_POST["generalEvaluator"]." discussed his/her duties and called on his/her team of functionaries.\n");
    fwrite($toFile, "Grammarian: ".$_POST["grammarian"]."\n");
    fwrite($toFile, "Word of the Day: ".$_POST["wordOfTheDay"]."\n");
    fwrite($toFile, "Ah Counter: ".$_POST["ahCounter"]."\n");
    fwrite($toFile, "Timer: ".$_POST["timer"]."\n");
    fwrite($toFile, "Networking Session with Networking Master: ".$_POST["networkMaster"]."\n");
    fwrite($toFile, "Respondent / Time\n");
    if ($_POST["respondent1"] !== "") { fwrite($toFile, "".$_POST["respondent1"]." / ".$_POST["respondent1Time"]."\n"); }
    if ($_POST["respondent2"] !== "") { fwrite($toFile, "".$_POST["respondent2"]." / ".$_POST["respondent2Time"]."\n"); }
    if ($_POST["respondent3"] !== "") { fwrite($toFile, "".$_POST["respondent3"]." / ".$_POST["respondent3Time"]."\n"); }
    if ($_POST["respondent4"] !== "") { fwrite($toFile, "".$_POST["respondent4"]." / ".$_POST["respondent4Time"]."\n"); }
    if ($_POST["respondent5"] !== "") { fwrite($toFile, "".$_POST["respondent5"]." / ".$_POST["respondent5Time"]."\n"); }
    fwrite($toFile, "Ten Minute Break\n");
    fwrite($toFile, "Break Start Time:".$_POST["breakStart"]."\n");
    fwrite($toFile, "Break Return Time:".$_POST["breakReturn"]."\n");
    fwrite($toFile, "The meeting was called back into session.\n");
    fwrite($toFile, "Prepared Speech(es)\n");
    fwrite($toFile, "Speaker / Time\n");
    if ($_POST["speaker1"] !== "") { fwrite($toFile, "".$_POST["speaker1"]." / ".$_POST["speaker1Time"]."\n"); }
    if ($_POST["speaker2"] !== "") { fwrite($toFile, "".$_POST["speaker2"]." / ".$_POST["speaker2Time"]."\n"); }
    if ($_POST["speaker3"] !== "") { fwrite($toFile, "".$_POST["speaker3"]." / ".$_POST["speaker3Time"]."\n"); }
    if ($_POST["speaker4"] !== "") { fwrite($toFile, "".$_POST["speaker4"]." / ".$_POST["speaker4Time"]."\n"); }
    if ($_POST["speaker5"] !== "") { fwrite($toFile, "".$_POST["speaker5"]." / ".$_POST["speaker5Time"]."\n"); }
    fwrite($toFile, "Evaluation Session:\n");
    fwrite($toFile, "Evaluator / Time\n");
    if ($_POST["evaluator1"] !== "") { fwrite($toFile, "".$_POST["evaluator1"]." / ".$_POST["evaluator1Time"]."\n"); }
    if ($_POST["evaluator2"] !== "") { fwrite($toFile, "".$_POST["evaluator2"]." / ".$_POST["evaluator2Time"]."\n"); }
    if ($_POST["evaluator3"] !== "") { fwrite($toFile, "".$_POST["evaluator3"]." / ".$_POST["evaluator3Time"]."\n"); }
    if ($_POST["evaluator4"] !== "") { fwrite($toFile, "".$_POST["evaluator4"]." / ".$_POST["evaluator4Time"]."\n"); }
    if ($_POST["evaluator5"] !== "") { fwrite($toFile, "".$_POST["evaluator5"]." / ".$_POST["evaluator5Time"]."\n"); }
    fwrite($toFile, "General Evaluator ".$_POST["generalEvaluator"]." led the Evaluation Session.\n");
    fwrite($toFile, "Grammarian, ".$_POST["grammarian"].", noted use of the Word of the Day and Interesting Phrases.\n");
    fwrite($toFile, "Ah Counter, ".$_POST["ahCounter"].", noted use of ahs and uhs, etc.\n");
    fwrite($toFile, "Timer, ".$_POST["timer"].", reported the length of Time spoken by Networking Session Respondents, speaker(s) and evaluator(s).\n");
    fwrite($toFile, "In ".$_POST["generalEvaluator"]." report, ".$_POST["GEnotes"]."\n");
    fwrite($toFile, "Toastmaster ".$_POST["toastmaster"]." returned to the lectern, made his/her closing comments and returned control to Acting President, ".$_POST["president"].".\n");
    fwrite($toFile, "President, ".$_POST["president"].", called on guests ".$_POST["guests"]." to give their impression of the meeting.\n");
    fwrite($toFile, "Notes: ".$_POST["notes"]."\n");
    fwrite($toFile, "Attendees were reminded to leave a tip for the servers.\n Meeting adjourned.");
    fwrite($toFile, "End Time:".$_POST["endTime"]."\n");
    fclose($toFile);
    $toFile = fopen($_POST["date"].".html", "w") or die("Unable to open file!");
    fwrite($toFile,"<!DOCTYPE html>\n
    <html lang=\"en-US\">\n
    <meta charset=\"utf-8\"></meta>\n
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"></meta>\n
    <head>\n
      <!--[if lt IE 9]>\n
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script>\n
      <![endif]-->
      <title>".$_POST["date"]."</title>\n
      <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">\n
    </head>\n
    <body class=\"w3-pale-blue w3-large\">\n");
    fwrite($toFile,"<div class=\"\">\n");
    fwrite($toFile, "<div>DREAMBUILDERS TOASTMASTERS CLUB MINUTES for ".$_POST["date"]."</div>\n");
    fwrite($toFile, "<div>Attendees: ".$_POST["attendees"]."</div>\n");
    fwrite($toFile, "<div>6:58  Sgt. at Arms, ".$_POST["sgtAtArms"]." announced a 2 minute warning.</div>\n");
    fwrite($toFile, "<div>Start Time: ".$_POST["startTime"]."</div>\n");
    fwrite($toFile, "<div>Sgt. at Arms, ".$_POST["sgtAtArms"]." called the meeting to attention. Acting President/Presiding Officer");
    fwrite($toFile, " ".$_POST["president"]." called the meeting to order.</div>\n");
    fwrite($toFile, "<div>".$_POST["pledge"]." led the club in the Pledge of Allegiance.</div>\n");
    fwrite($toFile, "<div>".$_POST["pledgeNotes"]."</div>\n");
    fwrite($toFile, "<div>President, ".$_POST["president"].", welcomed members and guests, ".$_POST["guests"].".</div>\n");
    fwrite($toFile, "<div>During the business meeting, ".$_POST["businessNotes"]."</div>\n");
    fwrite($toFile, "<div>Toastmaster ".$_POST["toastmaster"]." was called to the lectern. He/She made his/her opening comments and adjusted the agenda.</div>\n");
    fwrite($toFile, "<div>General Evaluator ".$_POST["generalEvaluator"]." discussed his/her duties and called on his/her team of functionaries.</div>\n");
    fwrite($toFile, "<div>Grammarian: ".$_POST["grammarian"]."</div>\n");
    fwrite($toFile, "<div>Word of the Day: ".$_POST["wordOfTheDay"]."</div>\n");
    fwrite($toFile, "<div>Ah Counter: ".$_POST["ahCounter"]."</div>\n");
    fwrite($toFile, "<div>Timer: ".$_POST["timer"]."</div>\n");
    fwrite($toFile, "<div>Networking Session with Networking Master ".$_POST["networkMaster"]."</div>\n");
    fwrite($toFile, "<div>Respondent / Time</div>\n");
    if ($_POST["respondent1"] !== "") { fwrite($toFile, "<div>".$_POST["respondent1"]." / ".$_POST["respondent1Time"]."</div>\n"); }
    if ($_POST["respondent2"] !== "") { fwrite($toFile, "<div>".$_POST["respondent2"]." / ".$_POST["respondent2Time"]."</div>\n"); }
    if ($_POST["respondent3"] !== "") { fwrite($toFile, "<div>".$_POST["respondent3"]." / ".$_POST["respondent3Time"]."</div>\n"); }
    if ($_POST["respondent4"] !== "") { fwrite($toFile, "<div>".$_POST["respondent4"]." / ".$_POST["respondent4Time"]."</div>\n"); }
    if ($_POST["respondent5"] !== "") { fwrite($toFile, "<div>".$_POST["respondent5"]." / ".$_POST["respondent5Time"]."</div>\n"); }
    fwrite($toFile,"</div>\n");
    fwrite($toFile, "<div>Break Start Time: ".$_POST["breakStart"]."</div>\n");
    fwrite($toFile, "<div>Break Return Time: ".$_POST["breakReturn"]."</div>\n");
    fwrite($toFile, "<div>The meeting was called back into session.</div>\n");
    fwrite($toFile, "<div>Prepared Speech(es)</div>\n");
    fwrite($toFile, "<div>Speaker / Time\n");
    if ($_POST["speaker1"] !== "") { fwrite($toFile, "<div>".$_POST["speaker1"]." / ".$_POST["speaker1Time"]."</div>\n"); }
    if ($_POST["speaker2"] !== "") { fwrite($toFile, "<div>".$_POST["speaker2"]." / ".$_POST["speaker2Time"]."</div>\n"); }
    if ($_POST["speaker3"] !== "") { fwrite($toFile, "<div>".$_POST["speaker3"]." / ".$_POST["speaker3Time"]."</div>\n"); }
    if ($_POST["speaker4"] !== "") { fwrite($toFile, "<div>".$_POST["speaker4"]." / ".$_POST["speaker4Time"]."</div>\n"); }
    if ($_POST["speaker5"] !== "") { fwrite($toFile, "<div>".$_POST["speaker5"]." / ".$_POST["speaker5Time"]."</div>\n"); }
    fwrite($toFile,"</div>\n");
    fwrite($toFile, "<div>Evaluation Session:</div>\n");
    fwrite($toFile, "<div>Evaluator / Time\n");
    if ($_POST["evaluator1"] !== "") { fwrite($toFile, "<div>".$_POST["evaluator1"]." / ".$_POST["evaluator1Time"]."</div>\n"); }
    if ($_POST["evaluator2"] !== "") { fwrite($toFile, "<div>".$_POST["evaluator2"]." / ".$_POST["evaluator2Time"]."</div>\n"); }
    if ($_POST["evaluator3"] !== "") { fwrite($toFile, "<div>".$_POST["evaluator3"]." / ".$_POST["evaluator3Time"]."</div>\n"); }
    if ($_POST["evaluator4"] !== "") { fwrite($toFile, "<div>".$_POST["evaluator4"]." / ".$_POST["evaluator4Time"]."</div>\n"); }
    if ($_POST["evaluator5"] !== "") { fwrite($toFile, "<div>".$_POST["evaluator5"]." / ".$_POST["evaluator5Time"]."</div>\n"); }
    fwrite($toFile,"</div>\n");
    fwrite($toFile, "<div>General Evaluator ".$_POST["generalEvaluator"]." led the Evaluation Session.</div>\n");
    fwrite($toFile, "<div>Grammarian, ".$_POST["grammarian"].", noted use of the Word of the Day and Interesting Phrases.</div>\n");
    fwrite($toFile, "<div>Ah Counter, ".$_POST["ahCounter"].", noted use of ahs and uhs, etc.</div>\n");
    fwrite($toFile, "<div>Timer, ".$_POST["timer"].", reported the length of Time spoken by Networking Session Respondents, speaker(s) and evaluator(s).</div>\n");
    fwrite($toFile, "<div>In ".$_POST["generalEvaluator"]." report, ".$_POST["GEnotes"]."</div>\n");
    fwrite($toFile, "<div>Toastmaster ".$_POST["toastmaster"]." returned to the lectern, made his/her closing comments and returned control to Acting President, ".$_POST["president"].".</div>\n");
    fwrite($toFile, "<div>President, ".$_POST["president"].", called on guests ".$_POST["guests"]." to give their impression of the meeting.</div>\n");
    fwrite($toFile, "<div>Notes: ".$_POST["notes"]."</div>\n");
    fwrite($toFile, "<div>Attendees were reminded to leave a tip for the servers. \n Meeting adjourned.</div>\n");
    fwrite($toFile, "<div>End Time: ".$_POST["endTime"]."</div>\n");
    fwrite($toFile,"</div>\n</body>\n</html>");
    fclose($toFile);
    echo "Minutes Logged On Server";
  }
  else
  {
    echo "Attendees are required to save.";
  }
  function scrub ($toClean) { return htmlspecialchars($toFile); }
  ?>
