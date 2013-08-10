<div class="post" data-attr-id="<?php echo $data->id; ?>">
	<div class="post-metadata">
		<div class="post-metadata-inner">
			<span class="row comments">
				<strong><?php echo $data->comment_count; ?></strong> <span class="icon-comment"></span>
			</span>
			<span class="row likes">
				<strong><?php echo $data->like_count; ?></strong> <span class="icon-heart"></span>
			</span>
			<!--<span class="row views">
				<strong>0</strong> <span class="icon-bar-chart"></span>
			</span> -->
		</div>
	</div>
	<div class="post-data">
		<h6><?php echo ($data->title !== '' ? $data->title : CHtml::tag('em', array(), 'Drafted Post')); ?></h6>
		<span class="author">By: <?php echo $data->author->displayName; ?></span>

		<?php if ($data->status == 0): ?>
			<span class="status draft">Draft</span>
		<?php elseif ($data->status == 1 && strtotime($data->published) > time()): ?>
			<span class="status scheduled">Scheduled for 
				<?php echo CHtml::tag(
					'abbr',
					array(
						'data-original-title'=> Cii::formatDate($data->published),
						'title'=> Cii::formatDate($data->published, 'c')
					),
					Cii::formatDate($data->published)
					); ?>
			</span>
		<?php else: ?>
			<span class="status published">
				<?php echo CHtml::tag(
					'abbr',
					array(
						'data-original-title'=> Cii::formatDate($data->published),
						'title'=> Cii::formatDate($data->published, 'c'),
						'class' => 'timeago'
					),
					Cii::formatDate($data->published)
					); ?>
			</span>
		<?php endif; ?>

	</div>
	<div class="clearfix"></div>
</div>