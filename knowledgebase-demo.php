<html lang="en-US" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->

		<style type="text/css">
		img {
			max-width: 100%;
			height: auto;
		}
@media \0screen {
  img {
  	width: auto; /* for ie 8 */
  }
}
		</style>
	</head>
	<body>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		Launch demo modal
		</button>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">
						<?php
            /* Pull data from knowledgebase site */
            //global
            $domain_name = 'http://hiconversion.com/hic_kb/grouping/';

function find_title($domain_name)
{
    $pattern      = '/http:\/\/[hiconversion.com\/hic_kb]/';
    $new_domain   = $domain_name;
    $domain_match = preg_match($pattern, $new_domain, $matches);
    if (preg_match($pattern, $domain_name, $matches)) {
        $content = file_get_contents($domain_name);
        $regex   = '#\<title\>(.+?)\<\/title\>#s';
        $text    = $content;
        if (preg_match($regex, $content, $matches)) {
            $title = $matches[0];
            echo strip_tags($title);
        } else {

            echo 'error';
        }
    }
}
find_title($domain_name);
?>
						</h4>
					</div>
					<div class="modal-body">
						<?php
function find_page($domain_name)
{
    $pattern      = '/http:\/\/[hiconversion.com\/hic_kb]/';
    $new_domain   = $domain_name;
    $domain_match = preg_match($pattern, $new_domain, $matches);
    if (preg_match($pattern, $domain_name, $matches)) {
        $content = file_get_contents($domain_name);
        $regex   = '#\<div class="entry-content"\>(.+?)\<\/div\>#s';
        $text    = $content;
        if (preg_match($regex, $content, $matches)) {
            $entry = $matches[0];
            echo '<div>' . $entry . '</div>';
        } else {

            echo 'error';
        }
    }
}

find_page($domain_name);
?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#myModal').on('shown.bs.modal', function () {
			$('#myInput').focus()
			});
			});
			</script>
		</body>
	</html>
