<?php
include 'config.php';

if(isset($_POST['submit']))
{
    //getting the post values
  $fname=$_POST['name'];
  $email=$_POST['email'];
  $choosedoctor=$_POST['doctor'];
  $choosedate=$_POST['date'];
  $choosetime=$_POST['time'];
  $massage=$_POST['massage'];

 // die();
    $query="INSERT INTO `appoinment` ( `name`, `email`, `choose_doctor`, `choose_date`, `choose_time`, `massage`) 
                VALUES ( '$fname', '$email', '$choosedoctor', '$choosedate', '$choosetime', '$massage');";
   //die();      
  $query=mysqli_query($con, $query);
  
  ($query) ?   $succes = true : $succes = 'error' ;
  
  
//   if ($query) {
    
//        // echo "<script>alert('we will connect as soon as possible');</script>";
//         $succes = true;
//         //echo "<script type='text/javascript'> document.location ='index.php'; </script>";
//        // header("Location: index.php");
//       }
//       else
//         {
//           echo "<script>alert('Something Went Wrong. Please try again');</script>";
//         }
}


?>
<!DOCTYPE html>
<html lang="en">

<?php

include 'header.php';


?>


<head>
     <?php include 'menu.php'; ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
                    <p class="mb-4">Fill up your from some doctors appoinment.we will connect as soon as possible</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">7548914584</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">malayb760@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <!-- php code --->
                        <form method='post' action=''> 
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0"  name="email" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0"  name="phone" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="doctor">
                                        <option selected>Choose Doctor</option>
                                        <option value="1">ORTHOPEDICS</option>
                                        <option value="2">NEUROOGY</option>
                                        <option value="3">DENTIST</option>
                                        <option value="4">PULMONARY</option>
                                        <option value="5">ENT</option>
                                        <option value="6">DERMATOLOGIST</option>
                                        <option value="7">CARDIOLOGY</option>
                                        <option value="8">MEDICINE</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem" name="massage"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                        <!-- php code --->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

    <!-- Footer Start -->
<?php include 'footer.php'; ?>

</body>

</html>