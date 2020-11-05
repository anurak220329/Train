<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  background-image: url('https://cdn.hipwallpaper.com/i/68/99/M3JDGa.jpg');
}

</style>
<div class="container ">
<div class="row">
<div class="col-6">
<form class="form-horizontal" action='../Welcome/insertData' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพิ่มข้อมูลรถไฟ</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">ขบวนรถไฟ</label>
      <div class="controls">
        <input type="text" id="id" name="id" placeholder="" class="input-xlarge">
        <p class="help-block">สถานีต้นทาง</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">สถานี</label>
      <div class="controls">
      <select name="d_station" id="d_station">
    <option value="สุรินทร์">สุรินทร์</option>
    <option value="สำโรงทาบ">สำโรงทาบ</option>
    <option value="อุบลราชธานี">อุบลราชธานี</option>
    
  </select>
 
      </div>
    </div>
 
    <div class="control-group">
     
      <label class="control-label" >เวลาออก</label>
      <div class="controls">
      <input type="time" id="d_timeout" name="d_timeout">
  
<p class="help-block">สถานีปัจจุบัน</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" >เวลาถึง</label>
      <div class="controls">
      <input type="time" id="c_timeto" name="c_timeto">
 

      </div>
    </div>


    <div class="control-group">
      <!-- Password-->
      <label class="control-label" >เวลาออก</label>
      <div class="controls">
      <input type="time" id="c_timeout" name="c_timeout">
 
<p class="help-block">สถานีปลายทาง</p>
      </div>
    </div>
 

 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">สถานี</label>
      <div class="controls">
      <select name="t_station" id="t_station">
    <option value="กรุงเทพ">กรุงเทพ</option>
    <option value="นครราชสีมา">นครราชสีมา</option>
    
  </select>
      
      </div>
    </div>
 

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" >เวลาถึง</label>
      <div class="controls">
      <input type="time" id="t_timeto" name="t_timeto">
 
</script>

      </div>
    </div>
    
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">ชนิดรถ</label>
      <div class="controls">
      <select name="train" id="train">
    <option value="รถธรรมดา">รถธรรมดา</option>
    <option value="รถดีเซลราง">รถดีเซลราง</option>
    <option value="รถด่วนดีเซลราง">รถด่วนดีเซลราง</option>
    <option value="รถดีเซลราง">รถดีเซลราง</option>
  </select>
      
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">เพิ่ม</button>
        <a class="btn btn-primary" href="../Welcome/show" role="button">ดูตาราง</a>
      </div>
     
    </div>
  </fieldset>
</form>


	</div>
	</div>
    </div>
   
    
</div>
</div>

</body>
</html>