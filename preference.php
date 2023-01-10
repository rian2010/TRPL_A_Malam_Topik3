<?php include("headeradmin.php") ;?>

        <div class="col-md-10 p-5 pt-5">
        <h3><i class="fas fa-tachometer-alt mr-3"></i> PREFERENCE </a><hr class="bg-secondary"></h3>
        <div class="row">
            <p>
                <div class="col-md-6">Switch Language</div>
                
                <div class="form-check col-md-2">
                
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Indonesia
                    </label>
                </div>
                    <div class="form-check col-md-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        English
                    </label>
                </div>
            </p>
            <p>
            
                <div class="col-md-6">Change Theme</div>    
                <div class="form-check col-md-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Black
                    </label>
                </div>
                <div class="form-check col-md-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault">
                    <label class="form-check-label" for="flexRadioDefault2">
                        White
                    </label>
                </div>
                <div class="form-check col-md-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default
                    </label>
                </div>
            </p>
            <p>
                <div class="col-md-6">Change Password</div>
                    <div class="col-md-5">
                    your old password
                    <input type="email" name="passwordlama" class="form-control" id="inputEmail3">
                    </div>
                <div class="col-md-6"></div>
                    <div class="col-md-5">
                    your new password
                    <input type="email" name="passwordbaru" class="form-control" id="inputEmail3">
                    </div>
                <div class="col-md-6"></div>
                    <div class="col-md-5">
                    your new password again
                    <input type="email" name="passwordbaru" class="form-control" id="inputEmail3">
                    </div>

                    <div class="col-md-11 row mb-3 mt-3" style="display: inline-block;">
                    <div class="col-md-1" style="float: right;">
                    <button class="btn btn-primary" type="button">save</button>
                    </div>
                    
                
<?php include ("footer.php"); ?>