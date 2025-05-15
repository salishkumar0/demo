<?php
          include 'connection.php';
          if(isset($_POST['submit']))
          {
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
		      $contact_no=$_POST['phone'];
          $gender=$_POST['gender'];
          $email=$_POST['email'];
          $date_of_birth=$_POST['date_of_birth'];
          $address=$_POST['address'];
          $sql="insert into `registrationform` (firstname,lastname,contact_no,gender,email,date_of_birth,address) value('$firstname','$lastname','$contact_no','$gender','$email','$date_of_birth','$address')";
          $result=mysqli_query($conn,$sql);
          if($result){
          
          }
          else {
            die(mysqli_error($conn));
          }
          }



         
         
          ?> 

<!DOCTYPE html>
<html>
<head>
<title>university</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<link rel="stylesheet" href="assets\css\style.css">
</head>
      
<body>

<div class="d-flex align-items-start bg-body-primary mb-2  ">
  <div class="col-sm bg-primary"> 
        <div class="right-ac">		
		<div class="container">
	        <div class="textwidget text-end text-white ps-2">
				<div class="tp-ara text-white">
				   <i class="fa-solid fa-envelope text-white p-1 "></i>Gmail:- salish@gmail.com
				</div >
				<div class="tp-ara text-white ps-2 ">
				    <i class="fa-solid fa-square-phone  text-white p-1"></i>Contact:-9915634232
				</div>
		    </div>
		</div>
  
  </div>
</div>
</div>
			
			
			
			
			
    <nav class="navbar navbar-expand-lg  bg-white sticky-top">
	  <div class="container">
		
		<div class="klm abc wxy wer text-primary"> Salish University</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
		    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
	                   <li class="nav-item">
                           <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                       </li>
	            	<li class="nav-item">
                          <a class="nav-link active text-dark" aria-current="page" href="about.php">About</a>
                     </li>
                <li class="nav-item dropdown">
                     <a class="nav-link  text-dark" href="course.php"  aria-expanded="false">
					 Course
                    </a>
                </li>
            
		        <li class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#"  aria-expanded="false">
                      Gallery
                    </a>
                </li>
            </ul>
			
        </div>
            <form class="d-flex" role="search" >
             
			  <button class="btn btn-outline-primary" type="submit">registration form</button>
            </form>
    </nav> 
	</div>	
	 <main>
	  <section>		
	<div class="container " >
   <div class="row align-items-start">
    <div class="col">
       <img src="assets\image\registrationpic.jpg" alt="admission" class="w-100" >
    </div>
   
   
    <div class="col">
  
    <div class="row d-flex  ">
      <div class="col">
        <div class="card ">
          <div class="card ">
            <h3 class="m-3">Registration Info</h3>

            <form class="px-md-2" method="post">
<div class="row">
 <div class="col mb-4">

                  <div data-mdb-input-init class="form-outline datepicker">
                  
                    <label for="exampleDatepicker1" class="form-label"></label>
					  <input type="text" class="form-control" id="exampleDatepicker1" placeholder="First Name" name="firstname" />
                  </div>
                </div> <div class="col mb-4">

                  <div data-mdb-input-init class="form-outline datepicker">
                  
                    <label for="exampleDatepicker1" class="form-label"></label>
					  <input type="text" class="form-control" id="exampleDatepicker1" placeholder="Last Name" name="lastname"/>
                  </div>
                </div>


</div>
              <div data-mdb-input-init class="form-outline mb-2" >
               
               <label for="disabledTextInput" class="form-label"></label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="email" name="email">
	  
              </div>

              <div class="row">
                <div class="col mb-2">

                  <div data-mdb-input-init class="form-outline datepicker">
                  
                    <label for="exampleDatepicker1" class="form-label"></label>
					  <input type="text" class="form-control" id="exampleDatepicker1" placeholder="Contact No." name="phone" />
                  </div>
                </div>
				<div class="col mb-4">

                  <div data-mdb-input-init class="form-outline datepicker" `>
                  
                    <label for="exampleDatepicker1" class="form-label"></label>
					  <input type="text" class="form-control" id="exampleDatepicker1" placeholder="Gender" name="gender"/>
                  </div>
                </div>
				
                <div class="col-md-6 mb-2"hidden>

                  <select hidden>
                    <option value="1" >Gender</option>
                    <option value="2">Female</option>
                    <option value="3">Male</option>
                    <option value="4">Other</option>
                  </select>

                </div>
              </div>
			   <div data-mdb-input-init class="form-outline datepicker">
                  
                    <label for="exampleDatepicker1" class="form-label"></label>
					  <input type="text" class="form-control" id="exampleDatepicker1" placeholder="date of birth" name="date_of_birth" />
					  
                  </div>



              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
              
              </div>
			   <div class="mb-3">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="address" name="address" />
    </div>
              <div class="center">
              <button type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-3 center">Submit</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>
     
  </div>
	  </div>
	  </div>
	  
      
	
</section>	
  
  
<footer class="text-center text-white bg-primary" >
<div class="container">
  <div class="row align-items-start">
    <div class="col-4">
       <img src="assets\image\—Pngtree—school logo design template vector_9204124.png" alt="logo" width="75" height="75" class="my-4">
	   <h3 class="mx-2 text-white">SALISH UNIVERSITY</h3>
	  
    </div>
    <div class="col-6 col-md-2 text-start">
      <h3 class="pt-4 text-center text-dark "> Quick link</h3>
	  <ul class="list-unstyled 	ps-2 text-center">
	  <li>home </li>
	  <li>About </li>
	  <li>Gallery </li>
	  </ul>
    </div>
    <div class="col-3">
      <h3 class="pt-4 text-center text-dark "> Services</h3>
	  <ul class="list-unstyled 	ps-2 text-center">
	  <li>home </li>
	  <li>About </li>
	  <li>Gallery </li>
	  </ul>
    </div>
	   <div class="col-3">
	  <h3 class="pt-4 text-center text-dark "> Address</h3>
	  <ul class="list-unstyled 	ps-2 text-center">
	  <li> <p> NH05, Chandigarh-Ludhiana Highway, Gharuan, Mohali, Punjab, India</p> </li>
	  
	  </ul>
     
    </div>
  </div>
</div>









  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="">university</a>
  </div>
  <!-- Copyright -->
</footer>

		 </section>
	
	  
	</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>