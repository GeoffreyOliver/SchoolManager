<section id="content">
	<div id="main">
		<?php 
		
		$output = $this->session->userdata('sess');
		$title = $output['class'];
		echo '<div class="classes">';
			echo '<p> View Spreadsheets </p>';
			echo heading($title, 3);
			echo "<p>Select a Stream.</p>";
			?>

			<ul>
			<?php 
			foreach($streams->result() as $row)
			{
				echo '<li class="acd_button"><a href="'.base_url()."academics/spreadsheets/streams/{$row->STREAMS}\">{$row->STREAMS}</a></li>"; 

			}
			?>
			</ul>
		</div>

	</div>
</section>
