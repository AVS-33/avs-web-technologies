<?php
?>
<!-- registration form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Registration Form</title>
    <style>
    /* body{
        background-image: url("assets/img/bg/reg.jpg");
    }       */
    </style>
</head>

    <div class="container mt-5">
        <marquee behavior="alternate" direction="" style="color: red;">WELCOME TO AVS WEB TECHNOLOGIES</marquee>
    </div>
    <div class="container mt-4">
        <h1 class="text-center mb-3">Registration Form</h1>
        <h3 class="text-center mb-4">Please fill this form to create an account</h3>
        <form action="pages/register.php" method="POST">
            <div class="row mb-3">
                <label for="fname" class="col-sm-2  col-form-label">First name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fname" placeholder="enter your first name" name="fname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lname" class="col-sm-2  col-form-label">Last name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lname" placeholder="enter your last name" name="lname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="uname" class="col-sm-2  col-form-label">user name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="uname" placeholder="enter  user name" name="uname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2  col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="enter your email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pass" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="enter your password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="confirm_pass" class="col-sm-2 col-form-label">conform-Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="re-enter your password">
                </div>
            </div>

            <div class="row mb-3">
                <label for="date-of-birth" class="col-sm-2 col-form-label">Date of Birth:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gender" class="col-sm-2 col-form-label">gender:</label>
                <div class="col-sm-10">
                    <input type="radio" id="gender" name="gender" value="male"> male &nbsp; <input type="radio" id="gender" name="gender" value="female"> female &nbsp;<input type="radio" id="gender" name="gender" value="other"> other&nbsp;
                </div>
            </div>
            <div class="row mb-3">
                <label for="mobile-number" class="col-sm-2 col-form-label">Mobile Number:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="mobile-number" name="mobile-number" placeholder="enter your mobile number" minlength="10">
                </div>
            </div>
            <div class="row mb-3">
                <label for="qualification" class="col-sm-2 col-form-label">Qualification:</label>
                <div class="col-sm-10">
                    <select name="qualification" id="" class="form-select">
                        <option value="">--select your qualification--</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC" >HSC</option>
                        <option value="BSC">BSC</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="MBA">MBA</option>
                        <option value="PHD">PHD</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Adress:</label>
                <div class="col-sm-10">
                    <textarea name="address" id="" cols="3" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="resume" class="col-sm-2 col-form-label">Resume:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="resume" name="resume">
                </div>
            </div>
            <div class="row mb-3">
                <label for="photo" class="col-sm-2 col-form-label">profile-photo:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>
            <div class="row mb-3">
                <label for="job-title" class="col-sm-2 col-form-label">Job-title:</label>
                <div class="col-sm-10">
                    <select name="job-title" id=" job-title" class="form-select">
                        <option value="">--select job-title--</option>
                        <option value="web developer">WEB DEVOLOPER</option>
                        <option value="phyton developer">PHYTHON DEVOLOPER</option>
                        <option value="java developer">JAVA DEVOLOPER</option>
                        <option value="php developer">PHP DEVOLOPER</option>
                        <option value="javascript developer">JAVASCRIPT DEVOLOPER</option>
                        <option value="front-end developer">FRONT-END DEVOLOPER</option>
                        <option value="back-end developer">BACK-END DEVOLOPER</option>
                        <option value="full-stack developer">FULL-STACK DEVOLOPER</option>
                    </select>
                </div>
            </div>
            <div class="form-group ">
	            	<div class="ms-5 mt-5">
		            	
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
                                      <label class="checkbox-wrap checkbox-primary">Accept <a href="#">Terms & Conditions</a>
									</label>
								</div>
									            </div>
            <div class="row mb-3 mt-5">
                <div class="col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn  btn-group-lg btn-primary">Submit</button>
                    <button type="reset" class="btn btn-group-lg btn-primary ">Reset</button>
                </div>
            </div>
            


        </form>
</body>

</html>