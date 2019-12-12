<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <script>
        function Auth() {
            var URL = 'https://notify-bot.line.me/oauth/authorize?';
            URL += 'response_type=code';
            URL += '&client_id=StFrf3s60jDSmvtjEkSxfw';
            URL += '&redirect_uri=http://localhost:8080/index.php';
            URL += '&scope=notify';
            URL += '&state=codemunha@gmail.com';
            window.location.href = URL;
        }
    </script>
</head>
<body>
    <button onclick="Auth();">LineNotify</button>
</body>
</html>