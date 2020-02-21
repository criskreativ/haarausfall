var app = angular.module('HaarausfallTest', []);

app.controller('MainController', ['$scope', function($scope) {
  $scope.data = {
    pagination: 1,
    answers: [],
    questions: [
      {
        title: 'Verlieren Sie derzeit mehr Haare als früher bzw. als in Ihrer Jugend?',
        answers: [
          'Nein, ich habe bislang keine Unterschiede festgestellt.',
          'Ja, manchmal habe ich den Eindruck, dass ich mehr Haare verliere.',
          'Ich verliere auf jeden Fall mehr Haare als in jungen Jahren.'
        ]
      },
      {
        title: 'Wie viele Haare fallen Ihnen im Moment am Tag aus?',
        answers: [
          'bis zu 80 ausgefallene Haare (visuell unauffällig)',
          'zwischen 80 und 100 ausgefallene Haare (gesteigertes Auffinden)',
          'über 100 ausgefallene Haare (ausgefallene Haare deutlich zu sehen)'
        ]
      },
      {
        title: 'Ist Haarausfall in Ihrer Verwandschaft weit verbreitet?',
        answers: [
          'Keiner meiner nahen Verwandten weist Haarverlust auf.',
          'Vereinzelt kommt starker Haarausfall vor (beim Vater, Bruder etc.).',
          'In meiner Familie ist die Glatze oder Halbglatze weit verbreitet.'
        ]
      },
      {
        title: 'Leidet oder litt Ihr Großvater mütterlicherseits unter Haarausfall?',
        answers: [
          'Er hat/hatte bis ins hohe Alter dichte Haare.',
          'Ihm sind erst im fortgeschrittenen Alter teilweise Haare ausgefallen.',
          'Mein Großvater mütterlicherseits hatte schon sehr früh eine Glatze/Halbglatze.'
        ]
      }
    ],
    results: [
      {
        minpoints: 0,
        title: 'Ihr Ergebnis!',
        text: 'Sie müssen sich in absehbarer Zeit keine Gedanken um Haarausfall machen. Weder verlieren Sie derzeit besonders viele Haare, noch sind Sie in Ihrer Familie derartige Veranlagungen bekannt, dass in jungen Jahren schon Haarausfall drohen könnte.'
      },
      {
        minpoints: 3,
        title: 'Ihr Ergebnis!',
        text: 'Bei Ihnen scheint sich ein hormonell-erblich bedingter Haarausfall zu entwickeln, es gibt bereits einen deutlichen Haarausfall. Ihre Haarfollikel sind besonders empfindlich dem männlichen Geschlechtshormon gegenüber, was wiederum zu Haarausfall führt. Sie können den hormonell-erblich bedingten Haarausfall mit Alfatradiol versuchen zu stoppen, je eher Sie die Therapie beginnen desto besser sind die Erfolgsaussichten.'
      },
    ]
  };

  $scope.getResult = function(){
    var points = $scope.data.answers.reduce(function(a,b){return parseInt(a) + parseInt(b)});
    var result = 0;
    for(var i=0;i<$scope.data.results.length;i++){
      var res = $scope.data.results[i];
      if(res.minpoints <= points){
        result = i;
      }
    }
    return result;
  }

  $scope.next = function(){
    var pag = $scope.data.pagination + 1;
    $scope.data.pagination = Math.min(pag,$scope.data.questions.length + 1);
  }
  $scope.prev = function(){
    var pag = $scope.data.pagination - 1;
    $scope.data.pagination = Math.max(pag,1);
  }
}]);
