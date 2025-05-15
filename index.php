<?php
          include 'connection.php';
          if(isset($_POST['submit']))
          {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $contact=$_POST['phone'];
          $messagebox=$_POST['comment'];
          $sql="insert into `contact` (name,email,phone_no,comment) value('$name', '$email','$contact','$messagebox')";
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
<style>
          /* Section Gallary Start */
.gallary{
    margin-top: 50px;
}
.gallary .card{
    border-radius: 10px;
    box-shadow: rgba(0,0,0,0.1) 0px 4px 12px;
    cursor: pointer;
}
.gallary .card img{
    border-radius: 10px;
    transition: 0.5s;
}
.gallary .card img:hover{
    transform: scale(1.1);
}
</style>      

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
				   <i class="fa-solid fa-envelope text-white p-1 "></i>Gmail:- salishkumar331@gmail.com
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
		 
		<div class="klm abc wxy wer text-primary">Salish University</div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
		    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
	                   <li class="nav-item">
                           <a class="nav-link active text-primary" aria-current="page" href="index.php">Home</a>
                       </li>
	            	<li class="nav-item">
                          <a class="nav-link active text-darks" aria-current="page" href="about.php">About</a>
                     </li>
                <li class="nav-item dropdown">
                     <a class="nav-link  text-dark" href="course.php" aria-expanded="false">
                     Course 
                    </a>
                </li>
            
		        <li class="nav-item dropdown">
                    <a class="nav-link  text-dark" href="index.php#gallary" aria-expanded="false">
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
	 <main>
	    <section id="banner-area" class="position-relative" hidden>
		         <img src="assets\image\bgphoto.jpg" alt="backgroundimage" class="d-block img-fluid  " >
		            <div class="position-absolute top-50 start-50 translate-middle px-5 bn-text-area w-100" > 
		                <h1 class=" mb-3 text-white fw-bold" >university</h1>
		                <p class="text-white ">
		                  “Skill is only developed by hours and hours of work.” – Usain Bolt
		                </p>
		            </div>
		</section> 
				
				
	<section>
				
		
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets\image\bannerwalipic.jpg" class="d-block w-100" alt="...">
                        </div>
                            <div class="carousel-item">
                                <img src="assets\image\bannerimagehai.jpg" class="d-block w-100" alt="...">
                            </div>
                                <div class="carousel-item">
                                   <img src="assets\image\pexels-olly-3772711.jpg" class="d-block w-100" alt="...">
                                </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
            </div>
	</section>
				
				
				

<div class="overlay">

<div class="text text-white">
	<div class="wrapper">
		<div id="L" class="letter">U</div>
		<div class="shadow">U</div>
	</div>
	<div class="wrapper">
		<div id="I" class="letter">N</div>
		<div class="shadow">N</div>
	</div>
	<div class="wrapper">
		<div id="G" class="letter">I</div>
		<div class="shadow">I</div>
	</div>
	<div class="wrapper">
		<div id="H" class="letter">V</div>
		<div class="shadow">V</div>
	</div>
	<div class="wrapper">
		<div id="T" class="letter">E</div>
		<div class="shadow">E</div>
	</div>
	<div class="wrapper">
		<div id="N" class="letter">R</div>
		<div class="shadow">R</div>
	</div>
	<div class="wrapper">
		<div id="Stwo" class="letter">S</div>
		<div class="shadow">S</div>
	</div>
	<div class="wrapper">
		<div id="Stwo" class="letter">I</div>
		<div class="shadow">I</div>
	</div>
	<div class="wrapper">
		<div id="Stwo" class="letter">T</div>
		<div class="shadow">T</div>
	</div>
	
	<div class="wrapper">
		<div id="Stwo" class="letter">Y</div>
		<div class="shadow">Y</div>
	</div>
	
</div>
</div>
				
	<section class="py-4">
        <div class="container bg-white shadow-lg p-3 mt-2 rounded ">
            <div class="row align-items-start text-primary">
               <h1 >About University</h1>
                <div class="col w-50 p-4 text-primary">
                A university is an institution of higher education and research that awards academic degrees in several academic disciplines.
				Universities can be classified into different types, such as public, private, online, research, and liberal arts universities.
				Public universities are funded by the government and are open to all students, while private universities are funded by private
				organizations and may have selective admissions. Online universities offer online courses and degree programs,
				while research universities focus on research and academic excellence. Liberal arts universities, 
				on the other hand, focus on humanities, social sciences, and natural sciences.
                </div>
                <div class="col w-50">
                    <img src="assets\image\pexels-olly-3772711.jpg" alt="Studentspic" class="w-75 m-2  "/>
                </div>
            </div>
        </div>
	</section>
	<!--
	<section class="py-4 ">
	    <div class="container bg-primary shadow-lg   ">
	       <h2 class="m-0 py-2 text-white">Gallery</h2>
	    </div>
	<div class="container bg-primary  ">
	
	    <div class="row">
	
	        <div class="col-md-3 bg-primary">
	            <div class="card m-2 shadow-lg rounded " >
                    <img src="assets\image\holipicture.jpg" class="card-img-top " alt="...">
                    <div class="card-body" hidden>
                                <h5 class="card-title" hidden>HOLI</h5>
                                         <p class="card-text" hidden> London Campus students celebrated the
                                           	Indian festival of Holika Dahan at the university on Thursday 24th March.</p>
                    </div>
                </div>
	        </div>
		    <div class="col-md-3 bg-primary">
		        <div class="card m-2 shadow-lg  rounded " >
                         <img src="assets\image\craftingpicture.jpg" class="card-img-top bg-primary" alt="...">
                    <div class="card-body" hidden>
                            <h5 class="card-title" hidden>Drawing Competition </h5>
                             <p class="card-text" hidden>The drawing competition served as a successful platform for students to
	                                   engage with the concept of voting and its significance in a democracy.</p>
                    </div>
                </div>
	        </div>
		    <div class="col-md-3 bg-primary">
		        <div class="card m-2 shadow-lg  rounded " >
                   <img src="assets\image\basketball.jpg" class="card-img-top bg-primary" alt="...">
                    <div class="card-body"hidden>
                       <h5 class="card-title" hidden></h5>
                        <p class="card-text" hidden>Whether rain or shine, summer or winter – running takes place at different ability levels the </p>
                    </div>
                    </div>
	            </div>
		    <div class="col-md-3 bg-primary">
		         <div class="card m-2 shadow-lg  rounded " >
                    <img src="assets\image\basketball.jpg" class="card-img-top bg-primary" alt="...">
                    <div class="card-body" hidden>
                            <h5 class="card-title"hidden>Card title</h5>
                          <p class="card-text"hidden>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
	        </div>
	
	
	    </div>
	</div>
	
	<div class="container bg-primary pb-4 shadow-lg   ">
	<div class="row">
	
	<div class="col-md-3">
	
	<div class="card m-2 shadow-lg  rounded " >
  <img src="assets\image\runningpicture.jpg" class="card-img-top " alt="...">
  <div class="card-body" hidden>
    <h5 class="card-title"hidden>athletics</h5>
    <p class="card-text" hidden>Whether rain or shine, summer or winter – running takes place at different ability levels throughout the year.</p>
  </div>
</div>
	
	</div>
		<div class="col-md-3">
		<div class="card m-2shadow-lg rounded " >
  <img src="assets\image\football.jpg" class="card-img-top" alt="...">
  <div class="card-body" hidden>
    <h5 class="card-title" hidden>Card title</h5>
    <p class="card-text" hidden>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
		<div class="col-md-3">
		<div class="card m-2 shadow-lg  rounded " >
  <img src="assets\image\cricket.jpg" class="card-img-top" alt="...">
  <div class="card-body" hidden>
    <h5 class="card-title"hidden>Card title</h5>
    <p class="card-text" hidden>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
		<div class="col-md-3">
		<div class="card m-2 shadow-lg  rounded " >
  <img src="assets\image\basketball.jpg" class="card-img-top" alt="...">
  <div class="card-body" hidden>
    <h5 class="card-title"hidden>Card title</h5>
    <p class="card-text" hidden>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
	
	
	</div>
	</div>
      
	
	</section>
      -->
  <!--section class="gallery" id="gallery">
						<div class="container bg-light py-5">
							<div class="row text-center bold">
								<div class="col-12 mb-4">
									<h1 class="display-4">Recent Events</h1>
									<p class="lead">Explore our recent events and memorable moments</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\cricket.jpg" class="img-fluid rounded shadow-sm" alt="Gallery Image 1">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										During Rehearsals
									</div>
								</div>
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\holipicture.jpg" class="img-fluid rounded shadow-sm" alt="Gallery Image 2">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										London
									</div>
								</div>
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\football.jpg" class="img-fluid rounded shadow-sm" alt="Gallery Image 3">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										New York
									</div>
								</div>
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\football.jpg" class="img-fluid rounded shadow-sm" alt="Gallery Image 4">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										Chicago
									</div>
								</div>
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\football.jpg" class="img-fluid rounded shadow-sm" alt="Gallery Image 5">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										Vancover
									</div>
								</div>
								<div class="col-md-4 gallery-wrapper position-relative mb-4">
									<img src="assets\image\football.jpg"class="img-fluid rounded shadow-sm" alt="Gallery Image 6">
									<div class="gallery-caption position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-50 py-2">
										Paris
									</div>
								</div>
							</div>
						</div>
					</section-->
         
          <!--Gallery section start-->
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

			<!--Gallery section end-->


	


<div>  
  <div class="container ">
    <div class="row">
    <div class="col-sm m-4 shadow rounded ">
						<h2 class="mb-2  text-primary">We are one call away</h2>
						<ul class="list-unstyled fs-5">
							<li class="mb-2"><a class=" dropdown-item " > 45678946 </a>|
							<a >+91 9915634232</a></li>
							<li class="mb-4"><a ><i class="bi bi-envelope me-1 text-warning"></i>salishkumar2gmail.com</a></li>
							<li class="mb-4"><i class="bi bi-geo-alt me-1 text-warning"></i> Jalandhar-Pathankot,</li>
							<li><i class="bi bi-geo-alt me-1 text-warning"></i> National Highway, Jalandhar, Punjab 144012</li>
						</ul>
					</div>
    <div class="col-sm m-4">
          
    <div class="bg-warning-g p-4 rounded shadow">
							<h2 class="mb-4 text-primary">Contact Us</h2>
							<form method="post" id="add_contact" action="">
								
								<div class="mb-3 mt-3">
									<input type="text" class="form-control" name="name" placeholder="Name" required="">
								</div>
								<div class="mb-3 mt-3">
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
								<div class="mb-3 mt-3">
									<input type="tel" class="form-control" name="phone" placeholder="Phone" required="">
								</div>
								<div class="mb-3 mt-3">
									<textarea class="form-control" name="comment" placeholder="Comment" required=""></textarea>
								</div>
								             	
								<button type="submit" name="submit" class="btn bg-primary text-white w-100">Submit</button>
							</form>
						</div>

    </div>
  </div>
</div>
  </div>


<div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <div class="carousel-inner py-4">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong m-4" src="assets\image\prashantji.jpg" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Prashant</h5>
            <p>cyber security</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
               10,000000000 package
            </p>
						<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
          </div>

          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong m-4" src="assets\image\salish jassal.jpg" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Salish kumar</h5>
            <p>web developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              10,000000000 package
            </p>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
          </div>

          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong m-4" src="assets\image\avinash.jpg" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3">Avinash Rana </h5>
            <p>back end</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
			   10,000000000 package
            </p>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
			<i class="fa-solid fa-star"></i>
          </div>
        </div>
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
	  <li> <p> Jalandhar-Pathankot, National Highway, Jalandhar, Punjab 144012</p> </li>
	  
	  </ul>
     
    </div>
  </div>
</div>









  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="https://davuniversity.org/">university</a>
  </div>
  <!-- Copyright -->
</footer>

		 </section>
	
	  
	</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>