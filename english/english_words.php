<?php include "../partials/header.php" ?>
</header>

<body>


<section class="words-section">
			
			<?php include_once "../data/slova_anglictina.php";?>

			
				<ul class="menu_words_buttons">
					<li class="show_sectionsMenu">Zobraz menu</li>
					<li id ="random">Náhodně</li>
					<li id="vsecko" class="selected">All</li>
					<li id="words_closeAll">Zavřít vše</li>
				</ul>
			

			

			<ul class="choose_words_section">	
				<?php createMenuWords($data_anglictina)?>
			
		</section>

	
	
		
            </body>
        <?php include "../partials/footer.php"?>