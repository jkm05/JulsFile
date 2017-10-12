<div class="panel panel-default">
    <div class="panel-body">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        <span class="main-title">Notifications</span>
        <hr>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <?php if($notification){?>
    
        <?php foreach($notification as $nkey1 => $val){?>
        <div class="panel-body">
<!--            <div class="col-lg-1">
                <div class="row">
                    <input type="checkbox">
                </div>
            </div>-->
            <div class="col-lg-10">
                <div class="row">
                    <h4 class="resume-title" style="padding-left: 0px;"><?php echo ucfirst($val['title'])?>
                </div>
                <div class="row">
                    <span>
                        <?php 
                            echo $val['message'];
                        ?>
                    </span>
                </div>
            </div>
            <div class="col-lg-2 text-right">
                <div class="row">
                    <?php
                        $not_info = $this->notification_model->get_notification_info($val['id']);
                        $job_info = $this->notification_model->get_job_info($val['user_id'], $val['job_id']);
                        if($job_info['app_con'] == ''){
                    ?>
                    <a title="Confirm Application" href="<?php echo base_url('notification/confirm?id='.$val['id']);?>" class="btn btn-success">confirm</a>&nbsp;&nbsp;
                    <a title="Cancel Application" href="<?php echo base_url('notification/cancel?id='.$val['id']);?>" class="btn btn-danger">cancel</a>
                        <?php }else{?>
                        <a href="Javascript:;" class="btn btn-default disabled"><?php echo $job_info['app_con'];?>ed</a>
                        <?php
                        }?>
                </div>
            </div>
        </div>
        <?php }?>
    <?php }?>
<!--        </div>
    </div>-->
</div>