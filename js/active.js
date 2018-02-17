var app = angular.module('active_app', ['firebase','datatables']);
app.controller('active_Ctrl', function($scope, $firebaseObject) {
    $scope.active=[];
    $scope.data_active=[];
    $scope.save_active = function(){
        if ($scope.active.id==undefined||$scope.active.name==undefined||$scope.active.time==undefined) {
            confirm("กรุณากรอกข้อมูลให้ครบ");
            return false;
        }
        console.log($scope.active);
        var firebaseRef = firebase.database().ref("activites/"+$scope.active.id).set({
            active_id:$scope.active.id,
            active_name:$scope.active.name,
            active_time:new Date($scope.active.time).getTime(),
            active_des:$scope.active.des,
            status:'off'
        });
        $scope.active=[];
    }
    $scope.get_active = function(){
        var get_ac = firebase.database().ref('activites/');
        $scope.data_active = $firebaseObject(get_ac);
        // console.log($scope.data_active);
    }

    $scope.property_active = function(){
        $scope.active_id = window.location.search.substring(34);
        console.log($scope.active_id);
    }
    $scope.open_active = function(id){
        var firebaseRef = firebase.database().ref("activites/"+id+'/').update({
            status:'on'
        });
    }
    $scope.report_active = function(){
        var get_ac = firebase.database().ref('activites/');
        $scope.reportActive = $firebaseObject(get_ac);
        console.log($scope.reportActive);
    }
    $scope.detail_acitve = function(){
        var active_id = window.location.search.substring(30);
        var get_ac = firebase.database().ref('activites/'+active_id+'/');
        $scope.data_detail = $firebaseObject(get_ac);
        console.log($scope.data_detail);
    }
});