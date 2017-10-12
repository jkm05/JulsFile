<div class="panel panel-default">
    <div class="panel-body">
        <span class="glyphicon glyphicon-wrench"></span>
        <span class="main-title">Languages &nbsp;</span>
        <hr>
        <div class="col-lg-12 text-right">
            <a href="<?php echo base_url('languages/edit_languages');?>" title="Edit Languages"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        </div>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('languages');?>">
        	<div class="form-group">
	            <div class="col-sm-1">&nbsp;</div>
	            <div class="col-sm-5">
	                <label>Languages</label>
	            </div>
	            <div class="col-sm-2">
	                <label>Spoken</label>
	            </div>
	            <div class="col-sm-2">
	                <label>Written</label>
	            </div>
	        </div>
	        <?php
	        	if($languages){
	        		foreach ($languages as $key => $value) {
			?>
						<div class="form-group">
                            <div class="col-sm-1">
                                &nbsp;
                            </div>
                            <div class="col-sm-5">
                            	<?php echo $value['name']?>
                            </div>
                            <div class="col-sm-2">
                            	<?php echo $value['spoken']?>
                            </div>
                            <div class="col-sm-2">
                                <?php echo $value['written']?>
                            </div>
                       	</div>
			<?php
	        		}
	        	}
	        ?>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>