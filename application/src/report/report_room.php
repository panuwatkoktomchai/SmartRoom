<script src="js/report.js"></script>
<div class="w3-card w3-white" ng-app="report_room_app" ng-controller="report_room_Ctrl" ng-init="get_room()">
    <div>
        <header class="w3-container" style="padding-top:22px">
            <h1><b><i class="fa fa-cog"></i> ห้อง {{room_detail.name }}</b></h1>
            <p><strong>รายงานห้องเรียน || Class room - report </strong></p>
        </header>
    </div>
    <div class="w3-container" ng-init="room_report()">
        <div>
        <span>{{ teacher_detail.name}} เปิดใช้ห้องเวลา {{time_open | date:'medium'}}</span>
        <!-- <span>อาจารย์ผู้สอน {{ room_data.teacher.name }}</span> -->
        </div>
    </div>
    <table ng-init="data_students()" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <thead>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td>ชื่อ - นามสกุล</td>
                <td>เวลาเข้า</td>
            </tr>
        </thead>
        <tbody>
        <!-- หาสาเหตว่าทำไม ข้อมูลไม่ขึ้นตาราง  รูปแล้ว มันผ่านวันที่ 17 ไปแล้ว -->
            <tr ng-repeat="(key,value) in student">
                <td>{{ value.id}}</td>
                <td>{{ value.detail_std .std_name}}</td>
                <td>{{ value.time | date:'วันที่ d/M/yyyy เวลา h:mm a'}}</td>
            </tr>    
        </tbody>
    </table>
    <button ng-click="getTime()">time</button>
</div>
