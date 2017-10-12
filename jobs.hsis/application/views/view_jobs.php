<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">&nbsp;</div>
            <div class="col-sm-6">
                <form class="form-horizontal" method="GET" action="<?php echo base_url('jobs');?>">
                    <input type="text" name="search_jobs" class="form-control" placeholder="Search Jobs" value="<?php echo $search_jobs;?>">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <?php if($jobs){
                foreach ($jobs as $nkey1 => $val){
        ?>
        <div class="row">
            <div class="col-sm-12">
                <a href="<?php echo base_url('jobs/apply_jobs?id='.$val['id']);?>"><?php echo $val['job_title']?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                Location : <?php echo $val['job_location']?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                Salary : PHP <?php echo number_format($val['salary1'], 2, '.', ',')?> - PHP <?php echo number_format($val['salary2'], 2, '.', ',')?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                Required Experience : <?php echo $val['experience']?> Yr(s) Job Experience
            </div>
            <div class="col-sm-12">
                Vacancy : <?php echo $val['vacancy']?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                Job Description : <?php echo substr($val['job_description'], 0, 250).'....';?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
        <?php   
                }
            }
        ?>
<!--        <form class="form-horizontal" method="POST" action="<?php echo base_url('home/experience');?>">
            <input type="hidden" id="experience_id" name="experience_id" value="">
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="position_title" class="col-sm-2 control-label custom_label">Position Title</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="position_title" name="position_title" placeholder="Position Title">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="company_name" class="col-sm-2 control-label custom_label">Company Name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Joined Duration</label>
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
                <label class="col-sm-2 control-label custom_label">To</label>
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
                <label for="specialization" class="col-sm-2 control-label custom_label">Specialization</label>
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
                <label for="role" class="col-sm-2 control-label custom_label">Role</label>
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
                <label for="position_level" class="col-sm-2 control-label custom_label">Position Level</label>
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
                <label for="salary" class="col-sm-2 control-label custom_label">Salary</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Salary" maxlength="6">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label custom_label">Experience Description</label>
                <div class="col-sm-7">
                    <textarea class="form-control" name="description" id="description" rows="20" maxlength="1000"></textarea>
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
        </form>-->
    </div>
<!--        </div>
    </div>-->
</div>