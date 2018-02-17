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
        <p>อักษรย่อสาขา<input ng-model="branch.short_name"  class="w3-input w3-border w3-hover-blue" type="text"></p>
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
        <p class="w3-hover-gray">
            <span style="font-size:18pt">
                [ {{$index+1}} ]. {{Fvalue.faculty_id}}||{{ Fvalue.faculty_faculty }}
            </span>
            <button ng-click="delete_faculty(Fvalue.faculty_id,Fvalue.faculty_faculty)" class="w3-button w3-circle w3-red w3-right w3-padding-small">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
            <button ng-click="edit_faculty(Fvalue.faculty_id)" class="w3-button w3-circle w3-yellow w3-right w3-padding-small">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </button>
        </p>


        <ul ng-repeat="item in Fvalue.branch" class="w3-ul w3-border">
            <li class="w3-hover-gray">
                <button ng-disabled="data_edit_branch.branch_id == item.branch_id" ng-click="delete_branch(Fvalue.faculty_id,item.branch_id,item.branch_branch)" class="w3-button w3-circle w3-red w3-padding-small">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
                <button ng-disabled="data_edit_branch.branch_id == item.branch_id" ng-click="edit_branch(Fvalue.faculty_id,item.branch_id,item.branch_branch)" class="w3-button w3-circle w3-yellow w3-padding-small">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <div class="w3-dropdown-hover">
                    <button ng-disabled="data_edit_branch.branch_id == item.branch_id" class="w3-button w3-circle w3-blue w3-padding-small">
                        <i class="fa fa-reply-all" aria-hidden="true"></i>
                    </button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a class="w3-bar-item w3-button w3-border" ng-repeat="(FMkey, FMvalue) in list_faculty" ng-click="move_branch(Fvalue.faculty_id,item.branch_id,item.branch_branch,FMvalue.faculty_id)">{{ FMvalue.faculty_faculty }}</a>
                        
                    </div>
                </div>
                [{{$index +1}}].{{item.branch_id}} || {{ item.branch_branch }} ({{item.branch_type}}) [{{item.short_name}}]
            </li>
            <li ng-if="data_edit_branch.branch_id == item.branch_id" class="w3-animate-opacity">
                <input type="text" class="w3-input w3-border" ng-model="data_edit_branch.branch_branch">
                <input type="text" class="w3-input w3-border" ng-model="data_edit_branch.short_name">
                <select class="w3-select" ng-model="data_edit_branch.branch_type">
                    <option value="ปกติ">ปกติ</option>
                    <option value="เทียบโอน">เทียบโอน</option>
                    <option value="เทียบโอน">ต่อเนื่อง</option>
                </select>
                <button ng-click="update_branch(Fvalue.faculty_id,item.branch_id,item.branch_branch)" class="w3-button w3-yellow">อัพเดท</button>
                <button ng-click="cancel_branch()" class="w3-button w3-orange">ยกเลิก</button>
            </li>
        </ul>
    </div>
</div>
