var app = angular.module('myApp', ['firebase', 'datatables']);
app.controller('myCtrl', function($scope,$firebaseObject) {
    $scope.text;
    var starCountRef = firebase.database().ref('student').orderByChild('std_id');
    // $scope.data = $firebaseObject(starCountRef); 
    // console.log($scope.data);
    $scope.get_student_list = function() {
        $scope.data = $firebaseObject(starCountRef);
    }
});
