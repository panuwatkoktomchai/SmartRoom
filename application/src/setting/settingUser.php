<script src="js/User.js"></script>
<div  class="w3-card w3-white">
<header class="w3-container" style="padding-top:22px">
    <h1><b><i class="fa fa-cog"></i> ตั้งค่าผู้ใช้งาน</b></h1>
    <p><strong>เพิ่มผู้ใช้งาน || Add user </strong></p>
</header> 
<div class="w3-container" ng-app="myuser" ng-controller="userCtrl">
    <button class="w3-button w3-green " ng-click="save_user()">เพิ่มผู้ใช้งาน</button>
    <form>
    <p>
    <label>ชื่อ-นามสกุล</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.name" type="text">
    </p>
    <p>
    <label>สาขา</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.branch" type="text">
    </p>
    <p>
    <label>คณะ</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.faculty" type="text">
    </p>
    <p>
    <label>ตำแหน่ง</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.level" type="text">
    </p>
    <p>
    <label>เบอรโทรติดต่อ</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.tell" type="text">
    </p>
    <p>
    <label>อีเมล</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.email" type="text">
    </p>

    <p>
    สำหรับเข้าสู่ระบบ<br>
    <div ng-if="save_error  " class="w3-panel w3-pale-red w3-leftbar w3-border-red">
        <p>{{save_error}}</p>
    </div>
    <label>ชื่อผู้ใช้งาน</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.user" type="text">
    </p>
    <p>
    <label>รหัสผ่าน</label>
    <input class="w3-input w3-border w3-round-large" ng-model="teacher.pass" type="text">
    </p>
    </form>
    
    <table ng-init="get_user()" datatable="ng" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ตำแหน่ง</th>
                <th>สาขา</th>
                <th>คณะ</th>
            </tr>
        </thead>
        <tbody>
           <tr ng-repeat="(key,value) in data_teacher">
                <td>
                    <button ng-if="!edit_teacher.id" class="w3-button w3-orange" ng-click="edit_user(value.id)">
                        <i class="fa fa-pencil-square-o"></i>
                    </button>
                    <button ng-if="value.id == edit_teacher.id" class="w3-button w3-green" ng-click="update_user(value.id)">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </button>
                    <button ng-if="!edit_teacher.id" class="w3-button w3-red" ng-click="delete_user(value.id,value.name)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
                <td>{{value.name}}<br><p class="w3-animate-zoom" ng-if="value.id == edit_teacher.id"><input class="w3-input w3-hover" type="text" ng-model="edit_teacher.name"></p></td>
                <td>{{value.level}}<br><p class="w3-animate-zoom" ng-if="value.id == edit_teacher.id"><input class="w3-input w3-hover" type="text" ng-model="edit_teacher.level"></p></td>
                <td>{{value.branch}}<br><p class="w3-animate-zoom" ng-if="value.id == edit_teacher.id"><input class="w3-input w3-hover" type="text" ng-model="edit_teacher.branch"></p></td>
                <td>{{value.faculty}}<br><p class="w3-animate-zoom" ng-if="value.id == edit_teacher.id"><input class="w3-input w3-hover" type="text" ng-model="edit_teacher.faculty"></p></td>
           </tr> 
        </tbody>
    </table>
</div>
</div>