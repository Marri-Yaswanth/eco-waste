<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - EcoWaste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #e6f4ea; /* Soft green background */
        }

        header {
            background: linear-gradient(to right, #4caf50, #2e7d32); /* Green gradient */
            color: white;
            padding: 15px;
            text-align: center;
        }

        header h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .container {
            padding-top: 30px;
        }

        .services {
            margin-top: 40px;
        }

        .service-box {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 128, 0, 0.05);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 128, 0, 0.15);
        }

        .service-box i {
            font-size: 3rem;
            color: #2e7d32;
        }

        .service-box h4 {
            margin-top: 20px;
            color: #2e7d32;
        }

        .service-box p {
            color: #555;
            margin-top: 10px;
        }

        .service-box a {
            display: inline-block;
            margin-top: 15px;
            background: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .service-box a:hover {
            background-color: #388e3c;
        }

        .about {
            background-color: #f1f8f5;
            padding: 40px;
            margin-top: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(34, 139, 34, 0.1);
        }

        .about h2 {
            color: #388e3c;
        }

        .about p {
            color: #444;
            line-height: 1.6;
        }

        footer {
            background: linear-gradient(to right, #4caf50, #2e7d32);
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <main>
        <div class="container">

            <!-- Services Section -->
            <section class="services">
                <div class="row text-center g-4">
                    <div class="col-md-3">
                        <div class="service-box">
                            <i class="bi bi-recycle"></i>
                            <h4>Waste Collection</h4>
                            <p>View and schedule your household or business waste pickups.</p>
                            <a href="{{ route('admin.admincollections') }}">Manage Collections</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <i class="bi bi-truck"></i>
                            <h4>Transportation Details</h4>
                            <p>Track your waste during transportation and logistics.</p>
                            <a href="{{ route('admin.transportation') }}">Manage Transportation</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <i class="bi bi-trash3-fill"></i>
                            <h4>Disposal Records</h4>
                            <p>Ensure safe and compliant disposal of your waste.</p>
                            <a href="{{ route('admin.disposal') }}">Manage Disposal</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <i class="bi bi-filter-circle-fill"></i>
                            <h4>Waste Segregation</h4>
                            <p>Monitor and manage segregation of different waste types.</p>
                            <a href="{{ route('admin.segregation') }}">Manage Segregation</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about">
                <h2 class="text-success mb-4">About EcoWaste</h2>
                <p>
                    At EcoWaste, we believe in sustainable waste management. We empower individuals and businesses to manage
                    their waste in a responsible, eco-friendly manner. Our platform simplifies waste collection, transportation,
                    segregation, and disposal tracking — promoting a greener planet for all.
                </p>
            </section>

        </div>
    </main>

    <footer>
        <p>© 2025 EcoWaste Management. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
