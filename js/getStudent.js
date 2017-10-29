var app = angular.module('myApp', ['firebase', 'datatables']);
app.controller('myCtrl', function($scope, $firebaseObject) {
    $scope.text;
    var starCountRef = firebase.database().ref('student').orderByChild('std_id');

    $scope.get_student_list = function() {
        $scope.data = $firebaseObject(starCountRef);
    }
    $scope.remove = function(id){
        console.log(id);
        if (confirm("ยืนยันการลบข้อมูล")) {
            var std = firebase.database().ref('student/'+id).remove();
            console.log("remove success");
        }
        
    }
    $scope.std_edit=[];
    $scope.faculty=[];
    $scope.list_branch=[];
    $scope.edit = function(id){
        var stdedit = firebase.database().ref('student/'+id);
        $scope.std_edit = $firebaseObject(stdedit);
        console.log("edit");
        var ls_fac = firebase.database().ref('depart');//link รับคณะและสาขา
        $scope.list_faculty = $firebaseObject(ls_fac);//กำหนดตัวแปรคณะ
        console.log("set faculty");
        $scope.faculty=[];
    }
    
    $scope.set_branch = function(){
        var ls_fac = firebase.database().ref('depart/'+$scope.faculty.fac+'/branch');//link รับคณะและสาขา
        $scope.list_branch = $firebaseObject(ls_fac);//กำหนดตัวแปรคณะ
        
    }
    $scope.cancel=function(){
        $scope.std_edit=[];
    }
    
    
    $scope.update = function(){
        console.log($scope.std_edit.std_name);
        console.log($scope.faculty.fac);
        console.log($scope.faculty.bra);
        if ($scope.faculty.fac && $scope.faculty.bra) {
            alert("บันทึกเรียบร้อยแล้ว");
        }else{
            alert("กรุณาเลือกคณะและสาขา");
        }
    }
 
});
