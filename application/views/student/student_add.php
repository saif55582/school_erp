<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">
                            Add Student
                        </h4>
                    <div class="controls">
                        <?= form_open_multipart(NULL,array('class'=>'form-horizontal'))?>
                        <center>
                             <div class="row"><div class="col-md-12"><h4><strong>PERSONAL DETAILS</strong></h4></div></div>
                        </center>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img class="img img-responsive" style="width:200px;" src="<?=base_url()?>main_asset/assets/img/faces/default.png" alt="" name="photo">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="photo" />
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                        <span class="text-danger"><?= form_error('photo'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <label class="col-md-2 label-on-left">First Name: <?=requiredStar()?></label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" value="<?=set_value('f_name')?>" name="f_name" class="form-control up_case">
                                                <h7 class='text-danger'><?=form_error('f_name')?></h7>
                                            </div>
                                        </div>
                                        <label class="col-md-2 label-on-left">Last Name:</label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" value="<?=set_value('l_name')?>" name="l_name" class="form-control up_case">
                                                <span class="text-danger"><?=form_error('l_name')?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 label-on-left">Dater Of Birth: <?=requiredStar()?></label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input onfocusout="getAge(this.value)" value="<?=set_value('dob')?>" type="text" name="dob" class="form-control datepicker"/>
                                                <span class='text-danger'><?=form_error('dob')?></span>
                                            </div>
                                        </div>
                                        <label class="col-md-2 label-on-left">Age:  <?=requiredStar()?></label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" value="<?=set_value('age')?>" name="age" id="age" class="form-control" readonly>
                                                <span class='text-danger'><?=form_error('age')?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-2 label-on-left">Blood Group: </label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <input type="text" name="blood" value="<?=set_value('blood')?>" class="form-control up_case">
                                                <span class='text-danger'><?=form_error('blood')?></span>
                                            </div>
                                        </div>
                                        <label class="col-md-2 label-on-left">Gender:  <?=requiredStar()?></label>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <select name='gender' class='selectpicker' data-style='select-with-transition' title=' '>
                                                    <?php
                                                        $gen = set_value('gender');
                                                        if($gen == 'MALE') {
                                                            maleSelected();
                                                        }
                                                        elseif($gen =='FEMALE') {
                                                           femaleSelected();
                                                        }
                                                        else {
                                                           gender();
                                                        }
                                                    ?>
                                                </select>
                                                <span class='text-danger'><?=form_error('gender')?></span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <label class="col-md-2 label-on-left"> Address:  <?=requiredStar()?></label>
                                        <div class="col-md-10">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label"></label>
                                                <textarea name="address" rows="5" class="form-control up_case"><?=set_value('address')?></textarea>
                                                <h7 class='text-danger'><?=form_error('address')?></h7>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            
                            
                            
                            <center>
                                <div class="row"><div class="col-md-12"><h4><strong>FATHER'S DETAILS</strong></h4></div></div>
                            </center>

                            <div class="row">
                                <label class="col-md-2 label-on-left">Name: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('father_name')?>" name="father_name" class="form-control up_case">
                                        <h7 class='text-danger'><?=form_error('father_name')?></h7>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Mobile: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('father_phone')?>" name="father_phone" class="form-control">
                                        <h7 class='text-danger'><?=form_error('father_phone')?></h7>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 label-on-left">Occupation:</label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('father_job')?>" name="father_job" class="form-control up_case">
                                        <span class="text-danger"><?=form_error('father_job')?></span>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Aaadhar number:</label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('father_aadhar')?>" name="father_aadhar" class="form-control">
                                        <span class="text-danger"><?=form_error('father_aadhar')?></span>
                                    </div>
                                </div>
                            </div>

                            <center>
                                <div class="row"><div class="col-md-12"><h4><strong>MOTHER'S DETAILS</strong></h4></div></div>
                            </center>

                            <div class="row">
                                <label class="col-md-2 label-on-left">Name: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('mother_name')?>" name="mother_name" class="form-control up_case">
                                        <h7 class='text-danger'><?=form_error('mother_name')?></h7>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Mobile: </label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('mother_phone')?>" name="mother_phone" class="form-control">
                                        <h7 class='text-danger'><?=form_error('mother_phone')?></h7>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 label-on-left">Occupation:</label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('mother_job')?>"  name="mother_job" class="form-control up_case">
                                        <span class="text-danger"><?=form_error('mother_job')?></span>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Aaadhar number:</label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('mother_aadhar')?>" name="mother_aadhar" class="form-control">
                                        <span class="text-danger"><?=form_error('mother_aadhar')?></span>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <div class="row"><div class="col-md-12"><h4><strong>OFFICIAL DETAILS</strong></h4></div></div>
                            </center>

                            <div class="row">
                               <label class="col-md-2 label-on-left">Joining Date: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('doj')?>" name="doj" class="form-control datepicker"/>
                                        <h7 class='text-danger'><?=form_error('doj')?></h7>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Roll Number:</label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" value="<?=set_value('roll_no')?>" name="roll_no" class="form-control">
                                        <h7 class='text-danger'><?=form_error('roll_no')?></h7>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <label class="col-md-2 label-on-left">Class: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div onclick="setFocus()" class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <select name="classesID" onchange="getSection(this.value,'<?=base_url()?>',null)" id="teacherID"  data-live-search="true" class="selectpicker" data-style="select-with-transition" title=" ">
                                            <?php
                                            foreach ($classes as $class) {
                                                $classesID = (set_value('classesID'));
                                                if($classesID == base64_encode($class->classesID)) {
                                                    echo "<option selected value='".base64_encode($class->classesID)."'>".strtoupper($class->class_name)."</option>";
                                                }
                                                else {
                                                    echo "<option value='".base64_encode($class->classesID)."'>".strtoupper($class->class_name)."</option>";
                                                }
                                                
                                            }
                                            ?>
                                        </select>
                                        <h7 class='text-danger'><?=form_error('classesID')?></h7>
                                    </div>
                                </div>
                                <label class="col-md-2 label-on-left">Section: <?=requiredStar()?></label>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <select name="sectionID" id="sec" class="selectpicker" data-style="select-with-transition" title=" ">
                                           <option value="">Select Section</option>
                                        </select>
                                        <h7 class='text-danger'><?=form_error('sectionID')?></h7>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-md-3">Documents</label>
                                <div class="col-md-9">
                                    <div class="togglebutton">
                                        <label><input type="checkbox" name="doc" id="doc_id"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="entry input-group" style="display: none;">
                                <div class="row">
                                    <div class="col-md-3"><label class="label-on-left">File Name : <?=requiredStar()?></label></div>
                                    <div class="col-md-3 form-group">
                                        <input type="text" name="doc_name[]" class="form-control up_case">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="file" name="doc_file[]" class="label-on-left" id="file_id">
                                    </div>
                                    <div class="col-md-3">
                                        <span class="input-group-btn" style="padding-left: 80px;">
                                            <button class="btn btn-success btn-round btn-add" type="button">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <div class="form-group form-button">
                                    <button type="submit" class="btn btn-fill btn-rose pull-right" style="" id="primaryButton">Add</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>