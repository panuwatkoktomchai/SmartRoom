<script src="js/report.js"></script>
<div ng-app="report_room_app" ng-controller = "report_room_Ctrl" ng-init="get_Room()" class="w3-card w3-white w3-container">
  <header class="w3-container" style="padding-top:22px">
      <h1><b><i class="fa fa-cog"></i>  รายงานห้องเรียน</b></h1>
      <p><strong>ห้องเรียน || ClassRoom </strong></p>
    </header>
  <div>
    <a href="?id=setting/settingRoom" class="w3-button w3-green">ตั้งค่าห้องเรียน</a>
  </div>

  <div ng-repeat="(key, value) in room_data" class="w3-item w3-container">
    <p><h3>{{ value.name }}</h3></p>
    <p >เปิดห้องล่าสุด  {{ value.checkin | date : 'd/M/yy h:mm a' }}</p>
    <p ng-if="value.status=='off'">สถานะ {{value.detail}}</p>
    <a ng-if="value.status=='on'" ng-href="?id=report/report_room&roomid={{ value.id }}"><i class="fa fa-line-chart" aria-hidden="true"></i></a>
    <hr>
  </div>

</div>
