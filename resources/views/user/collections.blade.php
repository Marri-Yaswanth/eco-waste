
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waste Collection - Eco Waste</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            margin: 0;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 20px 10px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        main {
            padding: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }
        form {
            background: white;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        form input, form select {
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        form button {
            margin-top: 10px;
            width: 100%;
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }
        form button:hover {
            background: #45A049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 15px 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-btn {
            background: #ff9800;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-right: 5px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .action-btn:hover {
            background: #fb8c00;
        }
        .delete-btn {
            background: #f44336;
        }
        .delete-btn:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>
    <header>
        <h1>Waste Collection Records</h1>
    </header>
    <main>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <h2>Add New Collection Record</h2>
        <form method="POST" action="{{ route('collections.store') }}">
            @csrf
            <input type="text" id="location" name="location" placeholder="Enter Location" required>
            <select id="wasteType" name="waste_type" required>
                <option value="">Select Waste Type</option>
                <option value="Plastic">Plastic</option>
                <option value="Metal">Metal</option>
                <option value="Biodegradable">Biodegradable</option>
                <option value="E-Waste">E-Waste</option>
            </select>
            <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity (Kg)">
            <input type="date" id="collectedDate" name="collected_date" required>
            <input type="text" id="collector" name="collector" placeholder="Enter Collector Name (optional)">
            <button type="submit">Add Collection</button>
        </form>

        <h2>Collection Records</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Location</th>
                    <th>Waste Type</th>
                    <th>Quantity (Kg)</th>
                    <th>Collected At</th>
                    <th>Collector</th>
                </tr>
            </thead>
            <tbody>
                @forelse($collections as $collection)
                    <tr>
                        <td>{{ $collection->id }}</td>
                        <td>{{ $collection->location }}</td>
                        <td>{{ $collection->waste_type }}</td>
                        <td>{{ $collection->quantity ?? '-' }}</td>
                        <td>{{ $collection->collected_date }}</td>
                        <td>{{ $collection->collector ?? '-' }}</td>
                    </tr>
                @empty
                    <tr><td colspan="6">No records found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>
