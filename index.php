<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beyond The Bindings-Home</title>
    
    <?php require('inc/links.php');?>
<style>
    {
        font-family: "Poppins", sans-serif;
    }
    .h-font{
        font-family: "Merienda", cursive;
    }
</style>
</head>



<?php require('inc/header.php');?>

<!-- Carousel -->
 <div class="container-fluid px-lg-4 mt-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block"/>
      </div>
      
    </div>
    
  </div>
  </div>
  <br><br><br>

  
  <!-- Community Join Form -->
   <div class="container px-lg-4 mt-4">
    <div class="row w-100">
      <div class="col-lg-20 shadow bg-black" style="background-color:aliceblue;">
      <center><h5 class="h-font fw-bold mt-2">Join Our 📚 Booker Community! 🌟📖</h5></center>
        <form>
          <div class="row">
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" required>         

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="email" class="form-control" required>           

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Age</label>
            <input type="number" class="form-control" required>           

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Number</label>
            <input type="number" class="form-control" required>
            
          </div>
          <div class="col-12 mt-3 mb-4">
   <center> <button class="btn btn-primary" type="submit">Join</button></center>
   </div>
        </form>
      </div>
    </div>
   </div>

<br><br><br>
<br><br><br>

<!-- Recommendations Books -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> ✨ Our Recommendations ✨</h2>
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max- width: 350px; margin: auto;">
  <img src="demos/images/nature-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The Road</h5>
    <h6 class="card-title">By Cormac McCarthy</h6>
    <div class="ratings mb-4">
      <h6 class="mb-3">Rating</h6>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>


    </div>
   
    
  </div>
</div>
    </div>
    
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max- width: 350px; margin: auto;">
  <img src="demos/images/nature-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The Road</h5>
    <h6 class="card-title">By Cormac McCarthy</h6>
    <div class="ratings mb-4">
      <h6 class="mb-3">Rating</h6>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
     


    </div>
     
    
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max- width: 350px; margin: auto;">
  <img src="demos/images/nature-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">India Road</h5>
    <h6 class="card-title">By Cormac McCarthy</h6>
  
    <div class="ratings mb-4">
      <h6 class="mb-3">Rating</h6>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>


    </div>
   
   
  </div>
</div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      
    </div>
  </div>
 </div>
 
<!-- Newsletter -->
<div class="container">
    <div class="row">
      <div class="col-lg-12 shadow-none mt-6 px-3 " style="background-color:grey;" style="width:900%";>
      <center><h5 class="fs-10 fw-bold mt-4">✨📬 Our Newsletter 📰✨</h5></center>
        <form>
          <div class="row">
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" required>         

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="email" class="form-control" required>           

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Age</label>
            <input type="number" class="form-control" required>           

            </div>
            <div class="col-lg-3">
            <label for="validationCustom01" class="form-label">Location</label>
            <input type="text" class="form-control" required>
            
          </div>
          <div class="col-12 mt-3 mb-4">
   <center> <button class="btn btn-primary" type="submit">Subscribe</button></center>
        </form>
      </div>
    </div>
   </div>
  <br><br><br>
  <br><br><br>

  

 <?php require('inc/footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

  
  
</body>
</html>