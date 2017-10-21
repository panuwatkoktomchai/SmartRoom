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
                <td>{{$index + 1 }}</td>
                <td>{{value.name}}</td>
                <td>{{value.level}}</td>
                <td>{{value.branch}}</td>
                <td>{{value.faculty}}</td>
           </tr> 
        </tbody>
    </table>
</div>
</div>