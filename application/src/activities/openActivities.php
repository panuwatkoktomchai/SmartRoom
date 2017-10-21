<script src="js/active.js"></script>
<div ng-app="active_app" ng-controller="active_Ctrl" class="w3-card w3-white">
    <header class="w3-container" style="padding-top:22px">
        <h1><b><i class="fa fa-cog"></i>  เปิดห้องกิจกรรม</b></h1>
        <p><strong> เลือกกิจกรรม || Open activities </strong></p>
    </header>
    <div class="w3-container" ng-init="get_active();">
        <div ng-repeat="item in data_active" ng-hide="item.status=='on'" class="w3-panel w3-pale-red w3-leftbar w3-border-red">
            <h3>[{{item.active_id}}]  {{item.active_name}}</h3>
            <p>วันที่ทำกิจกรรม : {{item.active_time}}</p>
            <p>สถานที่ทำกิจกรรม : {{item.active_des}}</p> 
            <p class="w3-right"><button class="w3-button w3-blue" ng-click="open_active(item.active_id)">เริ่มกิจกรรม</button></p>
            <!-- <p class="w3-right"><a ng-href="?id=activities/setActive&activeID={{item.active_id}}" class="w3-button w3-yellow">เริ่มกิจกรรม</a></p> -->
        </div>
    </div>
</div>
