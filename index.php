<?php
require "header.php";
?>
<style>
  .hero {
  
  padding: 150px 0;
}

.hero__container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  height: 90%;
  text-align: center;
  padding: 30px;
}

.hero__heading {
  font-size: 100px;
  margin-bottom: 24px;
  color: black;
}



.hero__description {
  font-size: 60px;
  /* fallback for old browsers */
  color: black;
}

.highlight {
  border-bottom: 4px solid rgb(132, 0, 255);
}

@media screen and (max-width: 768px) {
  .hero__heading {
    font-size: 60px;
  }

  .hero__description {
    font-size: 40px;
  }
}

/* About Section */


.main__content{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  max-width: 900px;
  margin: 0 auto;
  height: 90%;
  text-align: center;
  padding: 30px;
}
.main__content h2 {
  font-size: 4rem;

  color: black;
  background-size: 100%;
}

.main__content p {
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: 700;
}

.main__btn {
  font-size: 1.8rem;
  background: grey;
  padding: 20px 60px;
  border: none;
  border-radius: 4px;
  margin-top: 2rem;
  cursor: pointer;
  position: relative;
  transition: all 0.35s;
  outline: none;
}

.main__btn a {
  position: relative;
  z-index: 2;
  color: white;
  text-decoration: none;
}

.main__btn:after {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background: #11101d;
  transition: all 0.35s;
  border-radius: 4px;
}

.main__btn:hover {
  color: white;
}

.main__btn:hover:after {
  width: 100%;
}

.main__img--container {
  text-align: center;
 
}

.main__img--card {
  margin: 10px;
  height: 500px;
  width: 500px;
  border-radius: 4px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: blue;
 
}

.fa-layer-group,
.fa-users {
  font-size: 14rem;
}

#card-2 {
  background: #ff512f;
  background: -webkit-linear-gradient(to right, #dd2476, #ff512f);
  background: linear-gradient(to right, #dd2476, #ff512f);
}

/* Mobile Responsive */
@media screen and (max-width: 1100px) {
  .main__container {
    display: grid;
    grid-template-columns: 1fr;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin: 0 auto;
    height: 100%;
  }

  .main__img--container {
    display: flex;
    justify-content: center;
  }

  .main__img--card {
    height: 425px;
    width: 425px;
  }

  .main__content {
    text-align: center;
    margin-bottom: 4rem;
  }

  .main__content h1 {
    font-size: 2.5rem;
    margin-top: 2rem;
  }

  .main__content h2 {
    font-size: 3rem;
  }

  .main__content p {
    margin-top: 1rem;
    font-size: 1.5rem;
  }
}

@media screen and (max-width: 480px) {
  .main__img--card {
    width: 250px;
    height: 250px;
  }

  .fa-users,
  .fa-layer-group {
    font-size: 4rem;
  }

  .main__content h1 {
    font-size: 2rem;
    margin-top: 3rem;
  }
  .main__content h2 {
    font-size: 2rem;
  }

  .main__content p {
    margin-top: 2rem;
  }

  .main__btn {
    padding: 12px 36px;
    margin: 2.5rem 0;
  }
}
  </style>
  <section class="home-section">
<div class="hero" id="home">
      <div class="hero__container">
        <h1 class="hero__heading">Bee Hive</h1>
        <p class="hero__description">Add information on our table for beehives</p>
   
      </div>
    </div>

    
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
        </div>
        <div class="main__content">
          <h1>What do we do?</h1>
          <h2>We help people store information our tables so it can be easier for you to edit.</h2>
          
        </div>
      </div>
    </div>
  
    
    <div class="main" id="sign-up">
      <div class="main__container">
        <div class="main__content">
          <h1>Start adding information on our table</h1>
          <h2>Sign Up Today</h2>
          
          <button class="main__btn"><a href="signup.php">Sign Up</a></button>
        </div>
       
      </div>
    </div>
</section>
<script src="app.js"></script>