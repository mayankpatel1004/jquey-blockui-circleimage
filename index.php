<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript">
jQuery.noConflict();
	
jQuery(document).ready(function() { 
    jQuery('#open_block').click(function() { 
        jQuery.blockUI({ 
            message: jQuery('#close_block'), 
            css: { top:  '10%', left: '35%'} 
        }); 
 
        setTimeout(jQuery.unblockUI, 200000); 
    }); 
});
</script>
<div id="test" style="display:none;"></div>
<div id="open_block">Show Content</div>
<div id="close_block" style="display:none">
	<div onclick="jQuery.unblockUI();" style="text-align:right;cursor:pointer;"><strong>X</strong></div>
		<img src="https://fbcdn-dragon-a.akamaihd.net/cfs-ak-prn1/676655/83/276449379149296_1538611903.png" width="100" height="100" style="float:left;" />
        <span style="float:left;">
         Lorem ipsum dolor sit amet, consectetur adipiscing <br /> elit. Mauris pharetra mollis mi. Curabitur metus est, accumsan eget gravida non, scelerisque ut dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In non iaculis odio. Sed hendrerit velit et eros ultricies, sed convallis ante hendrerit. Phasellus semper viverra ligula, aliquam bibendum ligula vulputate at. Nam molestie ornare porta. Pellentesque consequat iaculis euismod.

</span>
</div>
<style type="text/css">
.blockMsg {border-radius: 150% 150% 150% 150% !important;height: 330px !important;overflow: hidden !important;padding: 0 !important;top: 10% !important;width: 360px !important;}
</style>