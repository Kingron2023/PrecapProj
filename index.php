<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Drop System</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html">
        <img src="./images/Logo/logo.png" alt="Logo" width="100" height="48">
      </a>

      <!-- Login Button trigger modal -->
      <div class="d-grid gap-2 d-inline-flex me-md-3">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" >
            <img src="./images/Logo/login.png " alt="login" width="37" height="37" >
        </a>
      </div>



      <a href="#"class="text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <th scope="col">Cart <span>0</span> </th>
      </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 container-fluid">
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><button class="dropdown-item" type="button"><a href="./agriMachines.html">Agricultural Machineries</a></button></li>
                <li><button class="dropdown-item" type="button"><a href="./laptopscomputer.html">Laptops and Computers</a></button></li>
                <li><button class="dropdown-item" type="button" ><a href="./tools&Equipments.html">Tools and Equipments</a></button></li>
                <li><button class="dropdown-item" type="button" ><a href="./mobile&gadgets.html">Mobile and Gadgets</a></button></li>
                <li><button class="dropdown-item" type="button" ><a href="./home&living.html">Home and Living</a></button></li>
                <li><button class="dropdown-item" type="button" ><a href="./womensapparel.html">Women's Apparel </a></button></li>
                <li><button class="dropdown-item" type="button" ><a href="./mensapparel.html">Men's Apparel</a></button></li>
              </ul>
          </li>
         

          <div class="nav-item container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control form-control-sm me-1" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><b>Search</b></button>
            </form>
            
          </div>
        </ul>
      </div>
    </div>
  </nav>
 

 <div class="breadcrumb-group">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Categories</a></li>
        <li class="breadcrumb-item">Home and Living</li>
      </ol>
    </nav>
</div>

<!-- carousel Area -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="./images/carousel/Slide1.jpg" class="d-block w-100 rounded-4" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./images/carousel/Slide2.jpg" class="d-block w-100 rounded-4" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./images/carousel/Slide3.jpg" class="d-block w-100 rounded-4" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="./images/carousel/Slide4.jpg" class="d-block w-100 rounded-4" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--  -->
<!-- categorie agri -->
<div class="categoryName">
<h2>Agricultural Machineries</h2>
</div>

<div class="container">
<div class="categories">

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat0_ProductInfoPage1.html"><img class="image1" src="./images/Agricultural Machines/Mushroom Fruiting Bag Filling Machine/image1.jpg" alt="image1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat0_ProductInfoPage1.html">Mushroom Fruiting Bag<br>Filling Machine</a></h6>
                <h6 class="price">₱35,000</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat0_ProductInfoPage2.html"><img class="image1" src="./images/Agricultural Machines/Multi-Purpose Shredder/image1.jpg" alt="image1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat0_ProductInfoPage2.html">Multi-Purpose Shredder</a></h6>
                <h6 class="price">₱38,000</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat0_ProductInfoPage3.html"><img class="image1" src="./images/Agricultural Machines/Multi-Purpose Shredder with wood Chipper/image1.jpg" alt="image1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat0_ProductInfoPage3.html">Multi-Purpose Shredder with Wood Chipper</a></h6>
                <h6 class="price">₱75,000</h6>
            </div>
        </div>
    </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat0_ProductInfoPage4.html"><img class="image1" src="./images/Agricultural Machines/Grass Chopper Machine/image1.jpg" alt="image1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat0_ProductInfoPage4.html">Grass Chopper Machine</a></h6>
                <h6 class="price">₱29,999</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat0_ProductInfoPage5.html"><img class="image1" src="./images/Agricultural Machines/Banana Trunk Chopper/agri1.jpg" alt="jersey1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat0_ProductInfoPage5.html">Banana Trunk Chopper</a></h6>
              <h6 class="price">₱32,500</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat0_ProductInfoPage6.html"><img class="image1" src="./images/Agricultural Machines/Multi-fiber Stripper/agri1.jpg" alt="shoes1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat0_ProductInfoPage6.html">Multi-fiber Stripper</a></h6>
              <h6 class="price">₱32,800</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat0_ProductInfoPage7.html"><img class="image1" src="./images/Agricultural Machines/Village Corn MillRice Mill Coffee Huller/agri1.jpg" alt="short1.jpg"></a>
    <div class="overlay">
        <div class="text">
            <h6><a href="./productInfoHTML/cat0_ProductInfoPage7.html">Village Corn MillRice Mill Coffee Huller</a></h6>
            <h6 class="price">₱31,250</h6>
        </div>
    </div>
