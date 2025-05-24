<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waste Disposal - Eco Waste</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #e53935;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 30px;
            max-width: 1000px;
            margin: auto;
        }

        form input, form select, form button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        form button {
            background-color: #e53935;
            color: white;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #c62828;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
        }

        .action-btn {
            background-color: #2196f3;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .action-btn:hover {
            background-color: #1976d2;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <header style="background: #e53935; color: white; padding: 20px; text-align: center;">
        <h1>Waste Disposal Records</h1>
    </header>
    <main style="padding: 30px; max-width: 1000px; margin: auto;">
        <h2>Add New Disposal Record</h2>
        <form id="disposalForm" method="POST" action="#">
            @csrf
            <input type="text" id="location" name="location" placeholder="Enter Disposal Location" value="{{ old('location') }}" required>

            <select id="disposalType" name="disposal_type" required>
                <option value="">Select Disposal Type</option>
                <option value="Biodegradable">Biodegradable</option>
                <option value="Non-Biodegradable">Non-Biodegradable</option>
                <option value="E-Waste">E-Waste</option>
            </select>

            <select id="disposalMethod" name="disposal_method" required>
                <option value="">Select Disposal Method</option>
                <option value="Landfilling">Landfilling</option>
                <option value="Burning">Burning</option>
                <option value="Recycling">Recycling</option>
                <option value="Composting">Composting</option>
            </select>

            <input type="date" id="disposedAt" name="disposed_at" value="{{ old('disposed_at') }}" required>

            <button type="submit">Add Disposal</button>
        </form>

        <h2>Disposal Details</h2>
        <table id="disposalTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Location</th>
                    <th>Disposal Type</th>
                    <th>Method</th>
                    <th>Disposed At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Landfill Zone 5</td>
                    <td>Biodegradable</td>
                    <td>Composting</td>
                    <td>2025-04-27</td>
                    <td>
                        <button class="action-btn">Edit</button>
                        <button class="action-btn delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <script>
        let disposalId = 2;

        document.getElementById('disposalForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const location = document.getElementById('location').value.trim();
            const disposalType = document.getElementById('disposalType').value;
            const disposalMethod = document.getElementById('disposalMethod').value;
            const disposedAt = document.getElementById('disposedAt').value;

            if (!location || !disposalType || !disposalMethod || !disposedAt) {
                alert('Please complete all fields.');
                return;
            }

            const tableBody = document.querySelector('#disposalTable tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>${disposalId}</td>
                <td>${location}</td>
                <td>${disposalType}</td>
                <td>${disposalMethod}</td>
                <td>${disposedAt}</td>
                <td>
                    <button class="action-btn">Edit</button>
                    <button class="action-btn delete-btn" onclick="deleteRow(this)">Delete</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            disposalId++;

            document.getElementById('disposalForm').reset();
        });

        function deleteRow(button) {
            if (confirm("Delete this record?")) {
                button.closest('tr').remove();
            }
        }
    </script>
</body>
</html>
