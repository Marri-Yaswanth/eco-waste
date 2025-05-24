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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-btn {
            background-color: #2196f3;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
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
    <header>
        <h1>Waste Disposal Records</h1>
    </header>
    <main>
        <h2>Disposal Details</h2>
        <table id="disposalTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Location</th>
                    <th>Disposal Type</th>
                    <th>Method</th>
                    <th>Disposed At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Landfill Zone 5</td>
                    <td>Biodegradable</td>
                    <td>Composting</td>
                    <td>2025-04-27</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
