<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postTitle = $_POST["title_post"];
    $postDescription = $_POST["desc_post"];

    try {
        $pdo = new PDO('sqlite:veri.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
    }


    $sql = "INSERT INTO post_blog (title_post, desc_post) VALUES (:title_post, :desc_post)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title_post', $postTitle);
    $stmt->bindParam(':desc_post', $postDescription);

    try {
        $stmt->execute();

        header('Location: admin_panel.php');
        exit;
    } catch (PDOException $e) {
        die("Blog postu eklenirken bir hata oluştu: " . $e->getMessage());
    }
}
?>
