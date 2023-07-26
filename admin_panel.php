<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            background-color: #1a1a1a; 
            color: #fff; 
        }
        main {
            width: 90%;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .content {
            margin-top: 20px;
        }
        h3 {
            margin-top: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input,
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            background-color: #2b2b2b;
            color: #fff; 
        }
        textarea {
            height: 150px;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            color: #fff; 
        }
        th {
            text-align: left;
            padding: 5px;
            border: 1px solid #ccc;
        }
        td {
            padding: 5px;
            border: 1px solid #ccc;
        }
        .message {
            color: red;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Admin Panel</h1>
    </header>

    <main>
        <div class="content">

            <h3>Yeni Blog Postu Ekle</h3>
            <form action="ekle_post.php" method="post">
                <label for="title_post">Başlık:</label>
                <input type="text" name="title_post" id="title_post" required>

                <label for="desc_post">Açıklama:</label>
                <textarea name="desc_post" id="desc_post" required></textarea>

                <button type="submit">Blog Postu Ekle</button>
            </form>

            <h3>Mesajlar</h3>
            <table>

                <?php

                include 'get_contact.php';
                ?>
            </table>
        </div>
    </main>

    <footer>
        <p>Admin Panel - © 2023 All rights reserved.</p>
    </footer>

</body>

</html>
