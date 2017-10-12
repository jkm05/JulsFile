<div class="panel panel-default">
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <!-- <form class="form-horizontal" method="POST" action="<?php echo base_url('skills/');?>"> -->
    	<?php echo form_open_multipart(base_url('upload_resume'), array('class' => 'form-horizontal'));?>
    		<?php
    			if($upload_resume['resume_name'] != ''){
    		?>
	            <div class="form-group">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">
	                    <label>Resume Name :</label>
	                </div>
	                <div class="col-sm-5">
                		<?php echo $upload_resume['resume_name']?>
	                </div>
	            </div>
	            <div class="form-group">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">
	                    <label>Uploaded Date:</label>
	                </div>
	                <div class="col-sm-5">
                		<?php echo date('M d, Y g:i A', strtotime($upload_resume['uploaded_date']))?>
	                </div>
	            </div>
<!--	            <div class="form-group required">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">
	                	<input type="file" name="my_resume">
	                </div>
	            </div>-->
	            <div class="form-group required">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-8">
	                	<!--<input type="submit" name="upload_resume" class="btn btn-primary" value="Update Resume">-->
	                	<a href="<?php echo base_url('upload_resume/dl_resume');?>" class="btn btn-success">View Resume</a>
	                	<input type="submit" name="delete_resume" class="btn btn-danger" value="Delete Resume">
	                </div>
	            </div>
            <?php
    			}
    			else{
			?>
				<div class="form-group">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-5">
	                    <label>Please upload resume.</label>
	                </div>
	            </div>
	            <div class="form-group required">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">
	                	<input type="file" name="my_resume">
	                </div>
	            </div>
	            <div class="form-group required">
	                <div class="col-sm-1">&nbsp;</div>
	                <div class="col-sm-2">
	                	<input type="submit" name="upload_resume" class="btn btn-success" value="Add Resume">
	                </div>
	            </div>
			<?php
    			}
    		?>
        <!-- </form> -->
        <?php echo form_close();?>
    </div>
<!--        </div>
    </div>-->
</div>