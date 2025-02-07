<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <style>
    body {
        font-family: 'Merriweather', serif;  /* Font klasik untuk kesan elegan */
        background-color: #ffffff;  /* Latar belakang putih */
        color: #3a2e39;  /* Cokelat tua untuk teks */
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120vh;
    }

    form {
        background-color: #f9f9f9;  /* Putih lembut */
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);  /* Bayangan lembut */
        width: 100%;
        max-width: 450px;
        border-left: 5px solid #8d8741;  /* Hijau zaitun tua sebagai aksen */
    }

    h2 {
        color: #8d8741;  /* Hijau zaitun tua */
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
        color: #4b3b3b;  /* Cokelat tua untuk label */
    }

    input, select, button {
        width: 100%;
        padding: 12px;
        margin-bottom: 18px;
        border: 1px solid #c4c4c4;  /* Abu-abu lembut */
        background-color: #ffffff;  /* Input putih */
        color: #333333;  /* Teks gelap */
        border-radius: 8px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus, select:focus {
        outline: none;
        border-color: #8d8741;  /* Aksen hijau zaitun saat fokus */
        box-shadow: 0 0 8px rgba(141, 135, 65, 0.3);
    }

    button {
        background-color: #8d8741;  /* Hijau zaitun */
        color: #ffffff;  /* Teks putih */
        font-weight: bold;
        border: none;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #6f6a2f;  /* Warna lebih gelap saat hover */
    }

    td {
        padding: 10px 0;
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
     <div class="input-field">
        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" id="" name="login" hidden>
     </div>
          
      </tr>
        </table>
    </form>
  </center>
</body>
</html>