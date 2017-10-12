<div class="panel panel-default">
    <div class="panel-body">
        <?php 
        if(count($skills['advanced']) > 0 || count($skills['intermediate']) > 0 || count($skills['beginner']) > 0){?>
            <div class="col-lg-12 text-left">
                <a href="<?php echo base_url('skills/edit_skills');?>" title="Edit Skills" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Edit</a>
            </div>
        <?php }else{?>
            <span class="main-title">Please Add Skill Set<br><br></span>
            <div class="col-lg-12 text-left">
                <a href="<?php echo base_url('skills/edit_skills');?>" title="Edit Skills" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Add</a>
            </div>
        <?php }?>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('skills/');?>">
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <label>Advance</label>
                </div>
                <div class="col-sm-7">
                    <?php
                        if(count($skills['advanced']) > 0){
                            foreach ($skills['advanced'] as $nkey1 => $val){
                                if($nkey1 == 0){
                                    echo ucfirst($val['name']);
                                }
                                else{
                                    echo ', '.ucfirst($val['name']);
                                }
                            }
                        }
                        else{
                            echo 'None';
                        }
                    ?>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <label>Intermediate</label>
                </div>
                <div class="col-sm-7">
                    <?php
                        if(count($skills['intermediate']) > 0){
                            foreach ($skills['intermediate'] as $nkey1 => $val){
                                if($nkey1 == 0){
                                    echo ucfirst($val['name']);
                                }
                                else{
                                    echo ', '.ucfirst($val['name']);
                                }
                            }
                        }
                        else{
                            echo 'None';
                        }
                    ?>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-sm-2">
                    <label>Beginner</label>
                </div>
                <div class="col-sm-7">
                    <?php
                        if(count($skills['beginner']) > 0){
                            foreach ($skills['beginner'] as $nkey1 => $val){
                                if($nkey1 == 0){
                                    echo ucfirst($val['name']);
                                }
                                else{
                                    echo ', '.ucfirst($val['name']);
                                }
                            }
                        }
                        else{
                            echo 'None';
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>