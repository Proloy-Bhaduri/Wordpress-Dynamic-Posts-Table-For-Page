<h1> Wordpress Dynamic Posts Table For Page</h1>
Wordpress Dynamic Posts Table is an wordpress plugin where bloggers can list their posts for their job portal or news portal in a customized manner.
<h4>How to use </h4>
<pre><center>[catposts cat-name="post-category-name"]</center></pre>
<p>The above shortcode should be added to the page,where you want to display posts from a particular category say <i><b>Sports</b></i> in a news portal</p>
<h6>Dependencies</h6>
 to get striped and centered table include <pre>materializecss.min.css</pre> to the head  of your page .
 To enable the shortcode goto the <b>functions.php</b> of your theme and add this code <pre>include( get_stylesheet_directory() . '/shortcode.php' );</pre> <br>
 upload this <b>shortcode.php</b> file to root folder of your website's currently active theme  .
Note:<code>post-category-name</code>must be replaced with the desired common category name .
e.g., we added the shortcode <pre>[catposts cat-name="IR"]</pre><br>
<img src="https://i.ibb.co/2P7Nbvr/snap.png" alt="snap" border="0"><br>
and got the display as below, <br><br>
<img src="https://i.ibb.co/6w8Psyh/snap-4.jpg" alt="snap-4" border="0"><br><br>
<h4>NOTE:</h4> With the increase of the posts in a particular category the table rows will be generated dynamically, displaying specific post data.

