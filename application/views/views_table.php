<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
body {
  background-image: url('https://images7.alphacoders.com/661/661783.jpg');
}
</style>
<script>
$(document).ready(function () {
  $("#myInput").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
</script>
<body>
    
    <div class="container">
    <br></br>
    <br></br>
    
    <h1>ตารางรถไฟ</h1>
    <br></br>
    <div class="container">
   
        
       
    
    </div>
    <input
            class="form-control"
            id="myInput2"
            type="text"
            placeholder="ค้นหา.."
          />

    <table class="table table-dark" id="myTable" >
  <tr >
  <th></th>
  <th></th><th></th>
   
    <th>ต้นทาง</th>
    <th></th>
    <th>ห้วยราช</th>
    <th></th>
    <th>ปลายทาง</th>
   
    
  </tr>
  <tr><th></th>
     <th></th>
     <th>ขบวน</th>
    <th>สถานี</th>
    <th>เวลาออก</th>
    <th>ถึง</th>
    <th>ออก</th>
    <th>สถานี</th>
    <th>ถึงเวลา</th>
    <th>หมายเหตุ</th>
    <th></th>
  </tr>
<?php
        foreach($tm as $row){
?>
<tr>
            <td></td>
            <td></td>
    <td><center><?=$row->id;?></center></td>
    <td><center><?=$row->d_station;?></center></td>
    <td><center><?=$row->d_timeout; ?></center></td>
    <td><center><?=$row->c_timeto; ?></center></td>
    <td><center><?=$row->c_timeout; ?></center></td>
    <td><center><?=$row->t_station; ?></center></td>
    <td><center><?=$row->t_timeto; ?></center></td>
    <td><center><?=$row->train; ?></center></td>
    <td></td>
  </tr>
  <?php
         }

    ?>
    </table>
    <a class="btn btn-primary" href="../Welcome/addData" role="button">เพิ่มข้อมูล</a>
   
    </div>
    <form action="../Welcome/search_id" method="get">
            <center>
                <label class="title" for="id">ค้นหาด้วยรหัสขบวนรถ</label>
                <input class="input" type="text" id="id" name="id" value=""><br><br>
                <input class="search" type="submit"  value="ค้นหา" />
            </center>
        </form>
</body>

</html>