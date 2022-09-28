<!DOCTYPE html>  
<html>
<head>
<title>Them bai viet</title>
</head>
   
<body>
<form action="posts_add.php" enctype="multipart/form-data" method="post" class="form">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Tieu de </td>
    <td width="329"><input type="text" name="title"/></td>
  </tr>
  <tr>
    <td>URL </td>
    <td><input type="text" name="url"/></td>
  </tr>
    <tr>
    <td>Content </td>
    <td><textarea name="content" id="content" placeholder="day la noi dung:..." class="noidung" rows="10" cols="80"></textarea></td>
  </tr>
    <tr>
    <td>Anh </td>
    <td><input type="hidden" name="size" value="1000000">
<input type="file" name="image" class="hinhanh"><br/><br/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Save Data"/></td>
  </tr>
</table>
</form>
<h2>Noi dung trong Database</h2>
<?php require 'posts_xuly.php';?>
</body>
</html>