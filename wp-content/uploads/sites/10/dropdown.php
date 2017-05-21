<?php

$bsr = substr($_SERVER['HTTP_USER_AGENT'], 0, 31);

if ($bsr!='Mozilla/4.0 (compatible; MSIE 5' && $bsr!='Mozilla/4.0 (compatible; MSIE 6') {

echo '

<ul id="mr-1">
   <li><a href="#">&#9660;</a>
      <ul class="mr-2">';

		if ($st=='a') { echo '<li><a href="?st=a">&gt; Amazon &lt;</a></li>';} else { echo '<li><a href="?st=a">Amazon</a></li>'; }
		if ($st=='w') { echo '<li><a href="?st=w">&gt; Wikipedia &lt;</a></li>';} else { echo '<li><a href="?st=w">Wikipedia</a></li>'; }
		if ($st=='v') { echo '<li><a href="?st=v">&gt; Video &lt;</a></li>';} else { echo '<li><a href="?st=v">Video</a></li>'; }
		if ($st=='b') { echo '<li><a href="?st=b">&gt; Books &lt;</a></li>';} else { echo '<li><a href="?st=b">Books</a></li>'; }
		if ($st=='s') { echo '<li><a href="?st=s">&gt; Scholar &lt;</a></li>';} else { echo '<li><a href="?st=s">Scholar</a></li>'; }
		if ($st=='f') { echo '<li><a href="?st=f">&gt; Finance &lt;</a></li>';} else { echo '<li><a href="?st=f">Finance</a></li>'; }
		if ($st=='sh') { echo '<li><a href="?st=sh">&gt; Shopping &lt;</a></li>';} else { echo '<li><a href="?st=sh">Shopping</a></li>'; }
		if ($st=='bl') { echo '<li><a href="?st=bl">&gt; Blogs &lt;</a></li>';} else { echo '<li><a href="?st=bl">Blogs</a></li>'; }

		  echo '
      </ul>
   </li>
</ul>

'; }

?>
