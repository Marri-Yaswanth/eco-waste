<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EcoWaste - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #e8f5e9;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      background: #2ecc71;
      padding: 20px;
      color: white;
      text-align: center;
    }
    .hero {
      padding: 60px 20px;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      color: #27ae60;
      font-weight: bold;
    }
    .hero p {
      font-size: 1.3rem;
      color: #555;
      margin-top: 15px;
    }
    .features {
      padding: 50px 0;
    }
    .feature {
      text-align: center;
      padding: 20px;
    }
    .feature i {
      font-size: 3rem;
      color: #2ecc71;
    }
    footer {
      background: #2ecc71;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: auto;
    }
    .btn-primary {
      background: #27ae60;
      border: none;
    }
    .btn-primary:hover {
      background: #219150;
    }
  </style>
</head>
<body>

<header>
  <h1>EcoWaste Management System</h1>
  <p>Efficient Waste Collection, Transportation, Disposal & Segregation</p>
</header>

<div class="container hero">
  <h1>Welcome to EcoWaste! 🌎</h1>
  <p class="lead">Making the world cleaner, greener, and healthier — one step at a time.</p>
  <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
    <button class="btn btn-primary btn-lg me-md-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg">Register</a>
  </div>
</div>


<section class="features container">
  <div class="row">
    <div class="col-md-3 feature">
      <i class="bi bi-trash-fill"></i>
      <h4 class="mt-3">Collection</h4>
      <p>Schedule waste pickups easily from your location.</p>
    </div>
    <div class="col-md-3 feature">
      <i class="bi bi-truck"></i>
      <h4 class="mt-3">Transportation</h4>
      <p>Eco-friendly transportation of waste across zones.</p>
    </div>
    <div class="col-md-3 feature">
      <i class="bi bi-recycle"></i>
      <h4 class="mt-3">Disposal</h4>
      <p>Safe and green waste disposal methods used.</p>
    </div>
    <div class="col-md-3 feature">
      <i class="bi bi-funnel-fill"></i>
      <h4 class="mt-3">Segregation</h4>
      <p>Segregate waste efficiently for better recycling.</p>
    </div>
  </div>
</section>


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="loginModalLabel">Login as</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg mb-3 w-75">Admin</a>
        <br>

        <a href="{{ route('login') }}" class="btn btn-outline-success btn-lg w-75">User</a>
      </div>
    </div>
  </div>
</div>


<footer>
  <p>© 2025 EcoWaste. All Rights Reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
