		<?php //The URL that we want to GET.
							$username = $_POST['facebook_username'];
							$access_token = $_COOKIE['access_token'];
							$temp_access_token = '372086016640997|TLwGog3W1xNNM_6lNKjVYE8NhYc';    //permanent access_token
							$base_url = 'https://graph.facebook.com/v2.12/';
							//The URL that we want to GET.
							$url = $base_url.'search?q='.$username.'&type=page&access_token='.$temp_access_token;
							// $encoded = urlencode($url);
							echo $url;
							$contents = file_get_contents($url);
							$response = json_decode($contents);
							$data = $response->data;
							echo $data[0]->id;
							//Use file_get_contents to GET the URL in question.
							// $data = get_n_parse_json($url);
							// $page_id = $data[0]->id;
							// $url = $base_url.$page_id.'/posts';
							// // echo $page_id;
							// $arr_posts = get_n_parse_json($url);
							// // To get only first five posts
							// $arr_post_ids = array();
							// //If $contents is not a boolean FALSE value.
							// if($contents !== false){
							//     //Print out the contents.
							//     $i = 0;
							// 	foreach ($arr_posts as $item) {
							// 		$arr_post_ids[] = $item->id;
							// 		$i++;
							// 		if ($i == 5) {
							// 			break;
							// 		}
							// 	}
							// }
							// For posts comments
						?>
						<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Reactions</th>
						        <th>Comments</th>
						        <th>Sentimental Response</th>
						      </tr>
						    </thead>
						    <tbody>
						      	<tr>
						      		<td><?php echo get_post_reactions_count($base_url, $arr_post_ids[0], $temp_access_token); ?></td>
						      		<td><?php echo get_post_comments_count($base_url, $arr_post_ids[0], $temp_access_token); ?></td>
						      		<td></td>
						      	</tr>
						      	<tr>
						      		<td><?php echo get_post_reactions_count($base_url, $arr_post_ids[1], $temp_access_token); ?></td>
						      		<td><?php echo get_post_comments_count($base_url, $arr_post_ids[1], $temp_access_token); ?></td>
						      		<td></td>
						      	</tr>
						      	<tr>
						      		<td><?php echo get_post_reactions_count($base_url, $arr_post_ids[2], $temp_access_token); ?></td>
						      		<td><?php echo get_post_comments_count($base_url, $arr_post_ids[2], $temp_access_token); ?></td>
						      		<td></td>
						      	</tr>
						      	<tr>
						      		<td><?php echo get_post_reactions_count($base_url, $arr_post_ids[3], $temp_access_token); ?></td>
						      		<td><?php echo get_post_comments_count($base_url, $arr_post_ids[3], $temp_access_token); ?></td>
						      		<td></td>
						      	</tr>
						      	<tr>
						      		<td><?php echo get_post_reactions_count($base_url, $arr_post_ids[4], $temp_access_token); ?></td>
						      		<td><?php echo get_post_comments_count($base_url, $arr_post_ids[4], $temp_access_token); ?></td>
						      		<td></td>
						      	</tr>
						    </tbody>
					  </table>
					</div>
				</div>
			</div>
