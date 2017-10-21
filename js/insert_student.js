
function onsubmite(){
    var datetime = new Date();
    var lastUpdate = datetime.getTime();
    if (std_id.value==""||std_name.value==""||std_tell.value==""||std_branch.value==""||std_faculty.value=="") {
        confirm('กรุณาระบุข้อมูลให้ครบ')
        return false;
    }
    inserttofirebase(std_id.value, std_name.value, std_tell.value, std_branch.value, std_faculty.value, lastUpdate.toString());
    document.getElementById("std_id").value= null;
    document.getElementById("std_name").value= null;
    document.getElementById("std_tell").value= null;
    document.getElementById("std_branch").value= "";
    document.getElementById("std_faculty").value= "";
}
function inserttofirebase(id, name, tell, branch, faculty, lastUpdate){
    console.log(lastUpdate);
    var firebaseRef = firebase.database().ref("student/"+id).set({
        std_id:id,
        std_name:name,
        std_tell:tell,
        std_branch:branch,
        std_faculty:faculty,
        std_date:lastUpdate   
    });
    console.log("insert data to firebase succeses");
}