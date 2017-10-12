<div class="panel panel-default">
    <div class="panel-body">
        <?php if(!$experience){?>
        <span class="main-title">You Still Have No Record(s)<br><br></span>
        <?php }?>
        <div class="col-lg-12 text-left">
            <a id="add_experience" href="javascript:;" title="Add Experience" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add</a>
        </div>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div hidden">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('home/experience');?>">
            <input type="hidden" id="experience_id" name="experience_id" value="">
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="position_title" class="col-sm-2 control-label custom_label">Job Description</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="position_title" name="position_title" placeholder="Job Description">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="company_name" class="col-sm-2 control-label custom_label">Company</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Joined From</label>
                <div class="col-sm-2">
                    <select class="form-control" name="duration_from_month" id="duration_from_month">
                        <option value="01">JANUARY</option>
                        <option value="02">FEBRUARY</option>
                        <option value="03">MARCH</option>
                        <option value="04">APRIL</option>
                        <option value="05">MAY</option>
                        <option value="06">JUNE</option>
                        <option value="07">JULY</option>
                        <option value="08">AUGUST</option>
                        <option value="09">SEPTEMBER</option>
                        <option value="10">OCTOBER</option>
                        <option value="11">NOVEMBER</option>
                        <option value="12">DECEMBER</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <input class="form-control" id="duration_from_year" name="duration_from_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4" aria-invalid="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Joined To</label>
                <div class="col-sm-2">
                    <select class="form-control" name="duration_to_month" id="duration_to_month">
                        <option value="01">JANUARY</option>
                        <option value="02">FEBRUARY</option>
                        <option value="03">MARCH</option>
                        <option value="04">APRIL</option>
                        <option value="05">MAY</option>
                        <option value="06">JUNE</option>
                        <option value="07">JULY</option>
                        <option value="08">AUGUST</option>
                        <option value="09">SEPTEMBER</option>
                        <option value="10">OCTOBER</option>
                        <option value="11">NOVEMBER</option>
                        <option value="12">DECEMBER</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <input class="form-control" id="duration_to_year" name="duration_to_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4" aria-invalid="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="specialization" class="col-sm-2 control-label custom_label">Designation</label>
                <div class="col-sm-7">
                    <select class="form-control" name="specialization" id="specialization">
                        <option value="">select</option>
                        <?php
                            if($specialization){
                                foreach ($specialization as $nkey1 => $val){
                        ?>
                                    <option title="<?php echo $val['name'];?>" value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="role" class="col-sm-2 control-label custom_label">Department</label>
                <div class="col-sm-7">
                    <select class="form-control" name="role" id="role">
                        <option value="">select</option>
                        <?php
                            if($primary_role){
                                foreach ($primary_role as $nkey1 => $val){
                        ?>
                                    <option class="hidden" data-specialization="<?php echo $val['specialization_id'];?>" title="<?php echo $val['name'];?>" value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="industry" class="col-sm-2 control-label custom_label">Industry</label>
                <div class="col-sm-7">
                    <select class="form-control" name="industry" id="industry">
                        <option value="">select</option>
                        <?php
                            if($industry){
                                foreach ($industry as $nkey1 => $val){
                        ?>
                                <option title="<?php echo $val['name'];?>" value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="position_level" class="col-sm-2 control-label custom_label">Position</label>
                <div class="col-sm-7">
                    <select class="form-control" name="position_level" id="position_level">
                        <option value="">select</option>
                        <?php
                            if($position_level){
                                foreach ($position_level as $nkey1 => $val){
                        ?>
                                <option title="<?php echo $val['name'];?>" value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1">&nbsp;</div>
                <label for="salary" class="col-sm-2 control-label custom_label">Gross Income</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Gross Income" maxlength="6">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label custom_label">Experience Explanation</label>
                <div class="col-sm-7">
                    <textarea class="form-control" name="description" id="description" rows="10" maxlength="1000"></textarea>
                </div>
            </div>
            <div class="form-group btn-add-div hidden">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">&nbsp;</label>
                <div class="col-sm-7">
                    <input type='submit' class="btn btn-primary save-experience" name="save-experience" id="save-experience" value="Save">
                    <button class="btn btn-default cancel-experience">Cancel</button>
                </div>
            </div>
            <div class="form-group btn-update-div hidden">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">&nbsp;</label>
                <div class="col-sm-7">
                    <input type='submit' class="btn btn-primary update-experience" name="update-experience" id="update-experience" value="Update">
                    <button class="btn btn-default cancel-experience">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <?php if($experience){?>
    
        <?php foreach($experience as $nkey1 => $val){?>
        <div class="panel-body">
            <div class="col-lg-2">
                <div class="row">
                    Experience Duration
                </div>
                <div class="row">
                    Job Description
                </div>
                <div class="row">
                    Company
                </div>
                <div class="row">
                    Designation
                </div>
                <div class="row">
                    Department
                </div>
                <div class="row">
                    Industry
                </div>
                <div class="row">
                    Position
                </div>
                <div class="row">
                    Gross Income
                </div>
            </div>
            <div class="col-lg-1"> - </div>
            <div class="col-lg-8">
                <div class="row">
                    <?php echo date('M Y', strtotime($val['duration_from']))?> - <?php echo date('M Y', strtotime($val['duration_to']))?>
                </div>
                <div class="row">
                    <?php echo ucfirst($val['position_title'])?>
                </div>
                <div class="row">
                    <?php echo $val['company_name']?>
                </div>
                <div class="row">
                    <?php 
                            $specialization_info = $this->specialization_model->get_specialization_info($val['specialization']);
                            echo $specialization_info['name'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            $primary_role_info = $this->primary_role_model->get_primary_role_info($val['role']);
                            echo $primary_role_info['name'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            $industry_info = $this->industry_model->get_industry_info($val['industry']);
                            echo $industry_info['name'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            $position_level_info = $this->position_level_model->get_position_level_info($val['position_level']);
                            echo $position_level_info['name'];
                        ?>
                </div>
                <div class="row">
                    PHP
                        <?php 
                            echo number_format($val['salary'], 2, '.',',');
                        ?>
                </div>
            </div>
            <div class="col-lg-1 text-right">
                <a id="edit_experience" href="javascript:;" title="Edit Experience" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                <a id="del_experience" href="javascript:;" title="Delete Experience" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
        </div>
        <?php }?>
    <?php }?>
<!--        </div>
    </div>-->
</div>