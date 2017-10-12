<div class="panel panel-default">
    <form class="form-horizontal" method="POST" id="apply_jobs_form" action="<?php echo base_url('jobs/apply_jobs?id='.$id);?>">
        <div class="panel-body">
            <span class="main-title">Apply Job</span>
            <hr>
        </div>
    <!--    <div class="container">
            <div class="row">-->
        <div class="panel-body add-edit-div">
            <div class="row">
                <div class="col-sm-12">
                    <input type="hidden" name="job_id" id="job_id" value="<?php echo $id?>">
                    Job Title : <?php echo $jobs_info['job_title']?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    Location : <?php echo $jobs_info['job_location']?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    Salary : PHP <?php echo number_format($jobs_info['salary1'], 2, '.', ',')?> - PHP <?php echo number_format($jobs_info['salary2'], 2, '.', ',')?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    Required Experience : <?php echo $jobs_info['experience']?> Yr(s) Job Experience
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    Vacancy : <?php echo $jobs_info['vacancy']?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    &nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    Job Description : <?php echo $jobs_info['job_description'];?>
                </div>
                <div class="col-sm-6">
                    Company Overview : <?php echo $jobs_info['company_overview'];?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        if(!$jobs_application){
                    ?>
                    <input class="btn btn-success" type="button" name="apply_jobs" id="apply_jobs"  value="Post Application">
                            <a class="btn btn-default" href="<?php echo base_url('jobs');?>">Cancel</a>
                    <?php
                        }
                        else{
                    ?>
                            Note : You Have already applied for this job.
                            <a class="btn btn-default" href="<?php echo base_url('jobs');?>">Cancel</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </form>
<!--        </div>
    </div>-->
</div>