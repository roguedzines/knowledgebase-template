<?php
function hic_content_integration($post_id){
global $post;
$postid = $post->post_name;
$mypath ='/var/www/html/integration/';
$template = '/var/www/html/integration/template.php';
	//mkdir($mypath,0777,TRUE);
$new_permalink = post_permalink($post_id);
$prettyname = 'http://hiconversion.com/integration/'.$postid;
$filename = $mypath.''.$postid.'.php';
$modifypattern = str_replace('/var/www/html/','/http://hiconversion.com/',$filename);
// wp_enqueue_script('customsave',get_template_directory_uri() . '/js/customsave.js',array('jquery'),'1.4.8',true);
//var_dump($modifypattern);
$handle = fopen($filename,"w+");
$somecontent = file_get_contents($template);
$handle = fopen($filename,"a+");
$somecontent = file_get_contents($new_permalink);
fwrite($handle,$somecontent);
fclose($handle);
//
}
add_action( 'save_post', 'hic_content_integration',10,3);
?>
