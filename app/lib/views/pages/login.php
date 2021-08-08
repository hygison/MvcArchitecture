<?php
    $title = $data['title'];
    include_once HEADER_PATH;
?>
    <div class="">
        <div class="container mt-5">
            
            <div class="tab-area d-flex justify-content-center">
                <div class="w-50 p-2">
                    <span class="tab-single tab-active" data-target="register-tab">Register</span>
                    <span class="tab-single" data-target="login-tab">Login</span>
                </div>
                
            </div>
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
            <div class=" d-flex justify-content-center">
                <div class="row w-50 tab-content" id="register-tab">  
                    <div class="col-lg-12 p-3">
                        <label>Given Name:</label>
                        <input id="r-gname" class="form-control" placeholder="John">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Family Name:</label>
                        <input id="r-fname" class="form-control" placeholder="Doe">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Email:</label>
                        <input id="r-email" class="form-control" placeholder="john@example.com">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Password:</label>
                        <input id="r-pwd" class="form-control" type="password" placeholder="">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Confirm Password:</label>
                        <input id="r-confirm-pwd" class="form-control" type="password" placeholder="">
                        
                    </div>
     
                    <div class="col-lg-12 p-3">
                        <button id="register" class="btn btn-primary" data-form="<?php echo POSTROOT.'/register.user.php' ?>">Register</button>
                    </div>
                    
                </div>
                <div class="row w-50 tab-content"  id="login-tab" style="display: none;">  
                
                    <div class="col-lg-12 p-3">
                        <label>Email:</label>
                        <input id="l-email" class="form-control" placeholder="john@example.com">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Password:</label>
                        <input id="l-pwd" class="form-control" type="password" placeholder="">
                    </div>
     
                    <div class="col-lg-12 p-3">
                        <button id="login" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
           
  
            


        </div>
    </div>

    

<?php
    include_once SIDEBAR_PATH;
    include_once FOOTER_PATH;
?>