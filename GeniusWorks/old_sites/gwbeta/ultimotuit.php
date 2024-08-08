	<tr height="60" valign="top">
				<td colspan="2">
					<div class="memberSectionTitle">Último tuit:</div>
					<div class="memberSectionContent">
						<?php 
							function getTwitterStatus($userid){
							$url = "http://twitter.com/statuses/user_timeline/$userid.xml?count=1";
							 
							$xml = simplexml_load_file($url) or die("could not connect");
							 
							    foreach($xml->status as $status){
							    $text = $status->text;
							    }
							    echo utf8_decode($text);
							    echo "&nbsp; <a href='http://twitter.com/".$userid."' target='_blank'>@$userid</a>";
							}
							 
							//my user id XXXXXXX
							getTwitterStatus($fila['twitter_id']);							
						?>

					</div>
				</td>
			</tr>