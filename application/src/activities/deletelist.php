<button onclick="document.getElementById('<?php echo $row['id']; ?>').style.display='block'" class="w3-button w3-black">ลบ</button>
<!-- modal -->
<div id="<?php echo $row['id']; ?>" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-card-4">
        <div class="w3-panel w3-red w3-display-container w3-container">
            <span onclick="document.getElementById('<?php echo $row['id']; ?>').style.display='none'"
            class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <h3>ยืนยันการลบข้อมูล!</h3><hr>
            <p>
                คุณต้องการลบรายการกิจกรรม "<?php echo $row['name']; ?>" หรือไม่<br>
                <div class="w3-right w3-margin-bottom">
                <a href="application/src/activities/php/deleteActivities.php?id=<?php echo $row['id']; ?>" class="w3-button w3-black w3">ลบ</a> 
                <button class="w3-button w3-black" onclick="document.getElementById('<?php echo $row['id']; ?>').style.display='none'">ยกเลิก</button>                    
                </div>
            </p>
        </div>
    </div>
</div>
<!-- end modal -->