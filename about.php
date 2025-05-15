<?php
          include 'connection.php';
          if(isset($_POST['submit']))
          {
          $fname=$_POST['first_name'];
          $lname=$_POST['last_name'];
          $contact=$_POST['phone_no'];
          $email=$_POST['email'];
          $gender=$_POST['gender'];
          $messagebox=$_POST['message'];
          $gender=$_POST['gender'];
          $sql="insert into `registrationform` (firstname,lastname,contact_no,email,messagebox,disabled) value('$fname','$lname', '$contact','$email','$messagebox','$gender')";
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
                          <a class="nav-link active text-primary" aria-current="page" href="about.php">About</a>
                     </li>
                <li class="nav-item dropdown">
                     <a class="nav-link text-dark" href="course.php"  aria-expanded="false">
                     Course 
                    </a>
                    
                </li>
            
		        <li class="nav-item dropdown">
                    <a class="nav-link  text-dark" href="gallery.php" aria-expanded="false">
                      Gallery
                    </a>
                </li>
            </ul>
			
        </div>
           
    </nav> 
	</div>	
	 <main>

				
	<section class="py-4">
        <div class="container bg-white shadow-lg p-3 mt-2 rounded ">
            <div class="row align-items-start text-primary">
               <h1 class="text-center display-4 fw-bold lh-1" >About University</h1>
                <div class="col w-50 p-4 text-primary">
                   One of three columns Khalsa College Amritsar is a leading coeducational college of North India. Established icelebrating
                   132 years of academic excellence. It has its own magnificent history. The alumni 
                   of Khalsa College have gained name and fame all over the world for themselves as well as for their alma mater. 
                   Khalsa College is the epitome of academics, sports and cultural activities. Its building has gained the status of
                   Heritage” building. This majestic building which looks like a fort and a palace represents the freedom of mind,
                   imbibes moral values and builds scientific temperament. That's why the students of this college have a unique and distinguished personality.The College wasre-accredited with 'A+' grade by NAAC (National Assessment & Accreditation Council) in the One of three columns Khalsa College Amritsar is a leading coeducational college of North India. Established icelebrating
                   
                   132 years of academic excellence. It has its own magnificent history. The alumni 
                   of Khalsa College have gained name and fame all over the world for themselves as well as for their alma mater. 
                   Khalsa College is the epitome of academics, sports and cultural activities. Its building has gained the status of
                   Heritage” building. This majestic building which looks like a fort and a palace represents the freedom of mind,
                   imbibes moral values and builds scientific temperament. That's why the students of this college have a unique and distinguished personality.The College wasre-accredited with 'A+' grade by NAAC (National Assessment & Accreditation Council) in the One of three columns Khalsa College Amritsar is a leading coeducational college of North India. Established icelebrating
                   132 years of academic excellence. It has its own magnificent history. The alumni 
                   of Khalsa College have gained name and fame all over the world for themselves as well as for their alma mater. 
                   Khalsa College is the epitome of academics, sports and cultural activities. Its building has gained the status of
                   Heritage” building. This majestic building which looks like a fort and a palace represents the freedom of mind,
                   imbibes moral values and builds scientific temperament. That's why the students of this college have a unique and distinguished personality.The College wasre-accredited with 'A+' grade by NAAC (National Assessment & Accreditation Council) in the 
                </div>
                <div class="col w-50">
                    <img src="assets\image\pexels-olly-3772711.jpg" alt="Studentspic" class="w-75 m-2  "/>
                    <img src="assets\image\pexels-olly-3772711.jpg" alt="Studentspic" class="w-75 m-2  "/>
                   
                  
                </div>
            </div>
        </div>
	</section>
	





<div class="container">

<div class="row p-4 pb-0 mb-4 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">All Courses Are Available</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 mt-5 p-0 overflow-hidden shadow-lg">
          <img class="" src="assets\image\pexels-olly-3772711.jpg" alt=""  width="520">
      </div>
    </div>


</div>



    
  
  
<footer class="text-center text-white bg-primary" >
<div class="container">
  <div class="row align-items-start">
    <div class="col-4">
       <img src="assets\image\—Pngtree—school logo design template vector_9204124.png" alt="logo" width="75s" height="75" class="my-4">
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