</div>

<div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
  <a href="./productInfoHTML/cat0_ProductInfoPage8.html"><img class="image1" src="./images/Agricultural Machines/Bio Shredder Heavy Duty/agri1.jpg" alt="shirt1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat0_ProductInfoPage8.html">Bio Shredder Heavy Duty</a></h6>
              <h6 class="price">₱28,999</h6>
          </div>
      </div>
  </div>
</div>
</div>

  <!-- category Area -->
 
  <!-- category One -->
  <div class="categoryName">
    <h3> Laptops and Computers</h3>
</div>

<div class="container">
    <div class="categories">

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
            <a href="./productInfoHTML/cat1_ProductInfoPage1.html"><img class="image1" src="./images/Laptops and Computers/Acer/acer1.jpg" alt="acer1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat1_ProductInfoPage1.html">AFFORDABLE COMPUTER<br> WITH Acer LED Monitor</a></h6>
                    <h6 class="price">₱20,000 </h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat1_ProductInfoPage2.html"><img class="image1" src="./images/Laptops and Computers/Asus/asus1.jpg" alt="asus1.jpg"></a>                
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat1_ProductInfoPage2.html">ASUS ROG STRIX CPU AMD R7-5800X GTX 1650</a></h6>
                    <h6 class="price">₱49,500</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat1_ProductInfoPage3.html"><img class="image1" src="./images/Laptops and Computers/Dell/dell1.jpg" alt="dell1.jpg"></a>                
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat1_ProductInfoPage3.html">Dell OptiPlex Intel Core i5-4590 8GB RAM, 120gb SSD</a></h6>
                  <h6 class="price">₱4,450</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat1_ProductInfoPage4.html"><img class="image1" src="./images/Laptops and Computers/Hp/hp1.jpg" alt="hp1.jpg"></a>                
             <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat1_ProductInfoPage4.html">HP Desktop Unit ProDesk Desktop Unit </a></h6>
                    <h6 class="price">₱3,100</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat1_ProductInfoPage5.html"><img class="image1" src="./images/Laptops and Computers/Lenovo/lenovo1.jpg" alt="lenovo1.jpg"></a>                
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat1_ProductInfoPage5.html">Desktop Computer Set Lenovo with Monitor</a></h6>
                  <h6 class="price">₱3,517 </h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat1_ProductInfoPage6.html"><img class="image1" src="./images/Laptops and Computers/Mac/mac1.jpg" alt="mac1.jpg"></a>                
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat1_ProductInfoPage6.html">Apple Office Design Game Home Desktop Computer</a></h6>
                  <h6 class="price">₱63,500</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat1_ProductInfoPage7.html"><img class="image1" src="./images/Laptops and Computers/Msi/msi1.jpg" alt="msi1.jpg"></a>                
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat1_ProductInfoPage7.html">Msi Mpg Velox 100R - Supports ATX / PC Case</a></h6>
                <h6 class="price">₱5,950</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat1_ProductInfoPage8.html"><img class="image1" src="./images/Laptops and Computers/Samsung/samsung1.jpg" alt="samsung1.jpg"></a>                
            <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat1_ProductInfoPage8.html">Samsung Chromebook 4 Platinum Gray </a></h6>
                  <h6 class="price">₱8,295</h6>
              </div>
          </div>
    </div>
  </div>
