<script src="js/department.js"></script>
<div class=" w3-white w3-margin" ng-app ="depart_app" ng-controller="depart_Ctrl">
    <header class="w3-container" style="padding-top:22px">
        <h1><b><i class="fa fa-cog"></i>  ตั้งค่าคณะและสาขา</b></h1>
        <p><strong>คณะและสาขา || ClassRoom </strong></p>
        
    </header>
    <form class="w3-container">
    <div class="w3-col m6 w3-container">
        <p><a class="w3-button w3-green" ng-click="save_faculty()">เพิ่มคณะ</a></p>
        <p>รหัสคณะ<input ng-model="faculty.id"  class="w3-input w3-border w3-hover-blue" type="text"></p>
        <p>ชื่อคณะ<input ng-model="faculty.faculty" class="w3-input w3-border w3-hover-blue" type="text"></p>
        <p>ระดับการศึกษา<input ng-model="faculty.level" class="w3-input w3-border w3-hover-blue" type="text"></p>
    </div>
    <div class="w3-col m6 w3-container">
        <p><a class="w3-button w3-green" ng-click="save_branch()">เพิ่มสาขา</a></p>
        <p>รหัสสาขา<input ng-model="branch.id"  class="w3-input w3-border w3-hover-blue" type="text"></p>
        <p>ชื่อสาขา<input ng-model="branch.branch" class="w3-input w3-border w3-hover-blue" type="text"></p>
        <p>หลักสูตร
        <select class="w3-select" ng-model="branch.type">
            <option value="" disabled selected>เลือกหลักสูตร</option>
            <option value="ปกติ">ปกติ</option>
            <option value="เทียบโอน">เทียบโอน</option>
            <option value="เทียบโอน">ต่อเนื่อง</option>
        </select>
        </p>
        <p>คณะ
        <select class="w3-select" ng-model="branch.faculty" ng-init="formSelect()">
            <option value="" disabled selected>เลือกคณะ</option>
            <option ng-repeat="(key,value) in list_faculty" value="{{ value.faculty_id }}">{{ value.faculty_faculty }}</option>
        </select>
        </p>
    </div>
    </form>

    <div ng-repeat="(Fkey, Fvalue) in list_faculty" class="w3-container">
        <h2>[ {{$index+1}} ]. {{Fvalue.faculty_id}}||{{ Fvalue.faculty_faculty }}</h2>

        <ul ng-repeat="item in Fvalue.branch" class="w3-ul w3-border">
            <li>[{{$index +1}}].{{item.branch_id}} || {{ item.branch_branch }}</li>
        </ul>
    </div>
</div>
