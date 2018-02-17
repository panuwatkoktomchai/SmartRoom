var Room = angular.module('report_room_app', ['firebase','datatables']);
Room.controller('report_room_Ctrl', function($scope, $firebaseObject) {
    $scope.detail_room=[];
    $scope.mystyle={
        'background-color':'green'
    }
    $scope.get_Room = function(){
        var get_Room = firebase.database().ref('room/');
        var teacher_open_room_Ref = firebase.database().ref('room/');
        $scope.room_data = $firebaseObject(get_Room);
        $scope.room_data.$loaded()
            .then(function(data){
                data.forEach(function(value,index){
                    if (value.status == 'on') { //เริ่มเช็คสถานะ ถ้าห้องเปิดค้างไว้ เพื่อตรวจสอบวันที่
                        console.log('on');
                        var D = new Date(value.checkin);
                        var N = new Date().getDate();
                        console.log('D',D.getDate());
                        console.log('N',N);
                        
                    }
                    $scope.detail_room.push(value);
                });
                // console.log($scope.detail_room);
            })
            .catch(function(error){

            });
    }

    $scope.updateStatus_room = function(id){
        var refUpdate = firebase.database().ref('room/'+id).update({
            status:'off',
            detail:'ยังไม่มีการใช้งาน'
        });
        
    }

    $scope.teacher_id
    $scope.room_report = function(){
        // get id room last From
        $scope.roomid = window.location.search.substring(30);
        // console.log($scope.roomid);

        // get teacher room 
        var get_teacherRef = firebase.database().ref('room/'+$scope.roomid+'/history/').limitToLast(1);
        $scope.room_data = $firebaseObject(get_teacherRef);
        $scope.room_data.$loaded()
            .then(function(data){
                $scope.room_data.forEach(function(value,index) {
                    $scope.get_teacher_detail(value.teacher,value.time);
                }, this);
            })
            .catch(function(error){
                // console.log("Error" , error);
            });
        

        // get detail room
        var get_roomRef = firebase.database().ref('room/'+$scope.roomid);
        $scope.room_detail = $firebaseObject(get_roomRef);
    }

    $scope.teacher_detail = [];
    $scope.time_open;
    $scope.list_student=[];
    $scope.get_teacher_detail = function(id,time){
        $scope.time_open=time;
        var detail_teacherRef = firebase.database().ref('teacher/'+id);
        $scope.teacher_detail = $firebaseObject(detail_teacherRef);
        var list_studentRef = firebase.database().ref('history_scan/')
        $scope.list_student = $firebaseObject(list_studentRef);
        // console.log($scope.list_student);
    }

    $scope.getTime =function(){
        var d = new Date()
        console.log(d.getTime());

    }
    
    $scope.data_students=[];
    $scope.student=[];
    $scope.data_students = function(){
        var time = new Date()
        var stdRef = firebase.database().ref('history/'+time.getDate($scope.time_open)+'-'+(time.getMonth($scope.time_open)+1)+'-'+time.getFullYear($scope.time_open));
        $scope.data_students = $firebaseObject(stdRef);
        // console.log($scope.data_students);

        // get name from (data_students.name)
        $scope.data_students.$loaded()
            .then(function(data){
                var i = 0;
                data.forEach(function(value,index){
                    var Ref_get_std = firebase.database().ref('student/'+value.id);
                    var detail_std = $firebaseObject(Ref_get_std);
                    console.log(detail_std);
                    $scope.student.push(
                        {'id':value.id,'time':value.time,detail_std}   
                    );
                    console.log($scope.student);
                });
            })
            .catch(function(error){

            });
        
    }

});