<script src="js/report.js"></script>
<style>
  .on{
      color:green;
  }
  .charton{
    display:block;
  }
  .chartoff{
    display:none;
  }

</style>
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
    <p ng-class="{on: value.status == 'กำลังสอนโดย'}">{{value.status}} {{ value.teacher.name }}</p>
    <a ng-href="?id=report/report_room&roomid={{ value.id }}" ng-class="{charton:value.status == 'กำลังสอนโดย',chartoff:value.status =='ยังไม่มีการใช้งาน'}"><i class="fa fa-line-chart" aria-hidden="true"></i></a>
    <hr>
  </div>

</div>
