<script src="js/getStudent.js"></script>
<div ng-app="myApp" ng-controller="myCtrl">
    <h1>จัดการฐานข้อมูลนักศึกษา</h1>
    <p> <strong>ตารางข้อมูลนักศึกษา ||</strong> student info</p>
    <p><a class="w3-button w3-dark-grey" href="?id=base/add_base" >เพิ่มข้อมูลนักศึกษา <i class="fa fa-arrow-right"></i></a></p>
    <table ng-init="get_student_list()" datatable="ng" id="student_base"  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" weight="100%">
        <thead>
                <tr>
                <th>ที่</th>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อ-นามสกุล</th>
                <th>เบอร์</th>
                <th>สาขา</th>
                <th>คณะ</th>
                <th>วันที่</th>
                </tr>
            </thead>
            <tbody>
                <tr class="w3-animate-opacity" ng-repeat="(key,value) in data">
                    <td>{{ $index+1 }}</td>
                    <td>{{ value.std_id }}</td>
                    <td>{{ value.std_name }}</td>
                    <td>{{ value.std_tell }}</td>
                    <td>{{ value.std_branch }}</td>
                    <td>{{ value.std_faculty }}</td>
                    <td>{{ value.std_date }}</td>
                </tr>
            </tbody>
        </table>
</div>
