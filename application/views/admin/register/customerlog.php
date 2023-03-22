<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
          <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>

          <div class="card">
            <div class="card-header">
              <h4> <?php echo $title; ?> </h4>
            </div>

            <style>
                            .error {
                                color: red
                            }
                        </style>

                        <?= validation_errors(); ?>

                        <?= form_open_multipart($action); ?>

                        <div class="card-body">
                            <div class="row">
                            
                                <div class="form-group col-5">
                                <label for="plan_no">customerID </label>
                                    <input required id="customerId" type="number" class="form-control" name="customerId" value="">
                                </div>
                                <div class="form-group col-5">  
                                <label for="plan_no"> </label>
                                    <input type="submit" name="btn" class="btn btn-primary" value="search" >

                                </div>
                              
                            </div>

                        </div>
                        <?= form_close(); ?>



          </div>






          <div class="card">
            <div class="card-header">
              <h4> <?php echo $title; ?> </h4>
            </div>

            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr>
                  
                      <th>Date</th>
                      <th> Module</th>
                      <th> Time</th>
                      <th> IP</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sr = 0;
                    foreach ($rec as $r) : $sr++; 

                  
                    ?>
                      <tr>
                     
                        <td><?php echo $r->customer_id; ?></td>
                        <td><?php echo $r->module_type; ?></td>
                        <td><?php echo $r->activity_time; ?></td>
                        <td><?php echo $r->ip; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

