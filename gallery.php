<?php
          include 'connection.php';
          if(isset($_POST['submit']))
          {
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
		  $contact_no=$_POST['phone'];
          $email=$_POST['email'];
          $messagebox=$_POST['comment'];
          $address=$_POST['address'];
          $sql="insert into `registrationform` (name,email,phone_no,comment) value('$firstname','$lastname','$contact_no','$email','$contact','$messagebox')";
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

<div class="row" hidden >
	<div class="col-3 offset-9"><div class="bg-danger">dsgdfsg</div></div>
	
</div>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" hidden>

	  <div class="container">
		<a class="navbar-brand" href="#">Logo</a>
		
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#main-nav">
		  <span class="navbar-toggler-icon"></span>
		</button>
    <div class="offcanvas offcanvas-start" id="main-nav">
		<!-- Links -->
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" href="#">Link 1</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Link 2</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Link 3</a>
		  </li>
		</ul>
	  </div>
	  </div>

	</nav>



<div class="d-flex align-items-start bg-body-primary mb-2  ">
  <div class="col-sm bg-primary"> 
        <div class="right-ac">		
		<div class="container">
	        <div class="textwidget text-end text-white ps-2">
				<div class="tp-ara text-white">
				   <i class="fa-solid fa-envelope text-white p-1 "></i>    Gmail:- salish@gmail.com
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
                    <a class="nav-link text-primary" href="gallery.php"  aria-expanded="false">
                      Gallery
                    </a>
                </li>
            </ul>
			
        </div>
           
		<form class="d-flex" role="search" >
             <!-- <input class="form-control me-2 text-primary" type="search" placeholder="Search" aria-label="Search"> -->
			  <button class="btn btn-outline-primary" type="submit" href="registration.php"> <a class="dropdown-item" href="registration.php"> registration form</a> </button>
            </form>
             
			
    </nav> 
	</div>	
	
	<section  class="gallary" id="gallary">
				<div class="container">
					<div class="main-text">
						<h1><span>G</span>allery</h1>
				</div>
				<div class="container">
					<div class="row" style="margin-top: 30px;">
						<div class="col-md-4 py-3 py-md-0">
							<div class="card">
								<img src= "assets/image/football.jpg" alt="#" class="d-block w-100 shadow" height="230px;">
							</div>
						</div>	
						<div class="col-lg-4 ">
							<div class="card">
								<img src= "assets/image/cricket.jpg" alt="#" class="d-block w-100 shadow" height="230px;">
							</div>
						</div>	
						<div class="col-lg-4 ">
							<div class="card">
								<img src= "assets/image/craftingpicture.jpg" alt="#" class="d-block w-100 shadow" height="230px;">
							</div>
						</div>		
					</div>
					
					<div class="row" style="margin-top: 30px;" >
						
							<div class="col-lg-4 ">
								<div class="card">
									<img src= "assets/image/runningpicture.jpg" alt="#" class="d-block w-100 shadow" height="230px;" >
								</div>
							</div>	
							<div class="col-lg-4  ">
								<div class="card">
									<img src= "assets/image/basketball.jpg" alt="#" class="d-block w-100 shadow" height="230px;">
								</div>
							</div>	
							<div class="col-lg-4 ">
								<div class="card">
									<img src= "assets/image/dance pic.jpg" alt="#" class="d-block w-100 shadow" height="230px;">
								</div>
							</div>		
					

					</div>
				</div>
				<div class="row" style="margin-top: 30px;" ></div>
						
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
	  <a class="nav-link active text-light " aria-current="page" href="index.php">Live Class</a>
	  <a class="nav-link active text-light" aria-current="page" href="about.php">Support</a>
	  <a class="nav-link  text-light" href="index.php#gallary" aria-expanded="false">Career</a>
	  </ul>
    </div>
    <div class="col-3">
      <h3 class="pt-4 text-center text-dark "> Services</h3>
	  <ul class="list-unstyled 	ps-2 text-center">
	  <a class="nav-link active text-light " aria-current="page" href="index.php">Home</a>
	  <a class="nav-link active text-light" aria-current="page" href="about.php">About</a>
	  <a class="nav-link  text-light" href="index.php#gallary" aria-expanded="false"> Gallery</a>
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