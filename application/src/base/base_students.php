<script src="js/getStudent.js"></script>
<div ng-app="myApp" ng-controller="myCtrl">
    <h1>จัดการฐานข้อมูลนักศึกษา</h1>
    <p> <strong>ตารางข้อมูลนักศึกษา ||</strong> student info</p>
    <p><a class="w3-button w3-green" href="?id=base/add_base" >เพิ่มข้อมูลนักศึกษา <i class="fa fa-arrow-right"></i></a></p>
    <table ng-init="get_student_list()" datatable="ng" id="student_base"  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" weight="100%">
        <thead>
                <tr>
                <th>ที่</th>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อ-นามสกุล</th>
                <th>เบอร์</th>
                <th>สาขา</th>
                <th>คณะ</th>
                <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-hide="data">
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                    <td><i class="fa fa-spinner w3-spin"></td>
                </tr>
                <tr class="w3-animate-opacity" ng-repeat="(key,value) in data">
                    <td>{{ $index+1 }} 
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id" ng-show="edit">
                            <button class="w3-button w3-green w3-hover-yellow" ng-click="update()">อัพเดท</button>
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
                    <td>{{ value.std_tell }} 
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <input class="w3-input" type="text" ng-model="std_edit.std_tell">
                        </p>  
                    </td>
                    <td>{{ value.std_branch }}
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <select class="w3-select" name="faculty" ng-model="faculty.fac" ng-change="set_branch()">
                                <option value="" disabled selected>เลือกคณะ</option>
                                <option ng-repeat="(key,Fvalue) in list_faculty" ng-value="Fvalue.faculty_id">{{Fvalue.faculty_faculty}}[{{Fvalue.faculty_id}}]</option>
                            </select>
                        </p>
                    </td>
                    <td>{{ value.std_faculty }} 
                    <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <select class="w3-select" ng-model = "faculty.bra">
                                <option value="" disabled selected>เลือกสาขา</option>
                                <option ng-repeat="(key,Bvalue) in list_branch" ng-value="Bvalue.branch_id">{{ Bvalue.branch_branch}}[{{Bvalue.branch_id}}]</option>
                            </select>
                        </p>  
                    </td>
                    <td>
                        <button class="w3-button w3-orange"ng-click="edit(value.std_id)" ><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
                        <button class="w3-button w3-red" ng-click="remove(value.std_id)"><i class="fa fa-trash" aria-hidden="true"></i></button>  
                        <br>
                        <p class="w3-animate-zoom" ng-if="std_edit.std_id==value.std_id">
                            <button class="w3-button w3-yellow" ng-click="cancel()">ยกเลิก</button>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
