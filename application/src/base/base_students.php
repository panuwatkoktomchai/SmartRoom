<script src="js/getStudent.js"></script>
<div ng-app="myApp" ng-controller="myCtrl">
    <h1>จัดการฐานข้อมูลนักศึกษา</h1>
    <p> <strong>ตารางข้อมูลนักศึกษา ||</strong> student info</p>
    <p><a class="w3-button w3-green" href="?id=base/add_base" >เพิ่มข้อมูลนักศึกษา <i class="fa fa-arrow-right"></i></a></p>
    
    <p ng-init="get_select_facult()">
        <label for="">เลือกคณะ</label>
        <select class="w3-select" ng-model="modelFaculty" ng-change="get_select_branch()">
            <option ng-repeat="item in selectFac" value="{{item.faculty_id}}">{{item.faculty_faculty}}</option>
        </select>
    </p>
    <p>
        <label for="">เลือกสาขา</label>
        <select class="w3-select" ng-model="modelBranch" ng-change="get_select_group()">
            <option ng-repeat="item in selectBra" value="{{item.branch_id}}">{{item.branch_branch}}</option>
        </select>
    </p>
    <p>
        <label for="">กลุ่มนักศึกษา</label>
        <select class="w3-input" ng-model="modelGroup">
            <option ng-repeat="item in selectGr" value="{{item.id}}">{{item.name}}</option>
        </select>
    </p>
    <p>
        <button ng-click="secrching()" class="w3-button w3-blue">ค้นหาข้อมูล</button>
    </p>
    <table datatable="ng" id="student_base"  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" weight="100%">
        <thead>
                <tr>
                <th>ที่</th>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อ-นามสกุล</th>
                <th>จัดการ</th>
                </tr>
        </thead>
            <tbody>
                <tr class="w3-animate-opacity" ng-repeat="(key,value) in data_std">
                    <td>{{ $index+1 }} 
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id" ng-show="edit">
                            <button class="w3-button w3-green w3-hover-yellow" ng-click="update(value.std_id)">อัพเดท</button>
                        </p>
                    </td>
                    <td>{{ value.std_id }} 
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <input class="w3-input" type="text" disabled ng-model="std_edit.std_id">
                        </p>
                    </td>
                    <td>{{ value.std_name }}
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <input class="w3-input" type="text" ng-model="std_edit.std_name">
                        </p>  
                    </td>
                    <td>
                        <button ng-hide = "std_edit.std_id==value.std_id" class="w3-button w3-orange"ng-click="edit(value.std_id)" ><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                        <button ng-hide = "std_edit.std_id==value.std_id" class="w3-button w3-red" ng-click="remove(value.std_id)"><i class="fa fa-trash" aria-hidden="true"></i></button>  
                        <br>
                        <div class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <p>
                            <button class="w3-button w3-yellow" style="" ng-click="cancel()">ยกเลิก</button>                            
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
