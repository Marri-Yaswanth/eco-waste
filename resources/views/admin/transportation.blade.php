
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waste Transportation - Eco Waste</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #ff9800;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 30px;
            max-width: 1000px;
            margin: auto;
        }

        form input, form button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        form button {
            background-color: #ff9800;
            color: white;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #f57c00;
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
    <header style="background: #ff9800; color: white; padding: 20px; text-align: center;">
        <h1>Waste Transportation Records</h1>
    </header>
    <main style="padding: 30px; max-width: 1000px; margin: auto;">
        <h2>Add New Transportation</h2>
        <form id="transportForm" method="POST" action="#">
            @csrf
            <input type="text" id="vehicle" name="vehicle" placeholder="Enter Vehicle (Truck/Rickshaw ID)" value="{{ old('vehicle') }}" required>

            <input type="text" id="driver" name="driver" placeholder="Enter Driver Name" value="{{ old('driver') }}" required>

            <input type="text" id="fromLocation" name="from_location" placeholder="From Location" value="{{ old('from_location') }}" required>

            <input type="text" id="toLocation" name="to_location" placeholder="To Location" value="{{ old('to_location') }}" required>

            <input type="date" id="transportedDate" name="transported_date" value="{{ old('transported_date') }}" required>

            <input type="number" id="quantity" name="quantity" placeholder="Quantity (Kg)" value="{{ old('quantity') }}">

            <button type="submit">Add Transportation</button>
        </form>

        <h2>Transportation Details</h2>
        <table id="transportTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Vehicle</th>
                    <th>Driver</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Quantity (Kg)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Truck A12</td>
                    <td>John Doe</td>
                    <td>Sector 21</td>
                    <td>Recycling Plant</td>
                    <td>2025-04-27</td>
                    <td>50</td>
                    <td>
                        <button class="action-btn">Edit</button>
                        <button class="action-btn delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <script>
        let transportId = 2;

        document.getElementById('transportForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const vehicle = document.getElementById('vehicle').value.trim();
            const driver = document.getElementById('driver').value.trim();
            const fromLocation = document.getElementById('fromLocation').value.trim();
            const toLocation = document.getElementById('toLocation').value.trim();
            const transportedDate = document.getElementById('transportedDate').value;
            const quantity = document.getElementById('quantity').value.trim();

            if (!vehicle || !driver || !fromLocation || !toLocation || !transportedDate) {
                alert('Please fill all required fields.');
                return;
            }

            const tableBody = document.querySelector('#transportTable tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>${transportId}</td>
                <td>${vehicle}</td>
                <td>${driver}</td>
                <td>${fromLocation}</td>
                <td>${toLocation}</td>
                <td>${transportedDate}</td>
                <td>${quantity || '-'}</td>
                <td>
                    <button class="action-btn">Edit</button>
                    <button class="action-btn delete-btn" onclick="deleteRow(this)">Delete</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            transportId++;

            document.getElementById('transportForm').reset();
        });

        function deleteRow(button) {
            if (confirm("Delete this record?")) {
                button.closest('tr').remove();
            }
        }
    </script>
</body>
</html>
