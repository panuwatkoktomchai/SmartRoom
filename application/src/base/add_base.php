<script src="js/department.js"></script>
<div ng-app="depart_app" ng-controller="depart_Ctrl">
<h1>เพิ่มข้อมูลนักศึกษา</h1>
<p> <strong>จัดการฐานข้อมูล ||</strong> <a href="?id=base/base_students">ตารางข้อมูลนักศึกษา </a> || เพิ่มข้อมูลนักศึกษา</p>
<a href="?id=base/base_students" class = "w3-button w3-blue w3-right">ย้อนกลับ</a>
<!-- <form action="application/src/sql/sqlAddbase.php" method="POST"> -->
<button class="w3-button w3-green" ng-click = "onSubmit()">บันทีกข้อมูล</button><br>
    <div class="w3-col m6 l6 w3-container">
            <p>รหัสนักศึกษา</p>
            <p><input class="w3-input w3-hover-blue" type="text" ng-model="modelId"></p>
            <p>ชื่อ - นามสกุล</p>
            <p><input class="w3-input w3-border w3-hover-blue" type="text" ng-model="modelName"></p>
            <p>เบอร์โทร</p>
            <p><input class="w3-input w3-border w3-hover-blue" type="text" ng-model="modelTell"></p>
    </div>
    <div class="w3-col m6 l6 w3-container">
        <p>คณะ</p>
        <select ng-init="formSelect()" class="w3-select" ng-model="branched" name="branch" id="std_faculty" ng-selected="selected_branch()">
        <option value="" disabled selected>เลือกคณะ</option>
        <option ng-repeat="(Fkey,Fvalue) in list_faculty" value="{{Fvalue.faculty_id}}">{{ Fvalue.faculty_faculty }}[{{Fvalue.faculty_level}} ] </option>
        </select>
        <p>สาขา</p>
        <select class="w3-select" name="faculty" ng-model="modelBranch" ng-selected = "selectBranch()">
        <option value="" disabled selected>เลือกสาขา</option>
        <option  ng-repeat="(Bkey, Bvalue) in branch_for_select.branch" value="{{ Bvalue.branch_id}}">{{ Bvalue.branch_branch }}[ {{Bvalue.branch_type}} ]</option>
        </select>
        <p>กลุ่มนักศึกษา (ห้อง)</p>
        <input class="w3-input" type="number" name="group" ng-model="modelGroup">
    </div>
</div>
<!-- </form> -->