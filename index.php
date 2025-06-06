  
  <?php include 'layouts/header.php'; ?>

  
    <!------------------------------------------------------ Home---------------------------------- -->

    <section id="home">
        <div class="container">
            <h5>NEW ARIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <button>Shop Now</button>
        </div>
    </section>

    <!-- ------------------------------------------Brand----------------------------------------------- -->

    <section id="brand" class="container">
      <div class="row">
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.webp"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.jpg"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.jpg"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.png"/>
      </div>
    </section>

    <!-- ---------------------------------------New--------------------------------------------------------- -->

    <section id="new" class="w-100">
      <div class="row mx-auto pt-5">
        <!-- one -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/1.jpg"/>
          <div class="details">
            <h2>Extremly Awesome Shoes</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- Two -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/2.avif"/>
          <div class="details">
            <h2>Awesome Jakets</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- Three -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/3.jpg"/>
          <div class="details">
            <h2>50% OFF Watches</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>

      </div>
    </section>

    <!-- -------------------------------------------------Featured------------------------------------------------------- -->

    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-1 py-1">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check out featured products</p>
      </div>
      <div class="row mx-auto container-fluid">

       <?php include 'server/get_feature_products.php'; ?>

       <?php while($row=$featured_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price"><?php echo "Rs " . $row['product_price']; ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>

        </div>

        <?php } ?>
               
      </div>
    </section>

    <!-- ------------------------------Banner---------------------------------------------------------------- -->

    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'5 SALE</h4>
        <h1>Autumn Collection<br>UP to 30% OFF</h1>
        <button class="text-uppercase">shop now</button>
      </div>
    </section>

   <!-- ------------------------------------clothes---------------------------------------------------------- -->

   <section id="featured" class="my-5">
    <div class="container text-center mt-1 py-1">
      <h3>Dresses & Coats</h3>
      <hr class="mx-auto">
      <p>Here you can check out our amazing clothes</p>
    </div>
    <div class="row mx-auto container-fluid">

     <?php include 'server/get_coats.php'; ?>

     <?php while($row=$coats_products->fetch_assoc()) { ?>


      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
        <h4 class="p-price"><?php echo "Rs " . $row['product_price']; ?></h4>
        <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
      </div>

      <?php } ?>
      
    </div>
  </section>

  <!-- ------------------------------------watches-------------------------------------------------------------------------- -->

  <section id="watches" class="my-5">
    <div class="container text-center mt-1 py-1">
      <h3>Best watches</h3>
      <hr class="mx-auto">
      <p>Check out our unique watches</p>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include 'server/get_watches.php'; ?>

      <?php while($row=$watches->fetch_assoc()) { ?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo "Rs " . $row['product_price']; ?></h4>
            <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
          </div>

      <?php } ?>
      
    </div>
  </section>



  <!-- --------------------------------shoes---------------------------------------------------------------------------------- -->

  <section id="shoes" class="my-5">
    <div class="container text-center mt-1 py-1">
      <h3>Shoes</h3>
      <hr class="mx-auto">
      <p>Here you can check out our amazing shoes</p>
    </div>
    <div class="row mx-auto container-fluid">

    <?php include 'server/get_shoes.php'; ?>

      <?php while($row=$shoes->fetch_assoc()) { ?>

              <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>"/>
                <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price"><?php echo "Rs " . $row['product_price']; ?></h4>
                <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
              </div>

      <?php } ?>

    
    </div>
  </section>

  

 <?php include 'layouts/footer.php'; ?>


  