var app = angular.module('myApp', ['firebase', 'datatables']);
app.controller('myCtrl', function($scope, $firebaseObject) {
    
    var starCountRef = firebase.database().ref('student').orderByChild('std_id'); 
    $scope.text;
    $scope.student=[]
    $scope.data_std=[];

    $scope.modelFaculty;
    $scope.modelBranch;
    $scope.modelGroup;
    // ข้อมูลรายการคณะสำหรับช่อง select
    $scope.selectFac = '';
    $scope.get_select_facult = function(){
        var refFac = firebase.database().ref('depart/');
        $scope.selectFac = $firebaseObject(refFac);
    }
    
    $scope.selectBra;
    $scope.get_select_branch = function(){
        $scope.selectBra = $scope.selectFac[$scope.modelFaculty].branch;
    }

    $scope.selectGr;
    $scope.get_select_group = function(){
        $scope.selectGr = $scope.selectFac[$scope.modelFaculty].branch[$scope.modelBranch].group;
    }

    $scope.get_student_list = function() {
        $scope.data_std = $firebaseObject(starCountRef);
        var ref_faculty =firebase.database().ref('depart/');
        $scope.depart = $firebaseObject(ref_faculty);
        console.log($scope.depart);
    }

    $scope.secrching = function(){
        console.log('ok')
        var ref = firebase.database().ref('student/'+$scope.modelFaculty+
        '/'+$scope.modelBranch+'/'+$scope.modelGroup);
        $scope.data_std = $firebaseObject(ref);
    }




    $scope.remove = function(id){
        console.log(id);
        if (confirm("ยืนยันการลบข้อมูล")) {
            var std = firebase.database().ref('student/'+id).remove();
            console.log("remove success");
        }
        
    }
    $scope.std_edit=[];
    $scope.newstd=[];
    $scope.list_branch=[];
    $scope.edit = function(id){
       $scope.std_edit.std_id = id;
       $scope.std_edit.std_name = $scope.data_std[id].std_name;
    }
    
    $scope.set_branch = function(){
        var ls_fac = firebase.database().ref('depart/'+$scope.newstd.fac+'/branch');//link รับคณะและสาขา
        $scope.list_branch = $firebaseObject(ls_fac);//กำหนดตัวแปรคณะ
        
    }
    $scope.cancel=function(){
        $scope.std_edit=[];
    }
    
    
    $scope.update = function(std_id){
        var datetime = new Date();
        var lastUpdate = datetime.getTime();
        if ($scope.newstd.fac && $scope.newstd.bra) {
            var updateStd = firebase.database().ref('student/'+std_id).set({
                std_id:std_id,
                std_name:$scope.std_edit.std_name,
                std_tell:$scope.std_edit.std_tell,
                std_branch:$scope.newstd.bra,
                std_faculty:$scope.newstd.fac,
                std_date:lastUpdate 
            });
            $scope.std_edit=[];
        }else{
            alert("กรุณาเลือกคณะและสาขา");
        }
    }
 
});
