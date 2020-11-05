<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">เพิ่มข้อมูลรถไฟ</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="#">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">ขบวนรถไฟ</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" id="id" name="id" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">สถานี</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <select name="d_station" id="d_station">
                                            <option value="สุรินทร์">สุรินทร์</option>
                                            <option value="สำโรงทาบ">สำโรงทาบ</option>
                                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                                            
                                             </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">เวลาออก</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="time" id="d_timeout" name="d_timeout">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">เวลาถึง</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="time" id="c_timeto" name="c_timeto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">เวลาออก</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="time" id="c_timeout" name="c_timeout">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">สถานี</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                            <select name="t_station" id="t_station">
                                                <option value="กรุงเทพ">กรุงเทพ</option>
                                                <option value="นครราชสีมา">นครราชสีมา</option>
                                                
                                            </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">เวลาถึง</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="time" id="t_timeto" name="t_timeto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="index.php">Login</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>