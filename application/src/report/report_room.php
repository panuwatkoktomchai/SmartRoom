<script src="js/report.js"></script>
<div class="w3-card w3-white" ng-app="report_room_app" ng-controller="report_room_Ctrl" ng-init="get_room()">
    <div>
        <header class="w3-container" style="padding-top:22px">
            <h1><b><i class="fa fa-cog"></i> ห้อง {{room_data.name }}</b></h1>
            <p><strong>ห้องเรียน || ClassRoom </strong></p>
        </header>
    </div>
    <div class="w3-container">
        <div>
        <span>อาจารย์ผู้สอน {{ room_data.teacher.name }}</span>
        </div>
    </div>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <thead>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td>ชื่อ - นามสกุล</td>
                <td>เวลาเข้า</td>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="(key,value) in room_data.students">
                <td>{{ value.id}}</td>
                <td>{{ value.name}}</td>
                <td>{{ value.timein}}</td>
            </tr>    
        </tbody>
    </table>
</div>
