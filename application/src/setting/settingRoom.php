<script src="js/room.js"></script>
<header class="w3-container" style="padding-top:22px">
    <h1><b><i class="fa fa-cog"></i>  ตั้งค่าห้องเรียน</b></h1>
    <p><strong>ห้องเรียน || calssRoom </strong></p>
</header>
<div class ="w3-card w3-white" ng-app="room_app" ng-controller="room_Ctrl">

<form class="w3-container">
    <button class="w3-button w3-green w3-margin" ng-click="save_room()">เพิ่มห้อง</button>
    <p><label>รหัสห้อง</label></p>
    <input class="w3-input w3-border w3-left" ng-model="room.id" name="id" type="text"> <br>
    <p><label>ชื่อห้อง</label></p>
    <input class="w3-input w3-border w3-left" ng-model="room.name" name="name" type="text"> <br>
    <p><label>ชั้น</label></p>
    <input class="w3-input w3-border w3-left" ng-model="room.level" name="level" type="text"> <br>
    <p><label>อาคาร</label></p>
    <input class="w3-input w3-border w3-left" ng-model="room.building" name="building" type="text"> 
    <br>
    <br>
</form>

<br>
    <div class="w3-container">
    <table ng-init="get_room()" datatable="ng" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" weight="100%">
        <thead>
        <tr class="w3-gray">
            <th>#</th>
            <th>เบอร์ห้อง</th>
            <th>ชื่อห้อง</th>
            <th>ชั้น</th>
            <th>อาคาร</th>
        </tr>
        </thead>
        <tbody>
                <tr class="w3-animate-opacity" ng-repeat="(key, value) in roomdata">
                    <td>{{ $index + 1 }}</td>
                    <td>{{value.id}}</td>
                    <td>{{value.name}}</td>
                    <td>{{value.level}}</td>
                    <td>{{value.buil}}</td>
                </tr>
        </tbody>
    </table>
    </div>
</div>