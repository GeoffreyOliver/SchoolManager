<section id="content">
	<div id="main">
		<?php 

		echo '<div class="classes">';
			echo '<p> View Results </p>';
			echo "<p>Select a Class.</p>";
			?>

			<ul>
			<?php 
			foreach($classes->result() as $row)
			{
				echo '<li class="acd_button"><a href="'.base_url()."academics/view/class/{$row->CLASS}\">{$row->CLASS}</a></li>"; 

			}
			?>
			</ul>
		</div>

	</div>
</section>
