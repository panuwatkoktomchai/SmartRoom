var app = angular.module('depart_app', ['firebase']);
app.controller('depart_Ctrl', function($scope, $firebaseObject) {
    var ls_fac = firebase.database().ref('depart');
    $scope.list_faculty;
    $scope.option_select_branch = $firebaseObject(ls_fac);
    $scope.branched;
    $scope.branch_for_select;
    $scope.selected_branch = function(){
        $scope.branch_for_select = $scope.option_select_branch[$scope.branched];
    }
    $scope.formSelect = function(){
        $scope.list_faculty = $firebaseObject(ls_fac);
    }
    $scope.faculty=[];
    $scope.branch=[];

    $scope.save_branch = function() {
        if ($scope.branch==[]) {
            confirm("please enter value to form");
        }
        console.log($scope.branch);
        $scope.set_firebase_branch();
        $scope.branch=[];
    }
    $scope.save_faculty = function(){
        console.log($scope.faculty);
        $scope.set_firebase_faculty();
        $scope.faculty=[];
    }
    $scope.set_firebase_branch = function(){
        var starCountRef = firebase.database().ref('depart/'+$scope.branch.faculty+'/branch/'+$scope.branch.id+'/').set({
            branch_id:$scope.branch.id,
            branch_branch:$scope.branch.branch,
            branch_type:$scope.branch.type,
            branch_faculty:$scope.branch.faculty
        });
    }
    $scope.set_firebase_faculty = function(){
        var set_faculty = firebase.database().ref('depart/'+$scope.faculty.id).set({
            faculty_id:$scope.faculty.id,
            faculty_faculty:$scope.faculty.faculty,
            faculty_level:$scope.faculty.level
        });
    }
})