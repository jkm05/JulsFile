<div class="panel panel-default">
    <div class="panel-body">
        <span class="glyphicon glyphicon-wrench"></span>
        <span class="main-title">Languages</span>
    </div>
<!--    <div class="container">
        <div class="row">-->
    <div class="panel-body add-edit-div">
        <form class="form-horizontal" method="POST" action="<?php echo base_url('languages/edit_languages');?>">
            <div class="row">
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
                <div id="main-language">
                    <?php
                        if($languages){
                            foreach ($languages as $nkey1 => $val){
                    ?>
                                <div class="form-group">
                                    <div class="col-sm-1">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="language[]">
                                                <option value="Arabic" <?php echo $val['name'] == 'Arabic' ? 'selected' : '';?>>Arabic</option>
                                                <option value="Bahasa Indonesia" <?php echo $val['name'] == 'Bahasa Indonesia' ? 'selected' : '';?>>Bahasa Indonesia</option>
                                                <option value="Bahasa Malaysia" <?php echo $val['name'] == 'Bahasa Malaysia' ? 'selected' : '';?>>Bahasa Malaysia</option>
                                                <option value="Bengali" <?php echo $val['name'] == 'Bengali' ? 'selected' : '';?>>Bengali</option>
                                                <option value="Chinese" <?php echo $val['name'] == 'Chinese' ? 'selected' : '';?>>Chinese</option>
                                                <option value="Dutch" <?php echo $val['name'] == 'Dutch' ? 'selected' : '';?>>Dutch</option>
                                                <option value="English" <?php echo $val['name'] == 'English' ? 'selected' : '';?>>English</option>
                                                <option value="Filipino" <?php echo $val['name'] == 'Filipino' ? 'selected' : '';?>>Filipino</option>
                                                <option value="French" <?php echo $val['name'] == 'French' ? 'selected' : '';?>>French</option>
                                                <option value="German" <?php echo $val['name'] == 'German' ? 'selected' : '';?>>German</option>
                                                <option value="Hebrew" <?php echo $val['name'] == 'Hebrew' ? 'selected' : '';?>>Hebrew</option>
                                                <option value="Hindi" <?php echo $val['name'] == 'Hindi' ? 'selected' : '';?>>Hindi</option>
                                                <option value="Italian" <?php echo $val['name'] == 'Italian' ? 'selected' : '';?>>Italian</option>
                                                <option value="Japanese" <?php echo $val['name'] == 'Japanese' ? 'selected' : '';?>>Japanese</option>
                                                <option value="Korean" <?php echo $val['name'] == 'Korean' ? 'selected' : '';?>>Korean</option>
                                                <option value="Portuguese" <?php echo $val['name'] == 'Portuguese' ? 'selected' : '';?>>Portuguese</option>
                                                <option value="Russian" <?php echo $val['name'] == 'Russian' ? 'selected' : '';?>>Russian</option>
                                                <option value="Spanish" <?php echo $val['name'] == 'Spanish' ? 'selected' : '';?>>Spanish</option>
                                                <option value="Tamil" <?php echo $val['name'] == 'Tamil' ? 'selected' : '';?>>Tamil</option>
                                                <option value="Thai" <?php echo $val['name'] == 'Thai' ? 'selected' : '';?>>Thai</option>
                                                <option value="Vietnamese" <?php echo $val['name'] == 'Vietnamese' ? 'selected' : '';?>>Vietnamese</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="spoken[]">
                                                <option value="10" <?php echo $val['spoken'] == '10' ? 'selected' : '';?>>10</option>
                                                <option value="9" <?php echo $val['spoken'] == '9' ? 'selected' : '';?>>9</option>
                                                <option value="8" <?php echo $val['spoken'] == '8' ? 'selected' : '';?>>8</option>
                                                <option value="7" <?php echo $val['spoken'] == '7' ? 'selected' : '';?>>7</option>
                                                <option value="6" <?php echo $val['spoken'] == '6' ? 'selected' : '';?>>6</option>
                                                <option value="5" <?php echo $val['spoken'] == '5' ? 'selected' : '';?>>5</option>
                                                <option value="4" <?php echo $val['spoken'] == '4' ? 'selected' : '';?>>4</option>
                                                <option value="3" <?php echo $val['spoken'] == '3' ? 'selected' : '';?>>3</option>
                                                <option value="2" <?php echo $val['spoken'] == '2' ? 'selected' : '';?>>2</option>
                                                <option value="1" <?php echo $val['spoken'] == '1' ? 'selected' : '';?>>1</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="written[]">
                                                <option value="10" <?php echo $val['written'] == '10' ? 'selected' : '';?>>10</option>
                                                <option value="9" <?php echo $val['written'] == '9' ? 'selected' : '';?>>9</option>
                                                <option value="8" <?php echo $val['written'] == '8' ? 'selected' : '';?>>8</option>
                                                <option value="7" <?php echo $val['written'] == '7' ? 'selected' : '';?>>7</option>
                                                <option value="6" <?php echo $val['written'] == '6' ? 'selected' : '';?>>6</option>
                                                <option value="5" <?php echo $val['written'] == '5' ? 'selected' : '';?>>5</option>
                                                <option value="4" <?php echo $val['written'] == '4' ? 'selected' : '';?>>4</option>
                                                <option value="3" <?php echo $val['written'] == '3' ? 'selected' : '';?>>3</option>
                                                <option value="2" <?php echo $val['written'] == '2' ? 'selected' : '';?>>2</option>
                                                <option value="1" <?php echo $val['written'] == '1' ? 'selected' : '';?>>1</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 action-div" style="margin-top: 7px;">
                                        <input type="hidden" name="language_id[]" value="<?php echo $val['id']?>">
                                        <a href="javascript:;" title="Delete Language" class="delete-language"><span class="glyphicon glyphicon-trash"></span></a>
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
                        <a id="add_language" href="javascript:;" title="Add Language"><span class="glyphicon glyphicon-plus-sign"></span> Add Language</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-1">&nbsp;</div>
                    <div class="col-sm-5">
                        <input class="btn btn-primary" type="submit" name="save-languages" id="save-language" value="Save">
                        <a class="btn btn-default" href="<?php echo base_url('languages');?>">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<!--        </div>
    </div>-->
</div>