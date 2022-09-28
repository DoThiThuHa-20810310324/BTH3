<head>
<title>Sửa dữ liệu trong Database</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
require_once 'posts_connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `posts` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form">
<h2>Sua thanh vien</h2>
<label>Tieu de:<br/>
<input type="text" value="<?php echo $row['title']; ?>" name="title" id="title"/></label><br/>
<label>URL:<br/>
<input type="text" value="<?php echo $row['url']; ?>" name="url" id="url"/></label><br/>
<label>Noi dung:<br/>
<textarea value="" name="content" id="content" rows="10" cols="80"/><?php echo $row['content']; ?></textarea></label><br/>
<label>Hinh anh: <br/>
<input type="text" value="<?php echo $row['image']; ?>" name="image"/></label><br/>
<input type="submit" value="Update" name="update_posts">
<?php require_once 'posts_update.php';?>
</form>
</body>
</html>