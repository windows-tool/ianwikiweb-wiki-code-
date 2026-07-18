<?php include 'config.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Ian위키</title>
    <link rel="icon" href="wk.png" type="image/jpeg">
    <link rel="stylesheet" href="https://ianwiki.kr/common.css">
</head>
<body>

<header class="navbar">
    <a href="view.php?title=홈" class="logo">🏠 Ian위키</a>
    <input type="checkbox" id="menu-toggle" class="menu-toggle">
    <label for="menu-toggle" class="menu-icon">&#9776;</label>
    <div class="nav-links">
        <?php if (isset($_SESSION['user'])): ?>
            <span class="user-info"><?= $_SESSION['user']['username'] ?>님</span>
            <a href="edit.php">문서작성</a>
            <a href="logout.php">로그아웃</a>
        <?php else: ?>
            <a href="login.php">로그인</a>
            <a href="register.php">회원가입</a>
        <?php endif; ?>
    </div>
</header>

<main>
    <form method="get" action="search.php">
        <input type="text" name="q" placeholder="문서 검색">
        <button type="submit">검색</button>
    </form>
</main>

</body>
</html>