</div>

    <!-- category Area -->
    <!-- category 2 -->
    <div class="categoryName">
        <h2>Tools and Equipments</h2>
    </div>

    <div class="container">
        <div class="categories">

            <div class="products">
                <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
              <a href="./productInfoHTML/cat2_ProductInfoPage1.html"><img class="image1" src="./images/Tools and Equipments/Circular Saw/saw1.jpg" alt="saw1.jpg"></a>
                <div class="overlay">
                    <div class="text">
                        <h6><a href="">INGCO Circular Saw 7-1/4"</a></h6>
                        <h6 class="price">₱2,800 </h6>
                    </div>
                </div>
            </div>

            <div class="products">
                <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
              <a href="./productInfoHTML/cat2_ProductInfoPage2.html"><img class="image1" src="./images/Tools and Equipments/Cordless Saw/cordless1.jpg" alt="cordless1.jpg"></a>

                <div class="overlay">
                    <div class="text">
                        <h6><a href="./productInfoHTML/cat2_ProductInfoPage2.html">Cordless Circular Saw</a></h6>
                        <h6 class="price">₱3,475</h6>
                    </div>
                </div>
            </div>

            <div class="products">
                <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
              <a href="./productInfoHTML/cat2_ProductInfoPage3.html"><img class="image1" src="./images/Tools and Equipments/Drill/drill1.jpg" alt="drill1.jpg"></a>
              <div class="overlay">
                  <div class="text">
                      <h6><a href="./productInfoHTML/cat2_ProductInfoPage3.html">MAKITA Electric Hammer Drill 500W</a></h6>
                      <h6 class="price">₱2,550</h6>
                  </div>
              </div>
          </div>

          <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
            <a href="./productInfoHTML/cat2_ProductInfoPage4.html"><img class="image1" src="./images/Tools and Equipments/Grinder/grinder1.jpg" alt="grinder1.jpg"></a>
                <div class="overlay">
                    <div class="text">
                        <h6><a href="./productInfoHTML/cat2_ProductInfoPage4.html">Electric Angle Grinder M10 with Free Disc</a></h6>
                        <h6 class="price">₱950</h6>
                    </div>
                </div>
            </div>

            <div class="products">
                <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
              <a href="./productInfoHTML/cat2_ProductInfoPage5.html"><img class="image1" src="./images/Tools and Equipments/Jack Hammer/jack1.jpg" alt="jack1.jpg"></a>
              <div class="overlay">
                  <div class="text">
                      <h6><a href="./productInfoHTML/cat2_ProductInfoPage5.html">Demolition Jack Hammer</a></h6>
                      <h6 class="price">₱3,510</h6>
                  </div>
              </div>
          </div>

          <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
              <a href="./productInfoHTML/cat2_ProductInfoPage6.html"><img class="image1" src="./images/Tools and Equipments/Jig Saw/jig1.jpg" alt="jig1.jpg"></a>
              <div class="overlay">
                  <div class="text">
                      <h6><a href="./productInfoHTML/cat2_ProductInfoPage6.html">Electric Jigsaw with Variable Speed</a></h6>
                      <h6 class="price">₱1,738</h6>
                  </div>
              </div>
          </div>

          <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
            <a href="./productInfoHTML/cat2_ProductInfoPage7.html"><img class="image1" src="./images/Tools and Equipments/Planer/planer1.jpg" alt="planer1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat2_ProductInfoPage7.html">600W Electric Wood Planer</a></h6>
                    <h6 class="price">₱1,289</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
            <a href="./productInfoHTML/cat2_ProductInfoPage8.html"><img class="image1" src="./images/Tools and Equipments/Rachet/rachet1.jpg" alt="rachet1.jpg"></a>
              <div class="overlay">
                  <div class="text">
                      <h6><a href="./productInfoHTML/cat2_ProductInfoPage8.html">Greenfield Drive Socket Set</a></h6>
                      <h6 class="price">₱1,800</h6>
                  </div>
              </div>
          </div>
        </div>
    </div>

  <!-- category Area -->
  <!-- category 3 -->
  <div class="categoryName">
    <h2> Mobile and Gadgets</h2>
</div>

