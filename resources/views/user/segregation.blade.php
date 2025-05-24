<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Waste Segregation - Eco Waste</title>
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
            background-color: #f1c40f;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
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
    <header>
        <h1>Waste Segregation Records</h1>
    </header>
    <main>
        <h2>Segregation Details</h2>
        <table id="segregationTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Center</th>
                    <th>Waste Type</th>
                    <th>Method</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sector 45 Segregation Plant</td>
                    <td>Plastic</td>
                    <td>Manual</td>
                    <td>2025-04-27</td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
