<div class="panel panel-default">
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('skills/edit_skills');?>">
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-1">&nbsp;</div>
                    <div class="col-sm-6">
                        <label>Skill</label>
                    </div>
                    <div class="col-sm-3">
                        <label>Proficiency</label>
                    </div>
                </div>
                <div id="main-skills">
                    <?php
                        if($skills){
                            foreach ($skills as $nkey1 => $val){
                    ?>
                                <div class="form-group">
                                    <div class="col-sm-1">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="skill[]" name="skill[]" placeholder="Enter Skill" value="<?php echo $val['name']?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="proficiency[]">
                                            <option value="advanced" <?php echo $val['proficiency'] == 'advanced' ? 'selected' : '';?>>Advanced</option>
                                            <option value="intermediate" <?php echo $val['proficiency'] == 'intermediate' ? 'selected' : '';?>>Intermediate</option>
                                            <option value="beginner" <?php echo $val['proficiency'] == 'beginner' ? 'selected' : '';?>>Beginner</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 action-div" style="margin-top: 7px;">
                                        <input type="hidden" name="skill_id[]" value="<?php echo $val['id']?>">
                                        <a href="javascript:;" title="Delete Skills" class="delete-skill"><span class="glyphicon glyphicon-trash"></span></a>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-1">&nbsp;</div>
                    <div class="col-sm-2">
                        <a id="add_skill" href="javascript:;" title="Add Skill"><span class="glyphicon glyphicon-plus-sign"></span> Add Skill</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-1">&nbsp;</div>
                    <div class="col-sm-5">
                        <input class="btn btn-primary" type="submit" name="save-skills" id="save-skills" value="Save">
                        <a class="btn btn-default" href="<?php echo base_url('skills');?>">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>