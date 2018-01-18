		<footer class="footer" role="contentinfo">
			<div class="c h">
				<?php the_field('footer','option');?>
			</div>
		</footer>
		<?php wp_footer(); ?>
		</div>
		<?php get_template_part('sidebar');?>
	</body>
	<?php edit_post_link(); ?>
</html>



