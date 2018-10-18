
				</div>
			</div>
		</main>
		<footer class="page-footer">
			<div class="footer-copyright">
				<div class="container">
					© 2018 Copyright Text
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
			<script type="text/javascript" src="/pub/js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="/pub/js/materialize.min.js"></script>
			<script type="text/javascript" src="/pub/js/main.js"></script>
			<?php
				foreach ($footer_js as $js) {
					echo $js.PHP_EOL;
				};
			?>
		</footer>
    </body>
</html>

