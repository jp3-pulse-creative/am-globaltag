<?php
/* Single for Insights */
get_header(); ?>
<div id="single-insight" class="wrapper single-insight">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="hero-row mb-0">
				<?php include(TEMPLATEPATH . '/includes/general/hero.php'); ?>
			</div>
			<div class="hero-row">
				<?php include(TEMPLATEPATH . '/includes/general/inner-nav02.php'); ?>
			</div>
			<?php
			?>
			<div class="pepi-row mrg-t-5">
				<div class="container reduced-container2">
					<div class="row">
						<div class="col-sm-12">
							<div class="insight-title">
								<h1 class="bold"><?php echo get_the_title() ?></h1>
								<p class="authors">
									<?php
									$a1 = get_field('author_name_1');
									$a2 = get_field('author_name_2');
									$a3 = get_field('author_name_3');
									$a4 = get_field('author_name_4');

									if ($a1 && $a2 && $a3 && $a4) {
										echo "<a href='" . get_field('author_link_1') . "' target='_blank'>" . $a1 . ", "
											. get_field('author_title_1') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_2') . "' target='_blank'>" . $a2 . ", "
											. get_field('author_title_2') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_3') . "' target='_blank'>" . $a3 . ", "
											. get_field('author_title_3') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_4') . "' target='_blank'>" . $a4 . ", "
											. get_field('author_title_4') . "</a>";
									} elseif ($a1 && $a2 && $a3) {
										echo "<a href='" . get_field('author_link_1') . "' target='_blank'>" . $a1 . ", "
											. get_field('author_title_1') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_2') . "' target='_blank'>" . $a2 . ", "
											. get_field('author_title_2') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_3') . "' target='_blank'>" . $a3 . ", "
											. get_field('author_title_3') . "</a>";
									} elseif ($a1 && $a2) {
										echo "<a href='" . get_field('author_link_1') . "' target='_blank'>" . $a1 . ", "
											. get_field('author_title_1') . "</a>";
										echo ' | ';
										echo "<a href='" . get_field('author_link_2') . "' target='_blank'>" . $a2 . ", "
											. get_field('author_title_2') . "</a>";
									} elseif ($a1) {
										echo "<a href='" . get_field('author_link_1') . "' target='_blank'>" . $a1 . ", "
											. get_field('author_title_1') . "</a>";
									} else {
										$acount = 1;
										$authors = get_field('authors-linked');

										$authors_pepi = get_field('insight_options');
										if ($authors_pepi == 'allpepi') {
											$amax = sizeof(array($authors));
											foreach ($authors as $author) {
												echo "<a href='" . get_field('profile_url') . "' target='_blank'>" . get_field('first_name', $author) . " " . get_field("last_name", $author) . ", "
													. get_field("job_title", $author)['label'] . "</a>";
												if ($acount < $amax) {
													echo " | ";
												}
												$acount++;
											}
										} else {
											$authors = get_field("authors");
											$amax = sizeof(array($authors));
											while (have_rows('authors')) {
												the_row(); ?>
												<?php
												echo "<a href='" . get_sub_field('personal_page') . "' target='_blank'>" . get_sub_field("first_name") . " " . get_sub_field("last_name") . ", "
													. get_sub_field("job_title") . "</a>";
												?>
									<?php
												if ($acount < $amax) {
													echo " | ";
												}
												$acount++;
											}
										}
									}

									?>

								</p>

								<div class="pd-service">
									<?php
									$terms = get_the_terms($post, 'category');
									$tmax = sizeof(array($terms));
									$tcount = 1;
									if ($terms): ?>
										<p>Region: <strong>
												<?php
												foreach ($terms as $term) {
													if (get_field('page_link', $term)) {
														echo "<a href='" . get_field('page_link', $term) . "'>" . $term->name . "</a>";
													} else {
														echo $term->name;
													}
													if ($tcount < $tmax) {
														echo ", ";
													}
													$tcount++;
												}
												?></strong>
										</p>
									<?php endif; ?>
								</div>

								<div class="short-border"></div>
							</div>
							<div class="insight-content">
								<?php echo get_field('tl-post-content'); ?>
								<?php
								$additional_options = get_field('insight_options_additional');
								if ($additional_options && in_array('source', $additional_options)) : ?>

									<p class="source"><?php
														$source = get_field('source');
														$linked_text = preg_replace('/(http[s]{0,1}\:\/\/\S{4,})\s{0,}/ims', '<a href="$1" target="_blank">$1</a> ', $source);
														echo $linked_text;
														?></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="insight-authors" class="pepi-row">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="ins-authors">
								<?php
								$authors_pepi = get_field('insight_options');
								if ($authors_pepi == 'allpepi') {
									foreach ($authors as $author) {
								?>
										<div class="ins-author">
											<div class="insa-img"
												style="background-image:url(<?php echo get_field('profile_image', $author) ?>);">
											</div>
											<div class="insa-content">
												<a href="<?php echo get_field('profile_url', $author) ?>" target="_blank">
													<h4><?php echo get_field('first_name', $author) . " " . get_field('last_name', $author) ?>
													</h4>
												</a>
												<p><?php echo get_post_field('post_content', $author); ?></p>
												<div class="insa-urls">
													<a href="mailto:<?php echo get_field('email', $author) ?>"><i
															class="far fa-envelope"></i></a>
													<a href="<?php echo get_field('linkedin_url', $author) ?>" target="_blank"><i
															class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>

									<?php
									}
								} else {
									while (have_rows('authors')) {
										the_row(); ?>

										<div class="ins-author">
											<div class="insa-img"
												style="background-image:url(<?php echo get_sub_field("profile_image"); ?>);">
											</div>
											<div class="insa-content">
												<a href="<?php echo get_sub_field('personal_page') ?>" target="_blank">
													<h4><?php echo get_sub_field("first_name") . " " . get_sub_field("last_name"); ?>
													</h4>
												</a>
												<p><?php echo get_sub_field("short_description"); ?></p>
												<div class="insa-urls">
													<a href="mailto:<?php echo get_sub_field('email') ?>"><i
															class="far fa-envelope"></i></a>
													<a href="<?php echo get_sub_field('linkedin') ?>" target="_blank"><i
															class="fab fa-linkedin-in"></i></a>
												</div>
											</div>
										</div>

								<?php }
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="nav-wrap text-right w-100 text-uppercase d-flex flex-column flex-md-row justify-content-between">



						<div class="ml-auto mb-5">
							<?php if (!get_previous_post_link()): ?>
								<a href="<?php echo site_url(); ?>/our-team/" rel="prev">
									<div class="d-flex align-items-center justify-content-end next-button plain-btn right">
										<h5 class="d-inline text-truncate mr-3 mb-0">All Thought Leadership</h5> <svg class="mr-3"
											xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 21.634 39.025"
											style="transform: rotate(180deg);">
											<g id="arrow_left" data-name="arrow left" transform="translate(2.121 1.061)">
												<path id="arrow_left-2" data-name="arrow left" d="M25.952,44.4,7.5,25.952,25.952,7.5"
													transform="translate(-7.5 -7.5)" fill="none" stroke="#00244A" stroke-width="4"></path>
											</g>
										</svg>
									</div>
								</a>
							<?php else: ?>

								<?php previous_post_link('%link', '<div class="d-flex align-items-center justify-content-end next-button plain-btn right"><h5 class="d-inline text-truncate mr-3 mb-0">%title</h5> <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 21.634 39.025" style="transform: rotate(180deg);">
		<g id="arrow_left" data-name="arrow left" transform="translate(2.121 1.061)">
			<path id="arrow_left-2" data-name="arrow left" d="M25.952,44.4,7.5,25.952,25.952,7.5" transform="translate(-7.5 -7.5)" fill="none" stroke="#00244A" stroke-width="4"></path>
		</g>
	</svg></div>'); ?>
							<?php endif; ?>

						</div>


					</div>
				</div>
			</div>



		<?php endwhile;
	else : ?>

		<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif;
	wp_reset_postdata(); ?>

</div>

<script>
	$(document).ready(function() {
		$(".sics-btn").click(function(e) {
			e.preventDefault();
			if (!$(this).parent().hasClass("active")) {
				$(".si-case-study").removeClass("active");
				$(this).parent().addClass("active");
			} else {
				$(".si-case-study").removeClass("active");
			}
		})
	});
</script>
<?php get_footer(); ?>