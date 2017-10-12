<div class="panel panel-default">
    <div class="panel-body">
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('my_account/edit');?>" enctype="multipart/form-data">
            <legend>Profile Picture</legend>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="fname" class="col-sm-2 control-label custom_label">Upload Photo</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="profile_pic">
                </div>
            </div>
            <legend>Primary Information</legend>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="fname" class="col-sm-2 control-label custom_label">First Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $data['user_info']['fname']?>">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="mname" class="col-sm-2 control-label custom_label">Middle Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $data['user_info']['mname']?>">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="lname" class="col-sm-2 control-label custom_label">Last Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data['user_info']['lname']?>">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Gender</label>
                <div class="col-sm-7">
                    <select class="form-control" name="gender" id="gender">
                        <option value="male" <?php echo $data['user_info']['gender'] == 'male' ? 'selected' : '';?>>Male</option>
                        <option value="female" <?php echo $data['user_info']['gender'] == 'female' ? 'selected' : '';?>>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Phone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['user_info']['phone']?>">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Address</label>
                <div class="col-sm-7">
                    <textarea name="address" rows="7" class="col-sm-12" ><?php echo $data['user_info']['address']?></textarea>
                </div>
            </div>
            <legend>System Information</legend>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Applicant ID</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="app_id" name="app_id" value="<?php echo $data['user_info']['app_id']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Username</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['user']['username']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="password" class="col-sm-2 control-label custom_label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="cpassword" class="col-sm-2 control-label custom_label">Confirm Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="cpassword" name="cpassword" value="">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="cpassword" class="col-sm-2 control-label custom_label">&nbsp;</label>
                <div class="col-sm-7">
                    <input type="submit" name="save" id="save" value="Save" class="btn btn-primary" onclick="return check_records();">
                    <a href="<?php echo base_url('my_account');?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>