<?php
function catposts_shortcode( $atts ) {
   $a = shortcode_atts( array(
      'cat-name' => 'world'
   ), $atts );
   $catpost_query = new WP_Query(array('category_name'=>$a['cat-name'],));
    $num = $catpost_query->found_posts;?>
    <!--<ul class="collection">-->
     <table class="striped centered">
        <thead>
          <tr>
              <th>Published Date</th>
              <th>Job Title</th>
              <th>Last Date</th>
          </tr>
        </thead>

        <tbody>
  <?php if ( $catpost_query->have_posts() ) {
    while ( $catpost_query->have_posts() ) {
        $catpost_query->the_post();
         if(get_the_date('H')>=0 ||get_the_date('H')<12 )
         $apm= 'AM';
        else 
        $apm = 'PM'; 
    
       echo '
          <tr>
            <td>'.get_the_date('F jS,Y,l | H:i').' '.$apm.'</td>
            <td><a class="indigo-text" style="font-size:16px;text-decoration:none;" href="'.get_the_permalink().'"  style="text-decoration:none;font-size:14px;color:black;font-weight:lighter;">'.get_the_title().'</a>&nbsp;</td>
            <td>Not Set</td>// custom field data can be used and it is given in the readme.md
          </tr>';
	} 
}  ?>
 </tbody>
      </table>
<!--</ul>-->
<?php	wp_reset_postdata();
}
add_shortcode( 'catposts', 'catposts_shortcode' );
?>