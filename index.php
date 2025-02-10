<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
        font-family: 'Merriweather', serif;
        background-color: #ffffff;
        color: #3a2e39;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        width: 200%;
        max-width: 450px;
        border-left: 5px solid #8d8741;
    }

    h2 {
        color: #8d8741;
        text-align: center;
        margin-bottom: 24px;
        font-size: 24px;
    }

    table {
        width: 100%;
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
        color: #4b3b3b;
    }

    input, select, button {
        width: 100%;
        padding: 12px;
        margin-bottom: 18px;
        border: 1px solid #c4c4c4;
        background-color: #ffffff;
        color: #333333;
        border-radius: 8px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus, select:focus {
        outline: none;
        border-color: #8d8741;
        box-shadow: 0 0 8px rgba(141, 135, 65, 0.3);
    }

    button {
        background-color: #8d8741;
        color: #ffffff;
        font-weight: bold;
        border: none;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #6f6a2f;
    }

    td {
        padding: 10px 0;
    }

    p {
        text-align: center;
        margin-top: 20px;
    }

    a {
        color: #8d8741;
        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
  <center>
    <h2>LOGIN USER</h2>
    <form action="controllers/c_reglog.php?aksi=login" method="post">
      <table>
        <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" name="email" id="email" required></td>
        </tr>
        <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
          <td><button type="submit" name="login">LOGIN</button></td>
        </tr>
      </table>
    </form>
    <p>Don't have an account? <a href="registrasi.php">Register Here</a></p>
  </center>
</body>
</html>
