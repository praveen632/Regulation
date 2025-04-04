<div class="container-fluid"> 
 <div class="row">
   <form id="form_id">  
    <div class="col-md-5">
       <label>Date Form</label>
       <input type="date" class="form-control getDate" id="first_date" value="">      
    </div>
    <div class="col-md-5">
        <label>Date To</label>
        <input type="date" class="form-control getDate" id="second_date" value="">      
    </div>
    <div class="col-md-2">
        <label></label>
        <button type="button" class="btn btn-success form-control getDate" id="submit" style="margin-top: 20px;">Submit</button>      
    </div>
    </form>
 </div>
</div>
<!-- First Row -->

<div class="col-lg-3">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="text-center">Paid Amount</h3>

                    <p class="text-center" id="total_paid_amount">10</p>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-center">Renew Amount</h3>

                    <p class="text-center" id="renewal_amount">10</p>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-center">Missed Subscription</h3>

                    <p class="text-center" id="missed_subscription">10</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">Total Users</h3>

                    <p class="text-center" id="total_users">10</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
<!-- End First Row -->

<!-- Second Row -->
<div class="col-lg-3">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 class="text-center">Total Customer</h3>

                    <p class="text-center" id="total_customers">10</p>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-center">Total New Customer</h3>

                    <p class="text-center" id="total_new_customers">10</p>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-center">No. of Enquiry</h3>
                    <p class="text-center" id="no_of_enquriry">10</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{url('/')}}/enquiry-list" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">No. of Documents</h3>

                    <p class="text-center" id="no_of_document">10</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
 
<!-- End Second Row -->
<div class="container-fluid">
    

<div class="row">
  <div class="col-lg-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Recent Enquiry</h3>
        <div class="box-tools pull-left">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Sn.</th>
                <th>Document Name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Lead From</th>
              </tr>
            </thead>
            <tbody>
                             
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>  
   
    <div class="col-lg-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Recent Customer</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>Sn.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div> 

      
   <div class="col-lg-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Recent Subscription</h3>
        <div class="box-tools pull-left">
          <button type="button" class="btn btn-box-tool" data-widget="collapse">
            <i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove">
            <i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Subs Name</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th>Transaction Status</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
   </div>  
    <div class="col-lg-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Renewal Subscription</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>Sn.</th>
                <th>Name</th>
                <th>Subs Name</th>
                <th>Expiry Date</th>
                <th>Status</th>
                <th>Transaction Status</th>
              </tr>
            </thead>
            <tbody>
            
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>