var user = angular.module('myuser', ['firebase','datatables']);

user.controller('userCtrl', function($scope, $firebaseObject ) {
    $scope.teacher=[];
    $scope.data_teacher=[];
    $scope.id=Date.now();
    $scope.edit_teacher=[];

    $scope.save_user = function(){
        console.log($scope.teacher);
        var firebaseRef = firebase.database().ref("teacher/"+$scope.teacher.user).set({
            id:$scope.teacher.user,
            email:$scope.teacher.email,
            tell:$scope.teacher.tell,
            name:$scope.teacher.name,
            branch:$scope.teacher.branch,
            faculty:$scope.teacher.faculty,
            level:$scope.teacher.level,
            username:$scope.teacher.user,
            password:$scope.teacher.pass,
            status:'off'
        });
        $scope.teacher = undefined;
    }
    $scope.get_user = function(){
        var firebaseRef = firebase.database().ref("teacher/");
        $scope.data_teacher = $firebaseObject(firebaseRef);
        console.log($scope.data_teacher);
    }
    $scope.edit_user = function(id){
        console.log(id)
        var firebaseRef = firebase.database().ref("teacher/"+id);
        $scope.edit_teacher = $firebaseObject(firebaseRef);
    }
    $scope.update_user = function(id){
        console.log($scope.edit_teacher);
        var firebaseRef = firebase.database().ref("teacher/"+id).update({
            name:$scope.edit_teacher.name,
            level:$scope.edit_teacher.level,
            branch:$scope.edit_teacher.branch,
            faculty:$scope.edit_teacher.faculty
        });
        $scope.edit_teacher = [];
    }

    $scope.delete_user = function(id,name){
        console.log(id,name);
        var ref_delete = firebase.database().ref('teacher/'+id).remove();
    }

});