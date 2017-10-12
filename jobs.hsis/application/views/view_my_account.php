<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-lg-12 text-left">
            <a id="add_experience" href="<?php echo base_url('my_account/edit');?>" title="Edit Account" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        </div>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('my_account');?>">
            <legend>Profile Picture</legend>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-7">
                    <?php if($data['user_info']['profile_pic_link'] == ''){?>
                    <img src="<?php echo base_url('assets/images/image_na.png');?>" width="30%" height="30%">
                    
                    <?php }else{?>
                        <img src="<?php echo $data['user_info']['profile_pic_link']?>" width="40%" height="40%">
                    <?php }?>
                </div>
            </div>
            <legend>Primary Information</legend>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="fname" class="col-sm-2 control-label custom_label">First Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $data['user_info']['fname']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="mname" class="col-sm-2 control-label custom_label">Middle Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $data['user_info']['mname']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="lname" class="col-sm-2 control-label custom_label">Last Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data['user_info']['lname']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Gender</label>
                <div class="col-sm-7">
                    <select class="form-control" name="gender" id="gender" disabled="true">
                        <option value="male" <?php echo $data['user_info']['gender'] == 'male' ? 'selected' : '';?>>Male</option>
                        <option value="female" <?php echo $data['user_info']['gender'] == 'female' ? 'selected' : '';?>>Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Phone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['user_info']['phone']?>" readonly="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="phone" class="col-sm-2 control-label custom_label">Address</label>
                <div class="col-sm-7">
                    <textarea name="address" rows="7" class="col-sm-12" disabled=""><?php echo $data['user_info']['address']?></textarea>
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
                <label for="phone" class="col-sm-2 control-label custom_label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" id="username" name="username" value="aaaaaaaaaaaaaaaaaaaaaaaa" readonly="true">
                </div>
            </div>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>