  <!-- [ breadcrumb ] start -->
  <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>QC </h5>
                                            <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->


                     <pre>   <?php 
                        
                     $form_id = $formrecords[0]->id;
                     $fid_status ='fid_status';
                     $customer_id = $this->session->userdata('customer_sess')['customer_id'];
                        ?>

</pre>
                        <form  method="post"   action="<?php echo base_url().'update_form'?>" >


                        <input type="hidden"  value="<?php echo  $formrecords[0]->id; ?>" name="form_id" >
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <!-- [ page content ] start -->
                                      
                                          
                                        <div class="row"   id="resume_section" >
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="card"       >
                                                  <div class="card-header">
                                                    <h5>Image</h5>
                                                    </div>
                                                  <div class="card-block">
                                                      <div class="embed-responsive embed-responsive-1by1">
                                                        <iframe   id="resumepdf"  class="embed-responsive-item" src="<?php echo base_url().'uploads/resumes/'.$formrecords[0]->resume_id.'.pdf';?>"></iframe>
                                                     </div>
                                              
                                                  </div>
                                                </div>  
                                           </div>
                                           <div class="col-lg-12 col-xl-6">
                                                <div class="card">
                                                  <div class="card-header">
                                                    <h5>Resume Data</h5>
                                                   
                                                  </div>
                                                  <div class="card-block">
                                                    <div class="card-header">
                                                     <h4>PersonalDetails</h5>
                                                   
                                                  </div>
                                                   <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'1');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st==='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>

                                                 
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">First Name</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="fname"  id="fname"    value="<?php echo $formrecords[0]->fname;?>"   >
                                                        </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'2');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st==='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Middle Name</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="mname"  id="mname"   value="<?php echo $formrecords[0]->mname;?>">
                                                        </div>
                                                      </div>


                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'3');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Last Name</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="lname"  id="lname"  value="<?php echo $formrecords[0]->lname;?>" >
                                                        </div>
                                                      </div>
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'4');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">DOB</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="date" class="form-control <?php echo $status ;?> " name="dob" id="dob"  value="<?php echo $formrecords[0]->dob;?>" >
                                                        </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'5');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                            <div class="col-sm-3">
                                                              <label class="col-form-label">Gender</label>
                                                            </div>
                                                             <div class="col-sm-9">
                                                              <input type="text" readonly class="form-control <?php echo $status ;?>  " name="gender" id="gender" value="<?php echo $formrecords[0]->gender;?>" >
                                                             </div>
                                                        </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'6');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label"> Nationality</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?>  " name="notionality"   id="notionality"  value="<?php echo $formrecords[0]->notionality;?>"  >
                                                        </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'7');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Marital status</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="mari_status"   id="mari_status"  value="<?php echo $formrecords[0]->mari_status;?>"  >
                                                        </div>
                                                      </div>
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'8');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">passport</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="passport"  id="passport"  value="<?php echo $formrecords[0]->passport;?>"  >
                                                        </div>
                                                      </div>
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'9');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Hobbies</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="hobbies" id="hobbies"  value="<?php echo $formrecords[0]->hobbies;?>"  >
                                                        </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'10');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Language known </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> " name="lang_known"  id="lang_known"  value="<?php echo $formrecords[0]->lang_known;?>"  >
                                                        </div>
                                                      </div>
                                                      <h4>Communication Details </h4>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'11');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Address</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> "  name="address" id="address"   value="<?php echo $formrecords[0]->address;?>"  >
                                                        </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'12');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Land Mark</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                          <input type="text" readonly class="form-control <?php echo $status ;?> "   name="land_mark" id="land_mark"   value="<?php echo $formrecords[0]->land_mark;?>"  >
                                                        </div>
                                                      </div>

                                                     
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'13');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">State</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" readonly class="form-control <?php echo $status ;?> " name="state"   id="state"   value="<?php echo $formrecords[0]->state;?>"  >
                                                            </div>
                                                      </div>
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'14');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">City</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" readonly class="form-control <?php echo $status ;?> " name="city" id="city"  value="<?php echo $formrecords[0]->city;?>"  >
                                                            </div>
                                                      </div>
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'15');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Pincode</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" readonly class="form-control <?php echo $status ;?> " name="pincode"  id="pincode" value="<?php echo $formrecords[0]->pincode;?>"  >
                                                 
                                                            </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'16');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Mobile</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" readonly class="form-control <?php echo $status ;?> "  name="mobile"  id="mobile" value="<?php echo $formrecords[0]->mobile;?>"  >
                                                 
                                                            </div>
                                                      </div>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'17');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Email</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input type="text" readonly class="form-control <?php echo $status ;?> "  name="email" id="email"  value="<?php echo $formrecords[0]->email;?>" > 
                                                 
                                                            </div>
                                                      </div>

                                                      <h4>QUALIFICATION DETAILS</h4>


                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'18');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">SSC Result</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="ssc_result"  id="ssc_result" value="<?php echo $formrecords[0]->ssc_result;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'19');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">SSC Passing year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="ssc_board_uni"  id="ssc_board_uni" value="<?php echo $formrecords[0]->ssc_board_uni;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'20');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">SSC Board/University</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="ssc_pass_year"  id="ssc_pass_year"  value="<?php echo $formrecords[0]->ssc_pass_year;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                    
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'21');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">HSC Result</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="hsc_result"  id="hsc_result"   value="<?php echo $formrecords[0]->hsc_result;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'22');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">HSC Passing Year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="hsc_pass_year"  id="hsc_pass_year"  value="<?php echo $formrecords[0]->hsc_pass_year;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'23');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">HSC Board/University</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="hsc_uni"  id="hsc_uni"  value="<?php echo $formrecords[0]->hsc_uni;?>"   >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'24');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Diploma Degree</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="dip_deg"  id="dip_deg"  value="<?php echo $formrecords[0]->dip_deg;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'25');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Diploma Result</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="dip_res"  id="dip_res"   value="<?php echo $formrecords[0]->dip_res;?>" >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'26');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Diploma University</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?> " name="dip_uni"  id="dip_uni"  value="<?php echo $formrecords[0]->dip_uni;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'27');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Diploma Year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="dip_year" id="dip_year"  value="<?php echo $formrecords[0]->dip_year;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'28');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Graduation Degree</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="gradu_deg" id="gradu_deg"   value="<?php echo $formrecords[0]->gradu_deg;?>" >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'29');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Graduation Result</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="gradu_res" id="gradu_res" value="<?php echo $formrecords[0]->gradu_res;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'30');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Graduation University</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="gradu_uni" id="gradu_uni"  value="<?php echo $formrecords[0]->gradu_uni;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'31');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Graduation Year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="gradu_year"   id="gradu_year"  value="<?php echo $formrecords[0]->gradu_year;?>" >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'32');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Post Graduation Degree</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="post_grad_deg"  id="post_grad_deg"  value="<?php echo $formrecords[0]->post_grad_deg;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'33');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Post Graduation Result</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  "  name="post_grad_res"   id="post_grad_res"   value="<?php echo $formrecords[0]->post_grad_res;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'34');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Post Graduation University</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="post_grad_uni" id="post_grad_uni"  value="<?php echo $formrecords[0]->post_grad_uni;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'35');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Post Graduation Year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  "  name="post_grad_year" id="post_grad_year" value="<?php echo $formrecords[0]->post_grad_year;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'36');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Highest Level Education</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="high_lev_edu" id="high_lev_edu" value="<?php echo $formrecords[0]->high_lev_edu;?>"  > 
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->

                                                      <h3>EMPLOYMENT DETAILS</h3>

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'37');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Total Work Experience/Year</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="ttl_exp_year"  id="ttl_exp_year"  value="<?php echo $formrecords[0]->ttl_exp_year;?>"  >  
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                       <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'38');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Month</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="ttl_exp_mon"  id="ttl_exp_mon"  value="<?php echo $formrecords[0]->ttl_exp_mon;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->

                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'39');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label">Total Companies Worked For</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="company_work_for"  id="company_work_for"  value="<?php echo $formrecords[0]->company_work_for;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->
                                                     <div class="row form-group">

<?php  
$where = array('customer_id'=>$customer_id,'form_id'=>$form_id,'fid'=>'40');
$st = $this->model->hdm_get_where_row('tbl_approve',$where,$fid_status);  
if($st=='1'){  $status ='approve_c'; } else { $status ='disapprove_c'; }

 ?>
                                                        <div class="col-sm-3">
                                                          <label class="col-form-label"> Last/Current Employer</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                           <input type="text" readonly class="form-control <?php echo $status ;?>  " name="last_curr_emp"  id="last_curr_emp"  value="<?php echo $formrecords[0]->last_curr_emp;?>"  >
                                                        </div>
                                                      </div>  
                                                      <!-- end  -->

                                                    
                                                      <!-- end  -->

                                                    
                                                  </div>
                                                </div>  
                                           </div>
                                            <!-- Project statustic end -->

                                        </div>
                                        <!-- [ page content ] end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
     