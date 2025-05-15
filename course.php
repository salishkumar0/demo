<?php 
include 'connection.php';
$res=array();
$sql="select * from course where del_status=0";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $new_img = $_FILES['image'];

  if ($new_img['name'] != '') {
      $filename = $new_img['name'];
      $tempfilename = $new_img['tmp_name'];
      $folder = 'assets/images/course/' . $filename;
      move_uploaded_file($tempfilename, $folder);
  } else {
      $filename = $old_img;
  }}


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
                          <a class="nav-link active text-dark" aria-current="page" href="about.php">About</a>
                     </li>
                <li class="nav-item dropdown">
                     <a class="nav-link  text-primary" href="#"  aria-expanded="false">
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
	 
	 <section>
	 
	<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php for($i=0;$i<count($res);$i++){ ?>

        <div class="col">
          <div class="card shadow-sm">
          
              <img src="adminpanel/assets/images/course/<?php echo $res[$i]['image'] ?>" alt=""  >
            <div class="card-body">
            <h3><?php echo $res[$i]['title'] ?></h3>
              <p class="card-text">
              <?php echo $res[$i]['description'] ?>
               This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> 
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group" >
                  <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="dropdown-item" href="biotechnology.php"> more</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

        



         <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-tima-miroshnichenko-9574530.jpg" alt="logo"  >
          
            <div class="card-body">
            <h3>Chemistry</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="dropdown-item" href="chemistrydpt.php"> more</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-mjlo-2872418.jpg" alt="logo"  >
            <div class="card-body">
            <h3>Journalism</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="dropdown-item" href="journalism.php"> more</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438081.jpg" alt="logo"  >
            <div class="card-body">
            <h3>Science and technology</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="dropdown-item" href=""> more</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438072.jpg" alt="logo"  >
            <div class="card-body">
            <h3>BUSINESS MANAGEMENT</h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> <a class="dropdown-item" href=""> more</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438081.jpg" alt="logo"  >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">more</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438081.jpg" alt="logo"  >
            <div class="card-body">
              <h3></h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438072.jpg" alt="logo"  >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">more</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
             <img src="assets\image\pexels-buro-millennial-636760-1438072.jpg" alt="logo"  >
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
	 
	 </section>
	 
	 </main>
	 
	 
	 
	 
	 
	 
	 
	 
  
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