<script src="js/insert_student.js"></script>
<script src="js/department.js"></script>
<h1>เพิ่มข้อมูลนักศึกษา</h1>
<p> <strong>จัดการฐานข้อมูล ||</strong> <a href="?id=base/base_students">ตารางข้อมูลนักศึกษา </a> || เพิ่มข้อมูลนักศึกษา</p>
<a href="?id=base/base_students" class = "w3-button w3-blue w3-right">ย้อนกลับ</a>
<!-- <form action="application/src/sql/sqlAddbase.php" method="POST"> -->
<button class="w3-button w3-green" onclick="onsubmite()">บันทีกข้อมูล</button><br>
    <div class="w3-col m6 l6 w3-container">
            <p>รหัสนักศึกษา</p>
            <p><input class="w3-input w3-hover-blue" type="text" name="id_student" id="std_id"></p>
            <p>ชื่อ - นามสกุล</p>
            <p><input class="w3-input w3-border w3-hover-blue" type="text" name="name" id="std_name"></p>
            <p>เบอร์โทร</p>
            <p><input class="w3-input w3-border w3-hover-blue" type="text" name="tell" id="std_tell"></p>
    </div>
    <div class="w3-col m6 l6 w3-container" ng-app="depart_app" ng-controller="depart_Ctrl">
        <p>คณะ</p>
        <select ng-init="formSelect()" class="w3-select" ng-model="branched" name="branch" id="std_branch" ng-selected="selected_branch()">
        <option value="" disabled selected>เลือกคณะ</option>
        <option ng-repeat="(Fkey,Fvalue) in list_faculty" value="{{Fvalue.faculty_id}}">{{ Fvalue.faculty_faculty }}</option>
        </select>
        <p>สาขา</p>
        <select class="w3-select" name="faculty" id="std_faculty">
        <option value="" disabled selected>เลือกสาขา</option>
        <option  ng-repeat="(Bkey, Bvalue) in branch_for_select.branch" value="{{ Bvalue.branch_id}}">{{ Bvalue.branch_branch }}</option>
        </select>
    </div>
<!-- </form> -->