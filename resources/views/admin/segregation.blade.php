<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><title>Waste Segregation - Eco Waste</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #26a69a;
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
            background-color: #26a69a;
            color: white;
            cursor: pointer;
            border: none;
        }

        form button:hover {
            background-color: #2bbf7a;
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
            background-color: #f1c40f;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .action-btn:hover {
            background-color: #f39c12;
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
    <header style="background: #26a69a; color: white; padding: 20px; text-align: center;">
        <h1>Waste Segregation Records</h1>
    </header>
    <main style="padding: 30px; max-width: 1000px; margin: auto;">
        <h2>Add New Segregation</h2>
        <form id="segregationForm" method="POST" action="#">
            @csrf
            <input type="text" id="center" name="center" placeholder="Segregation Center Name" value="{{ old('center') }}" required>

            <select id="wasteType" name="waste_type" required>
                <option value="">Select Waste Type</option>
                <option value="Plastic">Plastic</option>
                <option value="Organic">Organic</option>
                <option value="Metals">Metals</option>
            </select>

            <select id="method" name="method" required>
                <option value="">Select Segregation Method</option>
                <option value="Manual">Manual</option>
                <option value="Machine">Machine</option>
                <option value="Conveyor Belts">Conveyor Belts</option>
            </select>

            <input type="date" id="segregatedAt" name="segregated_at" value="{{ old('segregated_at') }}" required>

            <button type="submit">Add Segregation</button>
        </form>

        <h2>Segregation Details</h2>
        <table id="segregationTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Center</th>
                    <th>Waste Type</th>
                    <th>Method</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sector 45 Segregation Plant</td>
                    <td>Plastic</td>
                    <td>Manual</td>
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
        let segregationId = 2;

        document.getElementById('segregationForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const center = document.getElementById('center').value.trim();
            const wasteType = document.getElementById('wasteType').value;
            const method = document.getElementById('method').value;
            const segregatedAt = document.getElementById('segregatedAt').value;

            if (!center || !wasteType || !method || !segregatedAt) {
                alert('Please fill all required fields.');
                return;
            }

            const tableBody = document.querySelector('#segregationTable tbody');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>${segregationId}</td>
                <td>${center}</td>
                <td>${wasteType}</td>
                <td>${method}</td>
                <td>${segregatedAt}</td>
                <td>
                    <button class="action-btn">Edit</button>
                    <button class="action-btn delete-btn" onclick="deleteRow(this)">Delete</button>
                </td>
            `;

            tableBody.appendChild(newRow);
            segregationId++;

            document.getElementById('segregationForm').reset();
        });

        function deleteRow(button) {
            if (confirm("Delete this record?")) {
                button.closest('tr').remove();
            }
        }
    </script>
</body>
</html>
