var wholeDate = Date() + "";
var month = wholeDate.substr(4,3);
var day = wholeDate.substr(8,2);
var year = wholeDate.substr(11,4);
var finalDate = month + " " + day + ", " + year;
var app = angular.module('minutesApp', []);
app.controller('minutesCtrl', function($scope) {
    $scope.master = {
      date: finalDate,
      sgtAtArms: "Cossette Strassberg",
      president: "Joe Mamaradlo",
      pledge: "",
      pledgeNotes: "",
      guests: "",
      businessNotes: "",
      toastmaster: "",
      generalEvaluator: "",
      grammarian: "",
      wordOfTheDay: "",
      ahCounter: "",
      timer: "",
      networkMaster: "",
      respondent1: "",
      respondent1Time: "",
      respondent2: "",
      respondent2Time: "",
      respondent3: "",
      respondent3Time: "",
      respondent4: "",
      respondent4Time: "",
      respondent5: "",
      respondent5Time: "",
      speaker1: "",
      speaker1Time: "",
      speaker2: "",
      speaker2Time: "",
      speaker3: "",
      speaker3Time: "",
      speaker4: "",
      speaker4Time: "",
      speaker5: "",
      speaker5Time: "",
      evaluator1: "",
      evaluator1Time: "",
      evaluator2: "",
      evaluator2Time: "",
      evaluator3: "",
      evaluator3Time: "",
      evaluator4: "",
      evaluator4Time: "",
      evaluator5: "",
      evaluator5Time: "",
      GEnotes: "",
      notes: ""
    };
    $scope.reset = function() {
        $scope.user = angular.copy($scope.master);
    };
    $scope.reset();
});