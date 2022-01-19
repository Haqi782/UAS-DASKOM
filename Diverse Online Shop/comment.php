<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<!-- header -->
<header>
		<div class="container">
		<h1></a><span>D</span>iverse <span>O</span>nline <span>S</span>hop</h1>
		<ul>
			<li class="active"><a href="index.html">HOME</a></li>
			<li class="active"><a href="galery.html">GALERY PRODUCT</a></li>
			<li class="active"><a href="about.html">ABOUT</a></li>
			<li class="active"><a href="comment.php">COMMENT</a></li>
      <li class="active"><a href="contact.html">CONTACT US</a></li>
		</ul>
		</div>
		<hr>
	</header>

  <div class="div1">
    <h2>COMMENT</h2><br>
    <div>
      <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
        <label>Nama</label>
        <input type="text" name="fnama" placeholder="Nama anda...">
        <label>Penilaian</label>
        <select id="nilai" name="fnilai">
            <option value="">-----</option>
            <option value="sangatmemuaskan">Sangat Memuaskan</option>
            <option value="memuaskan">Memuaskan</option>
            <option value="kurangmemuaskan">Kurang Memuaskan</option>
        </select>
        <br><br>
        <label>Kritik dan Saran</label>
        <textarea name="fks"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div><br>
      <?php
        if (isset($_POST['fnama'])){
          $nama=$_POST['fnama'];
          $nilai=$_POST['fnilai'];
          $kritiksaran=$_POST['fks'];
          
          echo "List Comment";
          echo "<table id='comment'>";
          echo "<tr><th>No</th><th>Nama</th><th>Penilaian</th><th>kritik dan Saran</th></tr>";
          echo "<tr><td>1.</td><td>$nama</td><td>$nilai</td><td>$kritiksaran</td></tr>";
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>