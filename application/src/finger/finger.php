<header class="w3-container" style="padding-top:22px">
    <h1><b><i class="fa fa-cog"></i>  บันทึกลายนิ้มมือ</b></h1>
    <p><strong>ฐานข้อมูลลายนิ้วมือนักศึกษา || Information finger </strong></p>
  </header>
  <div class = "w3-col m6">
    <form class="w3-panel w3-card-4" action="application/src/sql/savefinger.php" method="POST">
            <br>
            <button class="w3-lefts w3-button w3-green" type="submit">บันทึก</button>
            <br>
            <div class="w3-section">
            <label>รหัสนิ้วมือ</label>      
            <input class="w3-input w3-hover-blue" type="text" name="id">
            <label>รหัสนักศึกษา</label>
            <input list="browsers" class="w3-input w3-hover-blue" name="student">
            <datalist id="browsers">
                <?php
                include 'config/database/connect.php';
                include 'application/src/sql/select_student.php';
                if ($result->num_rows >0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option  value='".$row['finger_id_students']."'>".$row['finger_name']."</option>";
                    }
                }else {
                    echo "<option value = 'get database error'>";
                }
                ?>
            </datalist>
            <br>
            <div class="w3-col m6">
                <span>เลือกมือ</span>
                <p>
                <input class="w3-radio" type="radio" name="hand" value="left">
                <label>มือขวา</label></p>
                <p>
                <p>
                <input class="w3-radio" type="radio" name="hand" value="right">
                <label>มือซ้าย</label></p>
                <p>
            </div>
            <div class="w3-col m6">
                <span>เลือกนิ้ว</span>
                <p>
                <input class="w3-radio" type="radio" name="finger" value="1">
                <label>นิ้วโป้ง</label></p>
                <p>
                <input class="w3-radio" type="radio" name="finger" value="2">
                <label>นิ้วชี้</label></p>
                <p>
                <input class="w3-radio" type="radio" name="finger" value="3">
                <label>นิ้วกลาง</label></p>
                <p>
                <input class="w3-radio" type="radio" name="finger" value="4">
                <label>นิ้วนาง</label></p>
                <p>
                <input class="w3-radio" type="radio" name="finger" value="5">
                <label>นิ้วก้อย</label></p>
            </div>
            </div>
        </form>
  </div>
 
  <div class="w3-container w3-col m6">
    <h5>ข้อมูลนักศึกษา</h5>
    <div class="w3-row ">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="img/user-icon.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        
        <?php
            error_reporting(0);
            if ($_REQUEST['finger']) {
                include 'config/database/connect.php';
                include 'application/src/sql/selectWhereStudent.php';
                    echo "<h4>";
                        echo "รหัสนักศึกษา : ".$_REQUEST['finger'];
                    echo "</h4>";
                    while($row = $result->fetch_assoc()) {
                    echo "<p>";
                    echo $row['finger_name']."<br>";
                    echo $row['branch']."<br>";
                    echo $row['faculty']."<br>";
                    echo "</p>";
                    }
            }else {
            }
        ?>
        
      </div>
    </div>
  </div>
  