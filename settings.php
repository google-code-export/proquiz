<?php
/*!
 * **************************************************************
 ****************  ProQuiz V2 ******************************
 ***************************************************************/
 /* documentation at: http://proquiz.softon.org/documentation/
 /* Designed & Maintained by
 /*                                    - Softon Technologies
 /* Developer
 /*                                    - Manzovi
 /* For Support Contact @
 /*                                    - proquiz@softon.org
 /* Release Date : 02 Feb 2011
 /* Licensed under GPL license:
 /* http://www.gnu.org/licenses/gpl.html
 */
?>
<style type="text/css">
<!--
	#settings fieldset{
	   background:#ebf4fb;
	}
    
    #settings label {
        display:block;
        font-weight:bold;
        text-align:right;
        width:40%;
        float:left;
    }
    
    #settings input,#settings select,#settings textarea{
        float:left;
        font-size:12px;
        margin:2px 0 20px 10px;
    }
    
-->
</style>
<div id="newquiz" style="margin-top: 50px;">
  <form action="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=settings&subaction=editsett'; ?>" enctype="multipart/form-data" method="post" id="settings">
  <?php
        $group_arr = getSettingsGroup($db);
        foreach($group_arr as $value){
  ?>
  <fieldset>
		<legend><?php echo $value['group']; ?></legend>
		<ul>
        <?php
            $sett_arr = getSettingsArr($db,$value['group']);
            foreach($sett_arr as $sett){
                if($sett['group']=='Modules'){
                    $setTemp = explode("|",$sett['details']);
                    $sett['details'] = $setTemp[0];
                }
                if($sett['type'] == 'checkbox'){
                    if($sett['value']){
                        $check = 'checked="checked"';   
                    }else{
                        $check = "";
                    }
                    if($sett['param'] != 'installed'){
                        $disabled = ' disabled="disabled"';
                    }else{
                        $disabled = '';
                    }
                    $ansval = '1';
                }else{
                    $ansval = $sett['value'];
                }
        ?>
			<li>
				<label for="<?php echo $sett['name']; ?>"><span class="required"><?php echo $sett['details']; ?></span></label>
				<input id="<?php echo $sett['name']; ?>" <?php echo $check.$disabled; ?> name="<?php echo $sett['name']; ?>" type="<?php echo $sett['type']; ?>" value="<?php echo $ansval; ?>" />
			</li>
        <?php } ?>
		</ul>
	</fieldset>
  <?php } ?>
    <fieldset style="background:#fff;" class="submit">
		<input type="submit" style="border:solid 1px #fff;padding: 0;margin: 0;" class="sbutton" value="Done..." /> 
	</fieldset>
</form>
</div>