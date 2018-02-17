var app = angular.module('app_subject',['firebase','datatables']);
app.controller('Ctrl_subject', function($scope,$firebaseObject){
    $scope.subject={
        id:'',
        name:''
    }
    $scope.save_subject = function(){
        if ($scope.subject.id=='' || $scope.subject.name=='' || $scope.subject.year == '' ||this.subject.term == '') {
            alert('กรุณากรอกข้อมูลให้ครบ');
            return false;
        }
        $scope.upload_subject();
    }

    $scope.upload_subject = function(){
        var d = new Date();
        var Refsubject = firebase.database().ref('subject/'+$scope.subject.year+'/'+$scope.subject.term+'/'+$scope.subject.id).set({
            id:$scope.subject.id,
            name:$scope.subject.name,
            term:$scope.subject.term,
            year:$scope.subject.year
        });
        $scope.subject = [];
        $scope.data_subject=[];
        $scope.get_subject();
    };


    $scope.selectYear;
    $scope.selectTerm;
    $scope.data_subject = [];
    var refY = firebase.database().ref("general/year");
    $scope.year = $firebaseObject(refY);
    var refT = firebase.database().ref("general/term");
    $scope.term = $firebaseObject(refT);

    $scope.get_subject = function(){
        var ref = firebase.database().ref("subject/"+$scope.selectYear+"/"+$scope.selectTerm);
        $scope.data_subject = $firebaseObject(ref);
        console.log($scope.selectTerm, $scope.selectYear);
        
    }

    $scope.delete_subject = function(id,name,year,term){
        if (confirm('คุณต้องการลบรายวิชา  '+name+'  หรือไม่')) {
            var ref_subject = firebase.database().ref('subject/'+year+'/'+term+'/'+id).remove();
            $scope.data_subject=[];
            $scope.get_subject();
        }
    }
    $scope.data_edit;
    var ref = firebase.database().ref();
    $scope.edit_subject = function(id){
        $scope.data_edit = id;
    }

    $scope.check_id = function(){
        angular.forEach($scope.data_subject,function(value,index){
            if (value.id == $scope.subject.id) {
                $scope.id= value.name;
            }
            if($scope.subject.id == ''){
                $scope.id = '';
            }
        });
    }

    $scope.update = function(id){
        var ref_update = firebase.database().ref('subject/'+id).update({
            name:$scope.data_edit.name
        });
        $scope.data_edit = [];
    }
});