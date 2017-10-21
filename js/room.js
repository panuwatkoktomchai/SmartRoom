var Room = angular.module('room_app', ['firebase','datatables']);
Room.controller('room_Ctrl', function($scope, $firebaseObject) {
    var get_r = firebase.database().ref('room');
    $scope.room=[];
    $scope.save_room = function(){
        var firebaseRef = firebase.database().ref("room/"+$scope.room.id).set({
            id:$scope.room.id,
            name:$scope.room.name,
            level:$scope.room.level,
            buil:$scope.room.building,
            status:"ยังไม่มีการใช้งาน"
        });
        $scope.room = [];
        console.log("save data success");
    }

    $scope.get_room = function(){
        $scope.roomdata = $firebaseObject(get_r);
        console.log($scope.roomdata);
    }
});