<div class="container">
    <div class="categories">

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat3_ProductInfoPage1.html"><img class="image1" src="./images/Mobile and Gadgets/Airbuds/airbuds1.jpg" alt="airbuds1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat3_ProductInfoPage1.html">Earbuds T20 Bluetooth Wireless Airbuds</a></h6>
                    <h6 class="price">₱599</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat3_ProductInfoPage2.html"><img class="image1" src="./images/Mobile and Gadgets/Airpods/airpod1.jpg" alt="airpod1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat3_ProductInfoPage2.html">Gaming Headset Noise Canceling for PC and Laptop</a></h6>
                    <h6 class="price">₱500</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat3_ProductInfoPage3.html"><img class="image1" src="./images/Mobile and Gadgets/Apple watch/watch1.jpg" alt="watch1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat3_ProductInfoPage3.html">Apple Watch Series 8 GPS Sport Band</a></h6>
                  <h6 class="price">₱25,890</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat3_ProductInfoPage4.html"><img class="image1" src="./images/Mobile and Gadgets/Gaming console/part1.jpg" alt="part1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat3_ProductInfoPage4.html">NiTHO DRIVE PRO® V16 Gaming Racing Wheel Car</a></h6>
                    <h6 class="price">₱7,399</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat3_ProductInfoPage5.html"><img class="image1" src="./images/Mobile and Gadgets/iPhone/iphone1.jpg" alt="iphone1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat3_ProductInfoPage5.html">Apple iPhone 14 Pro Max Brand New</a></h6>
                  <h6 class="price">₱73,890</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat3_ProductInfoPage6.html"><img class="image1" src="./images/Mobile and Gadgets/Portable devices/part1.jpg" alt="part1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat3_ProductInfoPage6.html">Portable Wireless Bluetooth Karaoke Speaker</a></h6>
                  <h6 class="price">₱800</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat3_ProductInfoPage7.html"><img class="image1" src="./images/Mobile and Gadgets/Samsung Galaxy/galaxy1.jpg" alt="galaxy1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat3_ProductInfoPage7.html">Samsung Galaxy S23 Ultra (S9180) 256GB - (HK)</a></h6>
                <h6 class="price">₱63,250</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat3_ProductInfoPage8.html"><img class="image1" src="./images/Mobile and Gadgets/Smart watch/smart1.jpg" alt="smart1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat3_ProductInfoPage8.html">Samsung Galaxy Watch5 Bluetooth (40mm)</a></h6>
                  <h6 class="price">₱13,592</h6>
              </div>
          </div>
      </div>
    </div>
</div>

<!-- category Area -->
<!-- category 4 -->
<div class="categoryName">
    <h2> Home and Living</h2>
</div>

<div class="container">
    <div class="categories">

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat4_ProductInfoPage1.html"><img class="image1" src="./images/Home and Living/Appliances/appliances1.jpg" alt="appliances1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat4_ProductInfoPage1.html">Personal Three Door Refrigerator</a></h6>
                    <h6 class="price">₱4,936</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat4_ProductInfoPage2.html"><img class="image1" src="./images/Home and Living/Bedroom/image1.jpg" alt="image1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat4_ProductInfoPage2.html">Palermo Queen Size Bedframe</a></h6>
                    <h6 class="price">₱19,990</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat4_ProductInfoPage3.html"><img class="image1" src="./images/Home and Living/Dining/image1.jpg" alt="image1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat4_ProductInfoPage3.html">Solid Wood Dining Chair</a></h6>
                  <h6 class="price">₱359</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat4_ProductInfoPage4.html"><img class="image1" src="./images/Home and Living/Furniture/furniture1.jpg" alt="furniture1.jpg"></a>
            <div class="overlay">
                <div class="text">
                    <h6><a href="./productInfoHTML/cat4_ProductInfoPage4.html">Sofa Bed for Living Room</a></h6>
                    <h6 class="price">₱6,490</h6>
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
          <a href="./productInfoHTML/cat4_ProductInfoPage5.html"><img class="image1" src="./images/Home and Living/Home Decors/decor1.jpg" alt="decor1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat4_ProductInfoPage5.html">Living Room Sala Set</a></h6>
                  <h6 class="price">₱35,590</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat4_ProductInfoPage6.html"><img class="image1" src="./images/Home and Living/Kitchen ware/utensil1.jpg" alt="utensil1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat4_ProductInfoPage6.html">Stainless Steel Stock Pot Set</a></h6>
                  <h6 class="price">₱999</h6>
              </div>
          </div>
      </div>

      <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
        <a href="./productInfoHTML/cat4_ProductInfoPage7.html"><img class="image1" src="./images/Home and Living/Laundry/laundry1.jpg" alt="laundry1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat4_ProductInfoPage7.html">Fully Automatic Top Load Washing Machine</a></h6>
                <h6 class="price">₱11,614</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat4_ProductInfoPage8.html"><img class="image1" src="./images/Home and Living/Pantry/pantry1.jpg" alt="pantry1.jpg"></a>
          <div class="overlay">
              <div class="text">
                  <h6><a href="./productInfoHTML/cat4_ProductInfoPage8.html">Plastic Drawers Organizer Storage</a></h6>
                  <h6 class="price">₱655</h6>
              </div>
          </div>
      </div>
    </div>
