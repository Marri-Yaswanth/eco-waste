<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard - EcoWaste</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body { font-family: 'Poppins', sans-serif; background: #f8f9fa; }
    .navbar-brand { font-weight: bold; color: #27ae60; }
    .nav-link { color: #555; font-weight: 500; }
    .nav-link:hover, .nav-link.active { color: #27ae60; font-weight: bold; }
    .section { padding: 80px 20px; }
    .hero { background: #eafaf1; text-align: center; }
    .hero h1 { font-size: 2.5rem; margin-bottom: 20px; }
    .hero p { font-size: 1.2rem; color: #555; }
    .services i { font-size: 3rem; color: #27ae60; }
    .services h4 { margin-top: 15px; }
    .about { background: #fff; text-align: center; }
    .btn-primary { background: linear-gradient(135deg, #27AE60, #2ECC71); border: none; }
    .btn-primary:hover { background: linear-gradient(135deg, #2ECC71, #27AE60); }
    footer { background: #27ae60; color: white; text-align: center; padding: 20px 0; margin-top: 50px; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">EcoWaste</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <span class="nav-link">
            Welcome, <strong>{{ Auth::user()->name ?? 'Guest' }}</strong>!
          </span>
        </li>
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-success ms-2" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero section" id="dashboard-home">
  <div class="container">
    <h1>Welcome to Your EcoWaste Dashboard 🌱</h1>
    <p>Manage your waste collection, transportation, segregation, and disposal efficiently.</p>
  </div>
</section>


<section class="services section">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md-3">
        <i class="bi bi-recycle"></i>
        <h4>Waste Collection</h4>
        <p>View and schedule your household or business waste pickups.</p>
        <a href="{{ route('collections') }}" class="btn btn-primary mt-2">Manage Collections</a>
      </div>
      <div class="col-md-3">
        <i class="bi bi-truck"></i>
        <h4>Transportation Details</h4>
        <p>Track your waste during transportation and logistics.</p>
        <a href="{{ route('transportation') }}" class="btn btn-primary mt-2">Manage Transportation</a>
      </div>
      <div class="col-md-3">
        <i class="bi bi-trash3-fill"></i>
        <h4>Disposal Records</h4>
        <p>Ensure safe and compliant disposal of your waste.</p>
        <a href="{{ route('disposal') }}" class="btn btn-primary mt-2">Manage Disposal</a>
      </div>
      <div class="col-md-3">
        <i class="bi bi-filter-circle-fill"></i>
        <h4>Waste Segregation</h4>
        <p>Monitor and manage segregation of different waste types.</p>
        <a href="{{ route('segregation') }}" class="btn btn-primary mt-2">Manage Segregation</a>
      </div>
    </div>
  </div>
</section>


<section class="about section">
  <div class="container">
    <h2 class="text-success mb-4">About EcoWaste</h2>
    <p class="text-muted">
      At EcoWaste, we believe in sustainable waste management. 
      We empower individuals and businesses to manage their waste in a responsible, eco-friendly manner.
      Our platform simplifies waste collection, transportation, segregation, and disposal tracking — promoting a greener planet for all.
    </p>
  </div>
</section>


<footer>
  <p>© 2025 EcoWaste Management. All Rights Reserved.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
