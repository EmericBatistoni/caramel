<div id="menu">
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo(site_url('campagne/edit').'/'.$campagne[0]->CAM_ID);?>" title="Informations generales sur la campagne">Informations</a></li>
			<li><a href="<?php echo site_url('campagne/list_offres').'/'.$campagne[0]->CAM_ID;?>" title="Informations relatives aux offres de la campagne">Offres</a></li>
		</ul>
	</div>
	
	<!-- data-toggle="tab" supprim�, je ne sais pas � quoi cela servait mais �a faisait plant� le menu -->