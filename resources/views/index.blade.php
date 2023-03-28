<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-test応用</title>
</head>

<body>
    <form action="thanks" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    <p>氏名</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <p>メールアドレス</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <button>送信</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
