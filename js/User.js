var user = angular.module('myuser', ['firebase','datatables']);
user.controller('userCtrl', function($scope, $firebaseObject) {
    $scope.teacher=[];
    $scope.data_teacher=[];
    $scope.id=Date.now();
    $scope.save_user = function(){
        console.log($scope.teacher);
        var firebaseRef = firebase.database().ref("teacher/"+$scope.id).set({
            id:$scope.id,
            name:$scope.teacher.name,
            branch:$scope.teacher.branch,
            faculty:$scope.teacher.faculty,
            level:$scope.teacher.level,
        });
        $scope.teacher = undefined;
    }
    $scope.get_user = function(){
        var firebaseRef = firebase.database().ref("teacher/");
        $scope.data_teacher = $firebaseObject(firebaseRef);
        console.log($scope.data_teacher);
    }
});