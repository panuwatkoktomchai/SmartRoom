var app = angular.module('depart_app', ['firebase']);
app.controller('depart_Ctrl', function($scope, $firebaseObject) {
    var ls_fac = firebase.database().ref('depart');
    $scope.list_faculty;
    $scope.option_select_branch = $firebaseObject(ls_fac);
    $scope.branched;
    $scope.branch_for_select;
    $scope.branch;

    $scope.modelId;
    $scope.modelName;
    $scope.modelTell;
    $scope.modelBranch;
    $scope.modelGroup;
    
    $scope.linkSave = '';
    $scope.onSubmit = function(){// บันทึกข้อมูล
        var key = $scope.modelId.substring(0, 2); //ตัดเอาเฉพราะ 2 ตัวแรกข้างหน้า
        var grouptype = $scope.branch_for_select.branch[$scope.modelBranch].branch_type; // N or Q or R
        var group = $scope.branch_for_select.branch[$scope.modelBranch].short_name; //bis bac bmg bmk

        //บันทึกข้อมูลไปที่ คณะ สาขา กลุ่มผู้เรียน
        var save = firebase.database().ref('student/'+$scope.branched+'/'+$scope.modelBranch+'/'+group+grouptype+$scope.modelGroup+'('+key+')'+'/'+$scope.modelId).set({
            std_name:$scope.modelName,
            std_id:$scope.modelId,
            std_tell:$scope.modelTell,
            std_key:key
        });
        //end

        //บันทึกรายการกลุ่มผู้เรียนลง depart
        var pushStdGroup = firebase.database().ref('depart/'+$scope.branched+'/branch/'+$scope.modelBranch+'/group/'+group+grouptype+$scope.modelGroup+'('+key+')').set({
            name:group+grouptype+$scope.modelGroup+'('+key+')'
        })
        $scope.modelId = null;
        $scope.modelName = null;
        $scope.modelTell = null; 
    } 
    $scope.selected_branch = function(){
        $scope.branch_for_select = $scope.option_select_branch[$scope.branched];
        
    }
    $scope.formSelect = function(){
        $scope.list_faculty = $firebaseObject(ls_fac);
    }

    $scope.save_faculty = function(){ //บันทึกข้อมูล คณะ
        console.log($scope.faculty); 
        var refsave = firebase.database().ref('depart/'+$scope.faculty.id).set({
            faculty_faculty:$scope.faculty.faculty,
            faculty_id:$scope.faculty.id,
            faculty_level:$scope.faculty.level
        })     
        $scope.faculty = [];
    }
    $scope.set_firebase_branch = function(){
        var starCountRef = firebase.database().ref('depart/'+$scope.branch.faculty+'/branch/'+$scope.branch.id+'/').set({
            branch_id:$scope.branch.id,
            branch_branch:$scope.branch.branch,
            branch_type:$scope.branch.type,
            branch_faculty:$scope.branch.faculty,
            short_name:$scope.branch.short_name
        });
    }
    $scope.set_firebase_faculty = function(){
        var set_faculty = firebase.database().ref('depart/'+$scope.faculty.id).set({
            faculty_id:$scope.faculty.id,
            faculty_faculty:$scope.faculty.faculty,
            faculty_level:$scope.faculty.level
        });
    }

    $scope.data_edit_faculty=[];
    $scope.edit_faculty = function(id){
        console.log(id);
        var ref = firebase.database().ref('depart/'+id);
        $scope.data_edit_faculty=$firebaseObject(ref);
        console.log($scope.data_edit_faculty);
    }

    $scope.delete_faculty = function(id,name){
        if (confirm('การลบข้อมูลคณะ'+name+'นั้น จะทำให้ข้อมูลสาขาที่อยู่ในคณะ'+name+'ถูกลบไปด้วย คุณต้องการลบหรือไม่')) {
            var ref_delete = firebase.database().ref('depart/'+id).remove();
        }
    }
    
    $scope.delete_branch = function(f_id,b_id,b_name){
        console.log(f_id,b_id);
        if (confirm('คุณต้องการลบ '+b_name +' ออกจากฐานข้อมูลหรือไม่')) {
            var ref = firebase.database().ref('depart/'+f_id+'/branch/'+b_id).remove();
        }
    }

    $scope.data_edit_branch = [];
    $scope.edit_branch = function(f_id,b_id,b_name){
        console.log(b_id,b_name);
        var ref = firebase.database().ref('depart/'+f_id+'/branch/'+b_id);
        $scope.data_edit_branch = $firebaseObject(ref);
        console.log($scope.data_edit_branch);
        
    }
    
    $scope.update_branch = function(f_id,b_id,b_name){
        console.log(f_id,b_id,b_name);  
    }
    $scope.cancel_branch = function(){
        $scope.data_edit_branch=[];
    }

    $scope.move_branch = function(f_id,b_id,b_name,fm_id){
        console.log(f_id,b_id,b_name,fm_id);
        var ref_before = firebase.database().ref('depart/'+f_id+'/branch/'+b_id);
        $scope.before = $firebaseObject(ref_before);
    }
});