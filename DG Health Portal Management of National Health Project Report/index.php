
<?php
// Include database connection (replace 'connect.php' with your connection file)
include('connect.php');

// Fetch all health tips from the database
$query = "SELECT * FROM health_tips ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

// Check results ase kina
if (!$result || mysqli_num_rows($result) == 0) {
    echo "<p>No health tips available.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  <script src="https://cdn.tailwindcss.com"></script>
  <script src="patientTable.html"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<style>
  /* General Styles */


section {
    padding: 40px 20px;
    text-align: center;
}
.container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px;
    }
    .hero {
        background-image: url('hero.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .hero h1 {
        font-size: 3rem;
    }
    .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-10px);
    }
    .card h3 {
        font-size: 1.8rem;
        font-weight: bold;
    }
    .card p {
        color: #555;
        font-size: 1rem;
    }

/* Hero Section */
#hero {
    background: url('hero.jpg') no-repeat center center/cover;
    color: white;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-content h1 {
    font-size: 3rem;
}

.hero-content p {
    font-size: 1.2rem;
    margin: 10px 0 20px;
}

.hero-content .btn {
    background: #007BFF;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

/* Services Section */
#services .services-list {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.service-item {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    width: 30%;
}

/* Doctors Section */
#team .team-list {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.doctor img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
}

/* Appointment Section */
#appointment form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 50%;
    margin: 0 auto;
}

#appointment input, #appointment button {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* Footer */
footer {
    background: #333;
    color: white;
    padding: 10px;
    text-align: center;
}

footer ul {
    list-style: none;
    padding: 0;
}

footer ul li {
    display: inline;
    margin: 0 10px;
}

</style>
<body>
  <main class="">
 
      <div class="navbar bg-base-100 w-[1500px] mx-auto mt-[24px]">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">

              <li>
               
                  <li><a> All Patient Information </a></li>
                 
              </li>
              <li><a>about</a></li>
            </ul>
          </div>
          <a class="btn btn-ghost text-xl">Doctors Asylum</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            
            
          </ul>
        </div>
        <div class="navbar-end mx-4">
          <a href="doctors_register.php" class="btn mx-4 btn-error">Doctor Register</a>
          <a href="patientForm.php" class="btn btn-primary">Patient Register</a>
          <a href="admin_register.php" class="btn mx-4 btn-secondary">Admin Register</a>
        </div>
      </div>



<section class="mb-[10px]">

    <div2
    class="hero min-h-screen"
    style="background-image: url('scope.jpeg');">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-7xl text-neutral-content text-center">
      <div class="mb-5 text-black max-w-md absolute left-[30px] ">
     
       
        Redefining Healthcare with Advanced Treatments, Personalized Care, and Compassion
        
       
      </div>
    </div>
  </div>
</section>

<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img
      src="about.jpeg"
      class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">About Our Portal</h1>
      <p class="py-6">
        Caring for You, Every Step of the Way" At [Your Website Name], we are dedicated to offering you the best in healthcare. We combine advanced technology with compassionate care to provide services that help prevent, manage, and treat various health conditions. With a focus on patient-centered care, we work together with you to ensure your health is in good hands. Our team is here to support you at every stage of your health journey, providing expertise, guidance, and encouragement along the way
      </p>
      <a href="PatientLogin.php"><button class="btn btn-primary">Get Started</button></a>
    </div>
  </div>
</div>



<!-- Services Section -->
<section id="services">
  <h2>Our Services</h2>
  <div class="services-list">
      <div class="service-item">
        <img src="doctor.jpeg" alt="">
          <h3 class='font-bold text-2xl text-black'>Consultations</h3>
          <p class='text-md text-black'>Book expert medical consultations for all specialties.</p>
      <a href="PatientLogin.php"><button class='btn btn-primary mt-12'>Book Now</button></a>
        </div>
      <div class="service-item">
        <img src="cross.jpeg" alt="">
          <h3 class='font-bold text-2xl text-black'>Specialized Treatments</h3>
          <p class='text-md text-black'>Access advanced treatment plans tailored to your needs.</p>
      </div>
      <div class="service-item">
        <img src="ambu.jpeg" alt="">
          <h3 class='font-bold text-2xl text-black'>Emergency Care</h3>
          <p class='text-md text-black'>We provide 24/7 emergency medical support.</p>
      </div>
  </div>
</section>



<div class="container">

<!-- Hero Section -->
<div class="container mt-5">
        <h1 class="text-center mb-8 text-6xl font-bold">Health Tips</h1>
        <div class="row">
            <?php 
            // Fetch and display each health tip
            while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title text-primary">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </h5>
                            <p class="card-text">
                                <?php echo htmlspecialchars($row['description']); ?>
                            </p>
                            <p class="text-muted small">
                                Created on: <?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>




<!-- Testimonials Section -->
 <section>
  <div class='text-5xl font-bold'>Cleint Review & FAQ</div>
 </section>
<div class="collapse bg-base-200">
  <input type="radio" name="my-accordion-1" checked="checked" />
  <div class="collapse-title text-xl font-medium">Cleint Review-1</div>
  <div class="collapse-content">
    <p>"Great service and amazing staff. Highly recommend!"</p>
    
  </div>
</div>
<div class="collapse bg-base-200">
  <input type="radio" name="my-accordion-1" />
  <div class="collapse-title text-xl font-medium">Review-2</div>
  <div class="collapse-content">
    <p>"I felt truly cared for during my visit."</p>
  </div>
</div>
<div class="collapse bg-base-200">
  <input type="radio" name="my-accordion-1" />
  <div class="collapse-title text-xl font-medium">Frequently Asked Questions</div>
  <div class="collapse-content">
    <h3 class='text-2xl'>What are your working hours?</h3>
      <p>We are open 24/7 to serve our patients.</p>
  </div>
</div>






<!-- Contact Section -->
<section class="contact font-bold text-white text-3xl">
  <h2>Contact Us</h2>
  <p>Email: info@hospital.com</p>
  <p>Phone: +123-456-7890</p>
  <p>Address: 123 Healthcare Ave, City, Country</p>
</section>

  </main>

  <footer class="footer bg-base-300 text-base-content p-10">
    <nav>
      <h6 class="footer-title">Services</h6>
      <a class="link link-hover">Branding</a>
      <a class="link link-hover">Design</a>
      <a class="link link-hover">Marketing</a>
      <a class="link link-hover">Advertisement</a>
    </nav>
    <nav>
      <h6 class="footer-title">Company</h6>
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </nav>
    <nav>
      <h6 class="footer-title">Social</h6>
      <div class="grid grid-flow-col gap-4">
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
          </svg>
        </a>
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
          </svg>
        </a>
        <a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            class="fill-current">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
          </svg>
        </a>
      </div>
    </nav>
  </footer>


</body>


</html>