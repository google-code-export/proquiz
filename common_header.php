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
?><!--[if lte IE 6]>
<meta http-equiv="refresh" content="0; url=ie6.html" />
<script type="text/javascript">
/* <![CDATA[ */
window.top.location = 'ie6.html';
/* ]]> */
</script>
<![endif]-->
<link rel="stylesheet" href="css/jquery.rating.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.rating.js"></script>
<script type="text/javascript" src="js/jquery.metadata.js"></script>
<script type="text/javascript" src="js/jquery.md5.js"></script>
<script type="text/javascript" src="js/jquery.vticker.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.tooltip.js"></script>
<script type="text/javascript">
    $(function() {

        $('.iconBox a,.iconBoxd a,form input').tooltip({
	track: true,
	delay: 0,
	showURL: false,
	fixPNG: true,
	showBody: " - ",
	extraClass: "pretty",
	top: -15,
	left: 5
});
 
    });
</script>