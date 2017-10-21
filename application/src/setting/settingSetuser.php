<script src="js/setting.js"></script>
<div ng-app="setting_app" ng-controller="setting_Ctrl">
    <header class="w3-container" style="padding-top:22px">
        <h1><b><i class="fa fa-cog"></i>  ตั้งค่าสิทธิการใช้งาน</b></h1>
        <p><strong>ห้องเรียน || calssRoom </strong></p>
    </header>
    <div ng-init="setting_user()">
        <p>สถานะผู้ใช้งาน<input class="w3-input" type="text"></p>
        <p>สิทธิในการเข้าถึง<br>
        <div class="w3-col m5">
        <input class="w3-check" type="checkbox" >
            <label>Dashboard</label><br>
            <input class="w3-check" type="checkbox" >
            <label>ควบคุมไฟ</label><br>
            <input class="w3-check" type="checkbox" >
            <label>จัดการห้อง</label><br>
            <input class="w3-check" type="checkbox" >
            <label>สร้างกิจกรรม</label><br>
            <input class="w3-check" type="checkbox" >
            <label>เปิดกิจกรรม</label><br>
            <input class="w3-check" type="checkbox" >
            <label>รายงานกิจกรรม</label>
        </div>
        <div class="w3-col m6">
            <input class="w3-check" type="checkbox" >
            <label>รายงานนักศึกษา</label><br>
            <input class="w3-check" type="checkbox" >
            <label>รายงานห้องเรียน</label><br>
            <input class="w3-check" type="checkbox" >
            <label>บันทึกลายนิ้วมือ</label><br>
            <input class="w3-check" type="checkbox" >
            <label>ข้อมูลนักศึกษา</label><br>
            <input class="w3-check" type="checkbox" >
            <label>ตั้งค่าทั่วไป</label><br>
        </div>
        </p>
    </div>
</div>