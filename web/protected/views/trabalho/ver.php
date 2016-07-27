<?php
$this->menu = [];

if($trabalho->status == 0){
	$this->menu[] = ['<i class="uk-icon uk-icon-play"></i> Distribuir',$this->createUrl('/trabalho/iniciar',[
		'id'=>$trabalho->id,])];
	$this->menu[] = ['<i class="uk-icon uk-icon-cog"></i> Configurar',$this->createUrl('/trabalho/editar',[
		'id'=>$trabalho->id,])];
	$this->menu[] = ['Apagar/reset',$this->createUrl('/trabalho/excluir',[
		'id'=>$trabalho->id,]),[
		'confirm'=>'Certeza?',]];
}
if($trabalho->status == 1)
	$this->menu[] = ['<i class="uk-icon uk-icon-pause"></i> Pausar trabalho',$this->createUrl('/trabalho/pausar',[
		'id'=>$trabalho->id,])];

$this->menu[] = ['Ver processadas',$this->createUrl('/trabalho/finalizadas',[
	'id'=>$trabalho->id,])];

?>
<h3>
	<?=CHtml::link('Trabalhos',$this->createUrl('/trabalho/index'));?> 
	&raquo; <?=$trabalho->nome?>
</h3>
<hr>
<div id='status'>
	<?php $this->renderPartial('_ver',[
		'trabalho'=>$trabalho,
		'faltaProcessar'=>$faltaProcessar,
	]); ?>
</div>

<?php if($trabalho->status != 0): ?>
	<script>
		function notifyMe() {
		  if (("Notification" in window)) {
			  if (Notification.permission === "granted") {
			  	notify();
			  } else if (Notification.permission !== 'denied') {
			    Notification.requestPermission(function (permission) {
			      if (permission === "granted")	notify();
			    });
			  }
		  } 
		}
		function notify(){
			var notification = new Notification("Distribuindo...");
		}
		var count = 0;
		setInterval(function(){ 
			$.ajax({
				url: '<?=$this->createUrl('/trabalho/updateVer',['id'=>$trabalho->id]);?>',
			}).done(function(html) {
			    $('#status').html(html);
				if(count > 60) { notifyMe(); count = 0; }
				else count++;
			});
		}, 1000);
	</script>
<?php endif; ?>