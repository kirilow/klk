
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
			<?php
				$js_array = [];
				foreach ($footer_js as $js) {
					$js_array[] = "'". $js ."'";
				};
				$js_array = implode(',',$js_array );
			?>
			<script type="text/javascript">
				
				const TO_LOAD = [
					'materialize.min.js',
					'main.js',
					<?=$js_array;?>
				];
				
				$.ajaxSetup({
					cache: true
				});
				function getScripts(scripts, callback) {//for one file
					var progress = 0;
					scripts.forEach(function(script) { 
						$.getScript("/pub/js/"+script, function () {
							if (++progress == scripts.length) callback();
						}); 
					});
				}
				
				if (typeof jQuery !== 'undefined') {
					
					(function self(a,cb,i){
						i = i || 0; 
						cb = cb || function(){};    
						if(i==a.length)return cb();
						$.getScript("/pub/js/"+a[i++],self.bind(0,a,cb,i));                    
					})(TO_LOAD,function(){console.log('done')});
				} else {
					window.setTimeout(function () { waitForjQuery(); }, 100);
				}
				
				
				
				
				
			</script>
<!--				<script defer type="text/javascript" src="/pub/js/materialize.min.js"></script>
				<script defer type="text/javascript" src="/pub/js/main.js"></script>-->
				<?php
//					foreach ($footer_js as $js) {
//						//echo $js.PHP_EOL;
//					};
				?>
			
		</footer>
    </body>
</html>

