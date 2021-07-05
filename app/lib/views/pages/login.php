<?php
    $title = $data['title'];
    include_once HEADER_PATH;
?>
    <div class="">
        <div class="container mt-5">
            
            <div class="tab-area  d-flex justify-content-center">
                <div class="tab-content w-50 d-flex p-3">
                    <div class="tab active" checked>Register</div>
                    <div class="tab">Login</div>
                </div>
            </div>

            <div class=" d-flex justify-content-center">
                <form class="row w-50">  
                    <div class="col-lg-12 p-3">
                        <h4>Register</h4>
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Given Name:</label>
                        <input class="form-control" placeholder="John">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Family Name:</label>
                        <input class="form-control" placeholder="Doe">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Email:</label>
                        <input class="form-control" placeholder="john@example.com">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Password:</label>
                        <input class="form-control" type="password" placeholder="">
                    </div>
                    <div class="col-lg-12 p-3">
                        <label>Confirm Password:</label>
                        <input class="form-control" type="password" placeholder="">
                    </div>
                </form>
            </div>
           
  
            


        </div>
    </div>

    

<?php
    include_once SIDEBAR_PATH;
    include_once FOOTER_PATH;
?>