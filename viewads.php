<!doctype html>
<html lang="en">

<head>
  <?php include 'header.php'; ?>
</head>
<title>Ads Search</title>
<style>

.s_f{
  display: flex;
  justify-content:center; 
}

  @media (max-width: 768px) {
    .s_f {
      display: block;
      justify-content: initial; /* Remove justify-content on smaller screens if needed */
    }
    .slider-ads{
 
      padding-left:0px;
    }
    .header-content{
      padding: 5px;
    }
  }
</style>

<body>

<?php include 'navbar.php'; ?>
  <section class=" slide container-fluid " style="background-image:url(img/bg-4.jpg) ; height:100%; background-size:cover; background-repeat: no-repeat;">


    <div class="row slider-img">
      <div class="col-lg-6 slider-ads">
        <div class="header-content">
          <h1 class="main-header-ads fade-in-text">Place  Your Adverstiment</h1>
  
          <br>
          <button type="button" class="btn slider-button fade-in-btn">Contact Us &nbsp;<svg width="15" height="15"
              viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_18_105)">
                <path
                  d="M17.4166 17.4167L15.8333 15.8333M9.10408 16.625C10.0917 16.625 11.0697 16.4305 11.9822 16.0525C12.8947 15.6746 13.7237 15.1206 14.4221 14.4222C15.1205 13.7238 15.6745 12.8947 16.0524 11.9823C16.4304 11.0698 16.6249 10.0918 16.6249 9.10418C16.6249 8.11653 16.4304 7.13855 16.0524 6.22608C15.6745 5.31361 15.1205 4.48452 14.4221 3.78614C13.7237 3.08777 12.8947 2.53379 11.9822 2.15583C11.0697 1.77788 10.0917 1.58334 9.10408 1.58334C7.10944 1.58334 5.19648 2.37571 3.78605 3.78614C2.37562 5.19657 1.58325 7.10953 1.58325 9.10418C1.58325 11.0988 2.37562 13.0118 3.78605 14.4222C5.19648 15.8326 7.10944 16.625 9.10408 16.625Z"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_18_105">
                  <rect width="19" height="19" fill="white" />
                </clipPath>
              </defs>
            </svg></button>


        </div>




      </div>



    </div>




  </section>
  <div style=" background-color:#7c0c0c">
    <div class="row about-header  ">
        <form  class="s_f" >
      <div class="col-lg-3">
        <div class="card cards">
          <div class="card-body">
            <div class="row">
                <select id="districtSelect" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select Districts</option>
                    <option value="1">Ampara</option>
                    <option value="2">Anuradhapura</option>
                    <option value="3">Badulla</option>
                    <option value="4">Batticaloa</option>
                    <option value="5">Colombo</option>
                    <option value="6">Galle</option>
                    <option value="7">Gampaha</option>
                    <option value="8">Hambantota</option>
                    <option value="9">Jaffna</option>
                    <option value="10">Kalutara</option>
                    <option value="11">Kandy</option>
                    <option value="12">Kegalle</option>
                    <option value="13">Kilinochchi</option>
                    <option value="14">Kurunegala</option>
                    <option value="15">Mannar</option>
                    <option value="16">Matale</option>
                    <option value="17">Matara</option>
                    <option value="18">Monaragala</option>
                    <option value="19">Mullaitivu</option>
                    <option value="20">Nuwara Eliya</option>
                    <option value="21">Polonnaruwa</option>
                    <option value="22">Puttalam</option>
                    <option value="23">Ratnapura</option>
                    <option value="24">Trincomalee</option>
                    <option value="25">Vavuniya</option>
                  </select>
                  
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-3">
        <div class="card cards">
          <div class="card-body">
            <div class="row">
                <select id="categorySelect" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">BookShop</option>
                    <option value="2">Transport</option>
                    <option value="3">Foods</option>
                  </select>
                  
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-3">
        <div class="card cards">
          <div class="card-body">
            <div class="row">
                <button type="button" class="btn btn-lg btn-primary" onclick="filterData()" >Search</button>

            </div>
          </div>
        </div>

      </div>
    </form>
    </div>
  </div>
  <div class="space-area"></div>
  <section class="who-we container">

    <div class="row" id="cardsContainer" style="margin-right: 0px; margin-left: 0px; ">
      
    </div>

    <div class="row" id="notFoundMessage" style="display: none;">
  <div class="col-lg-12" style="text-align: center;">
    <h3>No results found.</h3>
  </div>
