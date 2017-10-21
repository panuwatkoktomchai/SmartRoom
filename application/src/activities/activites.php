<script src="js/active.js"></script>
<div ng-app="active_app" ng-controller="active_Ctrl" ng-init="report_active()">
<header class="w3-container" style="padding-top:22px">
    <h1><b><i class="fa fa-cog"></i>  รายงานกิจกรรม</b></h1>
    <p><strong>กิจกรรมทั้งหมด || All activities </strong></p>
</header>
<div class='w3-panel w3-pale-red w3-leftbar w3-border-red' ng-repeat="item in reportActive" ng-show="item.status=='on'">
    <h1>[{{ item.active_id }}] {{ item.active_name }}</h1>
    <p>สถานที่ {{item.active_des}}</p>
    <p>เปิดกิจกรรมเมื่อเวลา {{item.time_start}}</p>
    <p><a ng-href='?id=report/report_active&acID={{item.active_id}}' class='w3-button fa fa-line-chart w3-blue'></a>
    <a ng-href='' class='w3-button fa fa-question-circle-o w3-blue'></a><p>
</div>  
</div>

