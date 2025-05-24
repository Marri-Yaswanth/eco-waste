<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login - Eco Waste</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f1f5f9; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .form-container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0px 4px 12px rgba(0,0,0,0.1); width: 300px; }
        h2 { margin-bottom: 20px; text-align: center; }
        input { width: 100%; margin-bottom: 15px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; background: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #45a049; }
        a { display: block; margin-top: 10px; text-align: center; color: #333; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}">Don't have an account? Register</a>
    </div>
</body>
</html>
