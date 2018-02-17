<script src="js/setting.js"></script>
<div ng-app="setting_app" ng-controller="setting_Ctrl">
    <h5>ข้อมูลวัน</h5>
    <form ng-submit="saveDay()">
        <label for="">รหัสวัน</label>
        <input ng-model="day.id" class="w3-input" type="number">
        <label for="">วัน</label>
        <input ng-model="day.name" class="w3-input" type="text">
        <input class="w3-button w3-green w3-block w3-margin-bottom w3-margin-top" type="submit" value="บันทึก">
    </form>
    <h5>ข้อมูลปีการศึกษา</h5>
    <form ng-submit="saveYear()">
        <label for="">ปีการศึกษา</label>
        <input ng-model="year" class="w3-input" type="number">
        <input class="w3-button w3-green w3-block w3-margin-bottom w3-margin-top" type="submit" value="บันทึก">
    </form>
    <h5>ข้อมูลเทอมการสอน</h5>
    <form ng-submit="saveTerm()">
        <label for="">รหัสเทอม</label>
        <input ng-model="term.id" class="w3-input" type="text">
        <label for="">เทอมการสอน</label>
        <input ng-model="term.name" class="w3-input" type="text">
        <input class="w3-button w3-green w3-block w3-margin-bottom w3-margin-top" type="submit" value="บันทึก">

    </form>
</div>