</div>

<!-- category Area -->
<!-- category 5 -->
<div class="categoryName">
<h2>Womens Apparel</h2>
</div>

<div class="container">
<div class="categories">

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat5_ProductInfoPage1.html"><img class="image1" src="./images/Womens Apparel/Coat/coat1.jpg" alt="coat1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat5_ProductInfoPage1.html">Korean Blazer for Women Suit Jacket</a></h6>
                <h6 class="price">₱600</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat5_ProductInfoPage2.html"><img class="image1" src="./images/Womens Apparel/Dress/dress1.jpg" alt="dress1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat5_ProductInfoPage2.html">Womens Casual Formal Plus Size Dress</a></h6>
                <h6 class="price">₱575</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat5_ProductInfoPage3.html"><img class="image1" src="./images/Womens Apparel/Gown/gown1.jpg" alt="gown1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat5_ProductInfoPage3.html">Banquet Long Elegant Dress</a></h6>
              <h6 class="price">₱840</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat5_ProductInfoPage4.html"><img class="image1" src="./images/Womens Apparel/Jeans/jeans1.jpg" alt="jeans1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat5_ProductInfoPage4.html">High Waist Pants Joni Jeans Skinny</a></h6>
                <h6 class="price">₱350</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat5_ProductInfoPage5.html"><img class="image1" src="./images/Womens Apparel/Leggings/leggings1.jpg" alt="leggings1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat5_ProductInfoPage5.html">Leggings Plain Cotton</a></h6>
              <h6 class="price">₱310</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat5_ProductInfoPage6.html"><img class="image1" src="./images/Womens Apparel/Longsleeves/longsleeve1.jpg" alt="longsleeve1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat5_ProductInfoPage6.html">Sweatshirt Longsleeves Jackets</a></h6>
              <h6 class="price">₱238</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat5_ProductInfoPage7.html"><img class="image1" src="./images/Womens Apparel/Skirt/skirt1.jpg" alt="skirt1.jpg"></a>
    <div class="overlay">
        <div class="text">
            <h6><a href="./productInfoHTML/cat5_ProductInfoPage7.html">Korean Fashion Womens High Waist Skirt</a></h6>
            <h6 class="price">₱346</h6>
        </div>
    </div>
</div>

<div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
  <a href="./productInfoHTML/cat5_ProductInfoPage8.html"><img class="image1" src="./images/Womens Apparel/T-Shirt/shirt1.jpg" alt="shirt1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat5_ProductInfoPage8.html">Korean TShirt Cotton Candy</a></h6>
              <h6 class="price">₱200</h6>
          </div>
      </div>
  </div>
</div>
</div>

<!-- category Area -->
<!-- category 6 -->
<div class="categoryName">
<h2> Mens Apparel</h2>
</div>

