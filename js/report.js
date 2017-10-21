var Room = angular.module('report_room_app', ['firebase','datatables']);
Room.controller('report_room_Ctrl', function($scope, $firebaseObject) {
    $scope.get_Room = function(){
        var get_Room = firebase.database().ref('room/');
        $scope.room_data = $firebaseObject(get_Room);
        console.log($scope.room_data);
    }

    $scope.get_room = function(){
        $scope.roomid = window.location.search.substring(30);
        console.log($scope.roomid);
        var get_room = firebase.database().ref('room/'+$scope.roomid+'/');
        $scope.room_data = $firebaseObject(get_room);
        console.log($scope.room_data);
    }
});