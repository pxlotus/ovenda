    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>User Profile2</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="store-dashbord.php"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Extra</li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <!-- <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div> -->
                            
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-3 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image">  <img src="../static/seller/assets/images/3-Automobile-Reviews.jpg" class="rounded-circle user-photo" alt="User Brand Picture"> </div>
                            <div>                               
                                <h4 class="mb-0"><strong>Alizee</strong> Thomas</h4>
                                <span>Washington, d.c.</span>
                            </div>
                            <!-- <div class="m-t-15">
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-secondary">Message</button>
                            </div>                             -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Information Summary</h2>                           
                        </div>
                        <div class="body">                            
                            <small class="text-muted">Shop Name: </small>
                            <p>ovenda</p>
                            <hr>
                            <small class="text-muted">Business/ Brand Name: </small>
                            <p>harisbenzz ltd</p>
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>                        
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <hr>
                            <small class="text-muted">Date of Opening: </small>
                            <p class="mb-0">October 22th, 1990</p>
                            <hr>                               
                            <small class="text-muted">Tax identification Number(TIN): </small>
                            <p>989y69y87978787</p>  
                            <hr>
                            <small class="text-muted">Business Registration Number: </small>
                            <p>003948238</p>                       
                        </div>
                    </div>                                        
                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new d-flex justify-content-between">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Overview">General Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Business Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Security">Securiyt Detail</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content padding-0">

                        <div class="tab-pane active" id="Overview">
                        <div class="card">
                                <div class="body">
                                    <h6>Basic Information</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="shop Name">
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Account Manager's Name">
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="clas" name="shop category" type="text" value="Shop Category" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date created">
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>              

                        </div>

                        <div class="tab-pane" id="Settings">
                            <div class="card">
                                <div class="body">
                                    <h6>Business Information</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Business Name">
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Company Legal Representative">
                                            </div>                                                    
                                            <div class="form-group">
                                                <!-- <span class="helper-text">Registration Number</span> -->
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-registered"></i></span>
                                                    </div>
                                                    <input class="form-control" name="regno" type="text" placeholder="Business Registered number" required>
                                                </div>
                                            </div>                                               
                                            <div class="form-group">
                                                <!-- <span class="helper-text">Tax Identification number (TIN)</span> -->
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input class="form-control" name="Tin" placeholder="Tax Identification Number" required>
                                                </div>
                                            </div>                                                                                                                                                                                                
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Address Line 1">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Address Line 2">
                                            </div>                                                                                       
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="">-- Select Town --</option>
                                                    <option value="AX">Entebbe</option>
                                                    <option value="AF">Kampala</option>
                                                    <option value="AX">Kamwokya</option>                                                    
                                                    <option value="AX">Kawempe</option>
                                                    <option value="AL">Ntinda</option>                                                    
                                                </select>
                                            </div>                                            
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Uganda" readonly>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>                            
                            
                        </div>

                        <div class="tab-pane" id="Security">                            

                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Account Data</h6>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" value="alizeethomas" disabled placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="alizee.info@yourdomain.com" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <ul class="row profile_state list-unstyled">
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-product-hunt"></i>
                                    <h5 class="mb-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                    <small>Sales</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-shopping-cart"></i>
                                    <h5 class="mb-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                    <small>Orders</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-money"></i>
                                    <h5 class="mb-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                    <small>Revenue</small>
                                </div>
                            </li>
                            <li class="col-lg-6 col-6">
                                <div class="body">
                                    <i class="fa fa-user"></i>
                                    <h5 class="mb-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                    <small>Brand Views</small>
                                </div>
                            </li>                            
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
