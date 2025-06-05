<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Отправка письма</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <button id="send-btn" class="btn btn-success">Отправка сообщения</button>
    <div id="result" class="mt-3"></div>
  </div>

  <script>
    document.getElementById('send-btn').addEventListener('click', function () {
      fetch('send_mail.php', {
        method: 'POST'
      })
      .then(response => response.text())
      .then(data => {
        document.getElementById('result').innerText = data;
      })
      .catch(error => {
        document.getElementById('result').innerText = 'Ошибка: ' + error;
      });
    });
  </script>
</body>
</html>
