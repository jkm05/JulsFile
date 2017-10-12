<div class="panel panel-default">
    <div class="panel-body">
         <?php if(!$education){?>
        <span class="main-title">You Still Have No Record(s)<br><br></span>
        <?php }?>
        <div class="col-lg-12 text-left">
            <a id="add_education" href="javascript:;" title="Add Education" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add</a>
        </div>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div hidden">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('education');?>">
            <input type="hidden" id="education_id" name="education_id" value="">
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="university" class="col-sm-2 control-label custom_label">College / University</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="university" name="university" placeholder="College / University">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">Accomplishment Date</label>
                <div class="col-sm-2">
                    <select class="form-control" name="grad_date_month" id="grad_date_month">
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
                    <input class="form-control" id="grad_date_year" name="grad_date_year" type="number" pattern="[0-9]*" min="0" value="" placeholder="Year" maxlength="4" aria-invalid="true">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <label for="qualification" class="col-sm-2 control-label custom_label">Educational Attainment</label>
                <div class="col-sm-7">
                    <select class="form-control" name="qualification" id="qualification">
                        <option value="">select</option>
                        <?php
                            if($qualification){
                                foreach ($qualification as $nkey1 => $val){
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
                <label for="field_of_study" class="col-sm-2 control-label custom_label">Course</label>
                <div class="col-sm-7">
                    <select class="form-control" name="field_of_study" id="field_of_study">
                        <option value="">select</option>
                        <?php
                            if($fielofstudy){
                                foreach ($fielofstudy as $nkey1 => $val){
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
                <label for="major" class="col-sm-2 control-label custom_label">Major</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="major" name="major" placeholder="Major" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-1">&nbsp;</div>
                <label for="grade" class="col-sm-2 control-label custom_label">Grade</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade" maxlength="6">
                </div>
            </div>
            <div class="form-group">
                <label for="additional_info" class="col-sm-3 control-label custom_label">Additional Information</label>
                <div class="col-sm-7">
                    <textarea class="form-control" name="additional_info" id="additional_info" rows="20" maxlength="1000"></textarea>
                </div>
            </div>
            <div class="form-group btn-add-div hidden">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">&nbsp;</label>
                <div class="col-sm-7">
                    <input type='submit' class="btn btn-primary save-education" name="save-education" id="save-education" value="Save">
                    <button class="btn btn-default cancel-experience">Cancel</button>
                </div>
            </div>
            <div class="form-group btn-update-div hidden">
                <div class="col-sm-1">&nbsp;</div>
                <label class="col-sm-2 control-label custom_label">&nbsp;</label>
                <div class="col-sm-7">
                    <input type='submit' class="btn btn-primary update-education" name="update-education" id="update-education" value="Update">
                    <button class="btn btn-default cancel-experience">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <?php if($education){?>
    
        <?php foreach($education as $nkey1 => $val){?>
        <div class="panel-body">
            <div class="col-lg-2">
                <div class="row">
                    College / University
                </div>
                <div class="row">
                    Accomplishment Date
                </div>
                <div class="row">
                    Educational Attainment
                </div>
                <div class="row">
                    Course
                </div>
                <div class="row">
                    Major
                </div>
                <div class="row">
                    Grade
                </div>
                <div class="row">
                    Additional Information
                </div>
            </div>
            <div class="col-lg-1"> - </div>
            <div class="col-lg-8">
                <div class="row">
                    <?php echo ucfirst($val['university'])?>
                </div>
                <div class="row">
                    <?php echo date('M Y', strtotime($val['grad_date']))?>
                </div>
                <div class="row">
                    <?php 
                            $qualification_info = $this->education_model->get_qualification_info($val['qualification']);
                            echo $qualification_info['name'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            $fielofstudy_info = $this->education_model->get_fielofstudy_info($val['field_of_study']);
                            echo $fielofstudy_info['name'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            echo $val['major'];
                        ?>
                </div>
                <div class="row">
                    <?php 
                            echo $val['grade'];
                        ?>
                </div>
                <div class="row">
                    <?php echo $val['additional_info']?>
                </div>
            </div>
            <div class="col-lg-1 text-right">
                <a id="edit_education" href="javascript:;" title="Edit Education" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                <a id="del_education" href="javascript:;" title="Delete Education" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
        </div>
<!--        <div class="panel-body">
            <div class="col-lg-3">
                <div class="row">
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <h4 class="resume-title">
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        Qualification
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        Field of Study
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        Major
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        Grade
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-1 text-right">
                <a id="edit_education" href="javascript:;" title="Edit Education" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                <a id="del_education" href="javascript:;" title="Delete Education" data-id="<?php echo $val['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
        </div>-->
        <?php }?>
    <?php }?>
<!--        </div>
    </div>-->
</div>