<div class="container">
<div class="categories">

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat6_ProductInfoPage1.html"><img class="image1" src="./images/Mens Apparel/Head Cup/cup1.jpg" alt="cup1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat6_ProductInfoPage1.html">New York Yankees Vintage<br>100% Good Quality</a></h6>
                <h6 class="price">₱450</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat6_ProductInfoPage2.html"><img class="image1" src="./images/Mens Apparel/Jackets/jacket1.jpg" alt="jacket1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat6_ProductInfoPage2.html">Unisex Jacket for Men <br> Made in Korea</a></h6>
                <h6 class="price">₱1,500</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat6_ProductInfoPage3.html"><img class="image1" src="./images/Mens Apparel/Jeans/pants1.jpg" alt="pants1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat6_ProductInfoPage3.html">Men's Pants High Quality<br> Stretchable Skinny Jeans</a></h6>
              <h6 class="price">₱450</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat6_ProductInfoPage4.html"><img class="image1" src="./images/Mens Apparel/Longsleeves/longsleeve1.jpg" alt="longsleeve1.jpg"></a>
        <div class="overlay">
            <div class="text">
                <h6><a href="./productInfoHTML/cat6_ProductInfoPage4.html">Classic Korean Men's Plain <br> Casual Longsleeve</a></h6>
                <h6 class="price">₱300</h6>
            </div>
        </div>
    </div>

    <div class="products">
        <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
      <a href="./productInfoHTML/cat6_ProductInfoPage5.html"><img class="image1" src="./images/Mens Apparel/Riding Jersey/jersey1.jpg" alt="jersey1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat6_ProductInfoPage5.html">FOX Gear Set Motocross <br> Jersey Pants MX Combo</a></h6>
              <h6 class="price">₱2,500</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat6_ProductInfoPage6.html"><img class="image1" src="./images/Mens Apparel/Shoes/shoes1.jpg" alt="shoes1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat6_ProductInfoPage6.html">Boots Genuine Classic <br> High Top Boots Unisex</a></h6>
              <h6 class="price">₱2,800</h6>
          </div>
      </div>
  </div>

  <div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
    <a href="./productInfoHTML/cat6_ProductInfoPage7.html"><img class="image1" src="./images/Mens Apparel/Shorts/short1.jpg" alt="short1.jpg"></a>
    <div class="overlay">
        <div class="text">
            <h6><a href="./productInfoHTML/cat6_ProductInfoPage7.html">Fox Racing Mens Brdshorts <br>High Quality</a></h6>
            <h6 class="price">₱1,250</h6>
        </div>
    </div>
</div>

<div class="products">
    <a href=""><img id="iconCart" src="./images/Logo/cart.png" alt="cart"></a>
  <a href="./productInfoHTML/cat6_ProductInfoPage8.html"><img class="image1" src="./images/Mens Apparel/T-Shirt/shirt1.jpg" alt="shirt1.jpg"></a>
      <div class="overlay">
          <div class="text">
              <h6><a href="./productInfoHTML/cat6_ProductInfoPage8.html">AMERICAN EAGLE Kellogg's<br> Tony The Tiger T-Shirt</a></h6>
              <h6 class="price">₱699</h6>
          </div>
      </div>
  </div>
</div>
</div>


     <!-- FOOTER NEW-->
     <hr>
    <footer>
      <div class="container1">
        <div class="row d-inline-flex w-100 justify-content-center text-center bg-light">
            <div class="col col-md-3 product-footer">
                <a href="termandconditions.html">Terms & Conditions</a>
            </div>

            <div class=" col col-md-3 product-footer">
                <a href="About Us.html">About Us</a>
            </div>

            <div class=" col col-md-3 product-footer">
                <a href="Supportpolicy.html">Support Policy</a>
            </div>

            <div class=" col col-md-3 product-footer">
                <a href="privacypolicy.html">Privacy Policy</a>
            </div>
        </div>
    </div>
  
    </footer> <hr>
    <div class="container-fluid w-100">
      <div class="row justify-content-between">
          <div class="col-auto mr-auto">
              <p class="fst-italic">&copy; 2023 Smart Drop</p>
          </div>
      
          <div class="col-auto mr-auto">
              <p class="fst-italic text-secondary">All Rights Reserved.</p>
          </div>
      </div>
   </div>
    <!-- MODAL FORMS -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-black">
              <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body bg-black">
              <!-- CONTENT HERE -->
              <iframe src="https://script.google.com/macros/s/AKfycbxecunSLsdqy1feqceaRub8KFvZCC288PvLkZmD7-ahKDePy2nKLf2KJmrpXlz412PQ-w/exec" frameborder="0" width="100%" height="605px" style="overflow-y: hidden;"></iframe>
            <!-- MODAL FORMS -->

</body>
</html>

