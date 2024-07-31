<?php
/*
Template Name: MailingList
*/

get_header(); ?>

<div class="articlecolumn">
<?php while ( have_posts() ) : the_post(); ?>
<div class="articlehead">
<?php
the_title();
edit_post_link('*');
?>
</div>

<?php  the_content(); ?>	

<?php
/*
<form name="frmLML" method="post" action="https://api.lolipop.jp/api/api.php?cmd=ml" target="_blank">
	<input type="hidden" name="account" value="liste">
	<input type="hidden" name="domain" value="ml.onsem.info">
	Email Adresse<input type="text" style="width:130px;" name="user_mail">
	<input type="submit" name="join" value="Subscribe">
	<input type="submit" name="resign" value="Unsubscribe">
</form>
*/
?>

<script language="javascript" type="text/javascript">
function jf_MLWindowOpen98236(ptype){
	window.open("about:blank","MLSUB","width=500,height=200,scrollbars=yes,status=yes,resizable=yes");
	document.frmLML98236.target = "MLSUB";
	document.frmLML98236.action = "https://api.lolipop.jp/api/api.php?cmd=ml&type="+ptype;
	document.frmLML98236.submit();
	console.log("Submitted", ptype);
}
</script>
<form name="frmLML98236" method="post">
	<input type="hidden" name="account" value="liste">
	<input type="hidden" name="domain" value="ml.onsem.info">
	<div style="width:200px;">Name:</div><input type="text" style="width:200px;" name="user_name"><br /><br />
	<div style="width:200px;">E-Mail-Adresse:</div><input type="text" style="width:200px;" name="user_mail"><br /><br />
	<input type="button" name="join" value="Anmelden" onclick="jf_MLWindowOpen98236('join');">
	<input type="button" name="resign" value="Abmelden" onclick="jf_MLWindowOpen98236('resign');">
</form>


<?php endwhile; ?>
</div>
	
<?php
get_sidebar();
get_footer();
?>

