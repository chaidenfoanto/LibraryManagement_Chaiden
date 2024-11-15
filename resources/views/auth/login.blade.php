<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4faff; color: #333; text-align: center; }
        .login-container { max-width: 400px; margin: 100px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h1 { color: #64A0D9; }
        form { display: flex; flex-direction: column; }
        label { margin: 10px 0 5px; font-weight: bold; }
        input[type="text"], input[type="password"] { padding: 10px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ddd; }
        button { padding: 10px; background-color: #64A0D9; color: #fff; border: none; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Admin</h1>
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
