<script src="js/active.js"></script>
<div ng-app="active_app" ng-controller="active_Ctrl" ng-init="detail_acitve()">
    <header class="w3-container" style="padding-top:22px">
        <h1><b><i class="fa fa-cog"></i> กิจกรรม {{data_detail.active_name}}</b></h1>
        <p><strong>กิจกรรมทั้งหมด || All activities </strong></p>
    </header>
    <div>
        <h4>ผู้เข้าร่วม</h4>
        <p ng-repeat="item in data_detail.students">[ {{item.std_id}} ]  {{item.std_name}} {{ item.time | date:'HH:mm:ss'}} </p>
    </div>
</div>
