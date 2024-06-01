<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Imran's Ecommerce</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <!-- product link -->
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>

              <!-- about us link -->
              <li class="nav-item">
                <a href="./about.php" class="nav-link">About us</a>
              </li>

              <!-- contact us link  -->
              <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
              </li>

              <!-- cart link -->
              <li class="nav-item">
                <a href="./cart.php" class="nav-link">Cart</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Product Control
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./add-product.php">Add Product</a></li>
                 
                </ul>
              </li>

              <!-- login link -->
              <li class="nav-item">
                <a href="./login.php" class="btn btn-outline-success">Login</a>
              </li>

               <!-- registration link -->
               <li class="nav-item ms-1">
                <a href="./registration.php" class="btn btn-outline-warning">Register</a>
              </li>
              
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>