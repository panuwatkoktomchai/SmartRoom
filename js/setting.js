var setting = angular.module('setting_app', ['firebase','datatables']);
setting.controller('setting_Ctrl', function($scope, $firebaseObject) {
    $scope.day=[];
    $scope.saveDay = function(){
        console.log($scope.day);
        var saveDay = firebase.database().ref('general/day/'+$scope.day.id).set($scope.day);
        $scope.day=[];
    }

    $scope.year;
    $scope.saveYear = function(){
        console.log($scope.year);
        var saveYear = firebase.database().ref('general/year/'+$scope.year).set({name:$scope.year})
        $scope.year='';
    }

    $scope.term=[];
    $scope.saveTerm = function(){
        console.log($scope.term);
        var saveTerm = firebase.database().ref('general/term/'+$scope.term.id).set({id:$scope.term.id,name:$scope.term.name})
    }
});