<script src="js/active.js"></script>
<div ng-app="active_app" ng-controller="active_Ctrl" class="w3-card w3-white">
    <!-- head -->
    <header class="w3-container" style="padding-top:22px">
        <h1><b><i class="fa fa-cog"></i>  กิจกรรม</b></h1>
        <p><strong>สร้างกิจกรรม || Add activities </strong></p>
    </header>
    <!-- head -->

    <!-- content -->
    <div class="w3-container">
        <button class="w3-button w3-green" ng-click="save_active()">เพิ่มกิจกรรม</button>
        <form>
            <p>รหัสกิจกรรม<input class="w3-input" type="text" ng-model="active.id"></p>
            <p>ชื่อกิจกรรม<input class="w3-input" type="text" ng-model="active.name"></p>
            <p>วัน-เวลา<input class="w3-input" type="datetime-local" ng-model="active.time"></p>
            <p>สถานที่<input class="w3-input" type="text" ng-model="active.des"></p>
        </form>
    </div>
    <br>
    <div class="w3-container">
        <table datatable="ng" ng-init="get_active()" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white display" id="tableActivities">
            <thead>
                <tr>
                    <th>ที่</th>
                    <th>รหัสกิจกรรม</th>
                    <th>ชื่อกิจกรรม</th>
                    <th>วันที่และเวลา</th>
                    <th>สถานที่</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="(key, value) in data_active">
                    <td>{{ $index+1 }}</td>
                    <td>{{ value.active_id }}</td>
                    <td>{{ value.active_name }}</td>
                    <td>{{ value.active_time }}</td>
                    <td>{{ value.active_des }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- content -->
</div>
