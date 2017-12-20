<script type="text/javascript"><?php foreach ($questions as $question): ?>$('.slider<?php echo $question['id']; ?>').on('change input',function() {$('.rating<?php echo $question['id']; ?>').text($(this).val());});<?php endforeach; ?></script>
	</section>
</body>
</html>