</div>

  </section>

  <div class="space-area"></div>

  <footer class="footer ">
    <div class=" container ">


      <div class="row " style="align-items: center;">

        <div class="col-lg-3">
          <img src="img/a.png" width="100%">
          <p style="margin-top: -50px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        </div>

        <div class="col-lg-3 items-footer">
          <h5>Quick Links</h5>
          <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Ads</li>
            <li>Find Place</li>
          </ul>

        </div>
        <div class="col-lg-3 items-footer">
          <h5>More Links</h5>
          <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Ads</li>
            <li>Find Place</li>
          </ul>
        </div>
        <div class="col-lg-3 items-footer">
          <h5>Contact Us</h5>
          <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Ads</li>
            <li>Find Place</li>
          </ul>
        </div>
      </div>

    </div>
<div class="top-footer ">
  <div class="container">
    <div class="row ">
      <div class="col-lg ">
        <p class="footer-text">CopyRight @Group 65 </p>
      </div>
      
      </div>


  </div>


</div>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <script>
    function createCard(image, rating, description) {
      const cardElement = document.createElement('div');
      cardElement.classList.add('col-lg-3');
  
      cardElement.innerHTML = `
        <div class="card ads-card" style="margin-bottom:10px;">
          <img src="uploads/${image}" class="card-img-top" alt="...">
          <div class="card-body" style="text-align: center;">
            <p id="discrption">${description}</p>
            <div class="rating">
              ${getStarRating(rating)}
            </div>
          </div>
        </div>
      `;
  
      return cardElement;
    }
  
    function getStarRating(rating) {
      // Function to generate star icons based on the rating value
      const stars = '<i class="fas fa-star"></i>'.repeat(rating);
      return stars;
    }
  
    function filterData() {
      const district = document.getElementById('districtSelect').value;
      const category = document.getElementById('categorySelect').value;
      const apiUrl = `https://rooapart.lk/api/ads.php?district=${encodeURIComponent(district)}&category=${encodeURIComponent(category)}`;
  
      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          const cardsContainer = document.getElementById('cardsContainer');
          cardsContainer.innerHTML = ''; // Clear previous cards
  
          // Loop through the data and create a card for each item
          data.forEach(item => {
            const card = createCard(item.image, item.rating, item.description);
            cardsContainer.appendChild(card);
          });
        })
        .catch(error => console.error('Error fetching data:', error));
    }
    function filterData() {
  const district = document.getElementById('districtSelect').value;
  const category = document.getElementById('categorySelect').value;
  const apiUrl = `https://rooapart.lk/api/ads.php?district=${encodeURIComponent(district)}&category=${encodeURIComponent(category)}`;

  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      const cardsContainer = document.getElementById('cardsContainer');
      const notFoundMessage = document.getElementById('notFoundMessage');

      cardsContainer.innerHTML = ''; 
      if (!Array.isArray(data) || data.length === 0) {
 
        cardsContainer.style.display = 'none';
        notFoundMessage.style.display = 'block';
      } else {

        data.forEach(item => {
          const card = createCard(item.image, item.rating, item.description);
          cardsContainer.appendChild(card);
        });


        cardsContainer.style.display = 'flex';
        notFoundMessage.style.display = 'none';
      }
    })
    .catch(error => console.error('Error fetching data:', error));
}

  </script>
  
</body>

</html>