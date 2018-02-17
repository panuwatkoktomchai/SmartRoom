<script src="js/subject.js"></script>
<div class="w3-card w3-white" ng-app="app_subject" ng-controller="Ctrl_subject" ng-init="get_subject()">
    <div>
        <header class="w3-container" style="padding-top:22px">
            <h1><b><i class="fa fa-cog"></i> รายวิชา</b></h1>
            <p><strong>ฐานข้อมูลรายวิชา || Subject </strong></p>
        </header>
    </div>
    <div class="w3-container">
        <div>
            <a href="?id=setting/setting" class="w3-button w3-gray">กลับ</a>
        </div>
        <div>
        <form ng-submit="save_subject()">
            <label for="">รหัสวิชา</label>
            <input ng-keyup="check_id()" class="w3-input w3-border" type="text" name="" id="" ng-model="subject.id">
            
            <div ng-if="id" class="w3-container w3-animate-left">
                <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">
                    <p>รหัส {{subject.id}} ซ้ำกับรหัสในฐานข้อมูลของรายวิชา {{id}} </p>
                </div>
            </div>
            
            <label for="">ชื่อวิชา</label>
            <input class="w3-input w3-border" type="text" name="" id="" ng-model="subject.name">
            <label for="">ปีการศึกษา</label>
            <select class="w3-input w3-border" name="" id="" ng-model="subject.year">
                <option ng-repeat="(key,value) in year" ng-value="value.name">{{value.name}}</option>
            </select>
            <label for="">ภาคเรียนที่</label>
            <select class="w3-input w3-border" ng-model="subject.term">
                <option ng-repeat="(key,value) in term" ng-value="value.id">{{value.name}}</option>
            </select>
            <p><input ng-disabled="id" class="w3-button w3-green " type="submit" value="บันทึก"></p>
        </form>
        <br><br>
        </div>
        
        
        <form ng-submit="get_subject()">
            <label for="">เลือกปีการศึกษา</label>
            <select name="" id="" ng-model="selectYear">
                <option ng-repeat="(key,value) in year" ng-value="value.name">{{value.name}}</option>
            </select>

            <label for="">เลือกภาคเรียน</label>
            <select name="" id="" ng-model="selectTerm">
            <option ng-repeat="(key,value) in term" ng-value="value.id">{{value.name}}</option>
            </select>
            <input type="submit" id="submit" value="ค้นหา">
        </form>

        <h1>แสดงข้อมูล</h1>
        <div class="w3-container">
            <table datatable="ng" class="w3-table w3-bordered w3-hoverable" weight="100%">
                <thead>
                <tr class="w3-blue">
                    <th>#</th>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>ภาคเรียน</th>
                    <th>....</th>
                </tr>
                </thead>
                <tbody>
                        <tr class="w3-animate-opacity" ng-repeat="(key, value) in data_subject">
                            <td>{{ $index + 1 }}
                                <button ng-click="update(value.id)" class="w3-button w3-yellow" ng-if="data_edit.id==value.id">อัพเดท</button>
                            </td>
                            <td>{{value.id}}
                                <br><input ng-disabled="data_edit==value.id" class="w3-input" ng-if="data_edit.id==value.id" type="text" ng-model="data_edit.id">
                            </td>
                            <td>{{value.name}}
                                <br><input class="w3-input" ng-if="data_edit==value.id" type="text" ng-model="data_edit.name">
                            </td>
                            <td>{{value.term}}/{{value.year}}</td>
                            <td>
                            <button ng-click="delete_subject(value.id,value.name,value.year,value.term)" class="w3-button w3-circle w3-red w3-padding-small">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button> ::
                            <button ng-click="edit_subject(value.id,value.name)" class="w3-button w3-circle w3-yellow w3-padding-small">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
            
    </div>

</div>
