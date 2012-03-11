<HTML>

<HEAD>

<!--
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
Designed for monthly updates only...  You will need to modify for dailies/yearlies.
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
-->

<?

// **************** IMPORTANT:  MUST CHANGE USERNAME AND PASSWORD

// user and database login

$userhost = "localhost";
$username = "YOUR_USERNAME";
$userpass = "YOUR_PASSWORD";
$dbname = "wuntsah";

$dbh=mysql_connect ($userhost, $username, $userpass) or die ('Unable to connect to the database.');
@mysql_select_db($dbname) or die( "Unable to select database.");


// if not the most recent year, edit $Year = date("Y"); to $Year = 2005; or whatever

// if (!$Year) { $Year = date("Y"); }
if (!$Year) { $Year = 2006; }

// if not your id (usually 1), change to someone else's id

if (!$id) { $id = 1; }

$result = MYSQL_QUERY("SELECT * FROM user WHERE id=1");

$full_name = MYSQL_RESULT($result,0,"full_name");
$profile = MYSQL_RESULT($result,0,"profile");
$age = MYSQL_RESULT($result,0,"age");
$job = MYSQL_RESULT($result,0,"job");
$personality = MYSQL_RESULT($result,0,"personality");
$location = MYSQL_RESULT($result,0,"location");
$sign = MYSQL_RESULT($result,0,"sign");
$chinese_sign = MYSQL_RESULT($result,0,"chinese_sign");

?>

 <TITLE>wuntsah... year:  <? ECHO $full_name; ?>'s <? ECHO "$Year"; ?></TITLE>
 <!-- Thank you, fadomatic! http://chimpen.com/fadomatic/index.html -->
 <SCRIPT LANGUAGE="JavaScript" SRC="fadomatic-1_1.js" TYPE="text/javascript"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript">

  <!--

<?

$i = 0;

$result = MYSQL_QUERY("SELECT * FROM y$Year WHERE id=1");
$number = MYSQL_NUMROWS($result);

WHILE ($i < $number) {
	$month = MYSQL_RESULT($result,$i,"month");
	$title = MYSQL_RESULT($result,$i,"title");
	$description = MYSQL_RESULT($result,$i,"description");
	$photo_path_thumb = MYSQL_RESULT($result,$i,"photo_path_thumb");
	$photo_path = MYSQL_RESULT($result,$i,"photo_path");

	if ($month == 1):
	  $month_n = "January";
	elseif ($month == 2):
	  $month_n = "February";
	elseif ($month == 3):
	  $month_n = "March";
	elseif ($month == 4):
	  $month_n = "April";
	elseif ($month == 5):
	  $month_n = "May";
	elseif ($month == 6):
	 $month_n = "June";
	elseif ($month == 7):
	  $month_n = "July";
	elseif ($month == 8):
	  $month_n = "August";
	elseif ($month == 9):
	  $month_n = "September";
	elseif ($month == 10):
	 $month_n = "October";
	elseif ($month == 11):
	  $month_n = "November";
	elseif ($month == 12):
	 $month_n = "December";
	endif;

    ECHO "
// $month_n
var " . $month_n . "Obj = new Object();

" . $month_n . "Obj.init = function() {

  var " . $month_n . " = document.getElementById(\"" . $month_n . "\");
  " . $month_n . ".onmouseover = " . $month_n . "Obj.handleMouseOver;
  " . $month_n . ".onmouseout = " . $month_n . "Obj.handleMouseOut;

  var show" . $month_n . " = document.getElementById(\"show" . $month_n . "\");
  " . $month_n . "Obj.fader = new Fadomatic(show" . $month_n . ", 5, 0, 0);

}

" . $month_n . "Obj.handleMouseOver = function() { " . $month_n . "Obj.fader.show(); }
" . $month_n . "Obj.handleMouseOut = function() { " . $month_n . "Obj.fader.fadeOut(); }\n\n";

    $checkMonth[$i] = $month_n;
    $i++;

}

?>

function init() {
<?
	for ($i = 0; $i < count($checkMonth); $i++) {
		switch ($checkMonth[$i]) {
		  case "January":  ECHO "  JanuaryObj.init();\n";  break;
		  case "February":  ECHO "  FebruaryObj.init();\n";  break;
		  case "March":  ECHO "  MarchObj.init();\n";  break;
		  case "April":  ECHO "  AprilObj.init();\n";  break;
		  case "May":  ECHO "  MayObj.init();\n";  break;
		  case "June":  ECHO "  JuneObj.init();\n";  break;
		  case "July":  ECHO "  JulyObj.init();\n";  break;
		  case "August":  ECHO "  AugustObj.init();\n";  break;
		  case "September":  ECHO "  SeptemberObj.init();\n";  break;
		  case "October":  ECHO "  OctoberObj.init();\n";  break;
		  case "November":  ECHO "  NovemberObj.init();\n";  break;
		  case "December":  ECHO "  DecemberObj.init();\n";  break;
		}
	}
?>
}

  // -->

 </SCRIPT>
 <LINK REL="stylesheet" TYPE="text/css" HREF="wuntsah.css">
</HEAD>

<BODY TOPMARGIN=0 MARGINHEIGHT=0 BGCOLOR="#9061dc" onLoad="init();">

<TABLE WIDTH=100% BORDER=0 CELLSPACING=3 CELLPADDING=0><TR>
<TD CLASS=LeftToolbar WIDTH=255 VALIGN=top>

<IMG SRC="spacer.gif" WIDTH=255 HEIGHT=2 BORDER=0 ALT=""><BR>

<!--
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
Change it to your name and your short little bio.
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
-->

<P>&nbsp;</P>

<CENTER>

<A HREF="http://wuntsah.benturner.com/"><IMG SRC="wuntsah_bo_logo.jpg" WIDTH=237 HEIGHT=108 BORDER=0 ALT="Wuntsah...  Watch Yourself Grow!"></A></A><BR>

<P>&nbsp;</P>

<BR>

<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 CLASS=BioToolbar ALIGN=center>
<TR><TD COLSPAN=2><FONT SIZE=+2><B>Hi!  I'm <? ECHO "$full_name"; ?>!</B></FONT></TD></TR>
<TR><TD VALIGN=top><IMG
SRC="ben_portrait.jpg" WIDTH=140 HEIGHT=105
BORDER=0 ALT="<? ECHO $full_name; ?>" TITLE="<? ECHO $full_name; ?>" ALIGN=left></TD><TD ALIGN=center VALIGN=top>
<A HREF="http://benturner.com/personal/">my autobio</A><BR>
<A HREF="http://benturner.com/">my web site</A><BR>
<A HREF="http://benturner.com/platform/">my platform</A><BR>
<A HREF="http://benturner.com/priv.php">my blog</A><BR>
<A HREF="http://flickr.com/photos/treydanger/">my flickr</A><BR>
<A HREF="http://www.google.com/notebook/public/13037734062335896580/BDTaBLAoQ34rA8rMh">my notebook</A><BR>
<A HREF="http://benturner.com/other/links.php">my linkdump</A><BR>
<A HREF="http://del.icio.us/volscio/">my del.icio.us</A><BR>
<A HREF="http://www.bf2player.com/index.php?page=stats&account=65263518&show=all-e">my battlefield 2</A><BR><BR>
</TD></TR></TABLE>

<BR>

</CENTER>

<TABLE ALIGN=center WIDTH=85% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR><TD CLASS=DetailsDiv>

<? ECHO "$profile"; ?>

</TD></TR></TABLE>

<!--
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
Add in links, change the links, whatever!
&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
-->

<BR>

<TABLE BORDER=0 CLASS=DetailsDiv ALIGN=center>
<TR><TH ALIGN=right>AGE:</TH><TD><? ECHO "$age"; ?></TD></TR>
<TR><TH ALIGN=right>JOB:</TH><TD><? ECHO "$job"; ?></TD></TR>
<TR><TH ALIGN=right><A HREF="http://www.typelogic.com/">PERSONALITY:</A></TH><TD><? ECHO "$personality"; ?></TD></TR>
<TR><TH ALIGN=right>LOCATION:</TH><TD><? ECHO "$location"; ?></TD></TR>
<TR><TH ALIGN=right>ASTROLOGY:</TH><TD><? ECHO "$sign"; ?></TD></TR>
<TR><TH ALIGN=right>CHINESE SIGN:</TH><TD><? ECHO "$chinese_sign"; ?></TD></TR>
</TABLE>

<BR>

<CENTER><iframe src="http://gamercard.xbox.com/Xeusy.card" scrolling="no" frameBorder="0" height="140" width="204">Xeusy</iframe></CENTER>

</TD>
<TD CLASS=Months VALIGN=top ALIGN=left WIDTH=161>

<BR>

<IMG SRC="bo_<? ECHO $Year; ?>.jpg" WIDTH=143 HEIGHT=49 BORDER=0 ALT="<? ECHO $Year; ?>!"><BR CLEAR=all>

<BR>

<DIV CLASS=Main STYLE="padding-left: 10px;">

<?

$i = 0;

$result = MYSQL_QUERY("SELECT * FROM y$Year WHERE id=1 ORDER BY month DESC");
$number = MYSQL_NUMROWS($result);

WHILE ($i < $number) {
	$month = MYSQL_RESULT($result,$i,"month");
	$title = MYSQL_RESULT($result,$i,"title");
	$description = MYSQL_RESULT($result,$i,"description");
	$photo_path_thumb = MYSQL_RESULT($result,$i,"photo_path_thumb");
	$photo_path = MYSQL_RESULT($result,$i,"photo_path");

    $y_num = $i+1;
    switch ($y_num) {
		case 1:  $y_dist = 80; break;
		case 2:  $y_dist = 210; break;
		case 3:  $y_dist = 340; break;
		case 4:  $y_dist = 510; break;
		case 5:  $y_dist = 700; break;
		case 6:  $y_dist = 850; break;
		case 7:  $y_dist = 1000; break;
		case 8:  $y_dist = 1200; break;
		case 9:  $y_dist = 1370; break;
		case 10:  $y_dist = 1500; break;
		case 11:  $y_dist = 1630; break;
		case 12:  $y_dist = 1780; break;
    }

	if ($month == 1):
	  $month_n = "January";
	elseif ($month == 2):
	  $month_n = "February";
	elseif ($month == 3):
	  $month_n = "March";
	elseif ($month == 4):
	  $month_n = "April";
	elseif ($month == 5):
	  $month_n = "May";
	elseif ($month == 6):
	 $month_n = "June";
	elseif ($month == 7):
	  $month_n = "July";
	elseif ($month == 8):
	  $month_n = "August";
	elseif ($month == 9):
	  $month_n = "September";
	elseif ($month == 10):
	 $month_n = "October";
	elseif ($month == 11):
	  $month_n = "November";
	elseif ($month == 12):
	 $month_n = "December";
	endif;

	ECHO "
<TABLE ID=$month_n BORDER=0 CELLPADDING=5 CELLSPACING=0><TR>
<TD VALIGN=middle>

	<IMG SRC=\"bo_" . $month_n . ".jpg\" WIDTH=64 HEIGHT=35 BORDER=0 ALT=" . $month_n . "><BR>
	<DIV CLASS=PortraitContainer ALIGN=center><IMG SRC=\"$photo_path_thumb\" BORDER=1 ALT=$month_n CLASS=Portrait></DIV>

</TD><TD VALIGN=middle ALIGN=center>

  <DIV ALIGN=center CLASS=Blurb id=show" . $month_n . " STYLE=\"z-index: 100; font-family: Arial; font-size: small; border-width: 1px; border-style: solid; border-color: black; text-align: justify; position: absolute; top: " . $y_dist . "px; left: 400px; background: url(bo_blurb_back.jpg); color: black; padding: 15px; visibility: hidden;\">
	<CENTER><IMG SRC=\"$photo_path\" BORDER=1 ALT=" . $month_n . " CLASS=Portrait></CENTER><BR><BR>
    <SPAN CLASS=BlurbTitle>$month_n, $Year:  $title</SPAN><BR>
    $description
  </DIV>

</TD>
</TR></TABLE>\n\n";

	$i++;

} // end WHILE

?>

</DIV>

</TD>
<TD CLASS=RightBar VALIGN=top>

<P>&nbsp;</P><P>&nbsp;</P>

<SPAN STYLE="color: #C9FF00; font-size: xx-small; font-family: Arial;">

<TABLE CLASS=Past CELLPADDING=3 CELLSPACING=0 BORDER=0 STYLE="padding: 10px; border: 1px; border-color: black; border-style: solid; background: #6534b0;">
<TR><TD COLSPAN=3 VALIGN=bottom><IMG SRC="bo_past.jpg" WIDTH="211" HEIGHT="53" BORDER="0" ALT="" ALIGN=right STYLE="margin-right: 25px;"><BR CLEAR=all></TD></TR>
<TR>
<TD STYLE="background: #6534b0;" VALIGN=top><A HREF=""><IMG SRC="2004/ben_apr_small.jpg" WIDTH=84 HEIGHT=125 BORDER=1 ALT="My 2004 Wuntsah" TITLE="My 2004 Wuntsah" CLASS=Portrait><BR>2004</A></TD>
<TD STYLE="background: #6534b0;" VALIGN=top><A HREF=""><IMG SRC="2005/ben_oct_small.jpg" WIDTH=131 HEIGHT=125 BORDER=1 ALT="My 2005 Wuntsah" TITLE="My 2005 Wuntsah" CLASS=Portrait><BR>2005</A></TD>
<TD STYLE="background: #6534b0;" VALIGN=top><A HREF="?Year=2006"><IMG SRC="2006/ben_apr_small.jpg" WIDTH=100 HEIGHT=125 BORDER=1 ALT="My 2006 Wuntsah" TITLE="My 2006 Wuntsah" CLASS=Portrait><BR>2006</A></TD>
</TR>
<TR>
<TD STYLE="background: #6534b0;" VALIGN=top><A HREF="?Year=2007"><IMG SRC="2007/ben_jan_small.jpg" WIDTH=78 HEIGHT=125 BORDER=1 ALT="My 2007 Wuntsah" TITLE="My 2007 Wuntsah" CLASS=Portrait><BR>2007</A></TD>
</TR></TABLE></SPAN>

<BR>

<TABLE WIDTH=300 BORDER=0 CELLPADDING=0 CELLSPACING=0 STYLE="margin-left: 30px;"><TR><TD CLASS=DetailsDiv>

<FONT SIZE=+2><B>&nbsp; &nbsp; WHAT IS WUNTSAH?</B></FONT><BR>

 <P>
<A HREF="http://wuntsah.benturner.com/"><IMG SRC="wuntsah_button.jpg" WIDTH=100 HEIGHT=53 BORDER=0 ALT="Wuntsah...  Join the project!" ALIGN=right STYLE="padding: 5px;"></A>
Wuntsah, as in once-a, is an open-ended collaborative movement for chronicling your advancing life!
 </P>

 <P>
Inspired by the photographer Nicholas Nixon, we at the Wuntsah Project wanted to create a simple
product to spur on further development of the idea of tracking your personal aging and development
over time.
 </P>

 <P>
See <A HREF="./">our complete write-up</A> for more information and inspiration.
 </P>

</TD></TR></TABLE>

<BR>

<TABLE WIDTH=300 BORDER=0 CELLPADDING=0 CELLSPACING=0 STYLE="margin-left: 30px;"><TR><TD CLASS=DetailsDiv>

<FONT SIZE=+2><B>&nbsp; &nbsp; OTHER WUNTSAH'ERS</B></FONT><BR>

<CENTER>

<DIV><A HREF="http://wuntsah.benturner.com/demo_bo_db.php"><IMG SRC="ben_portrait.jpg" BORDER=1 WIDTH=140 HEIGHT=105 ALT=Ben TITLE=Ben><BR>Ben</A></DIV>
<DIV><A HREF="http://skydramini.com/index.php?tag=wuntsah"><IMG SRC="skydramini_portrait.jpg" BORDER=1 WIDTH=75 HEIGHT=75 ALT=skydramini TITLE=skydramini><BR>skydramini</A></DIV>

</CENTER>

</TD></TR></TABLE>

</TD>
</TR></TABLE>

<P>&nbsp;</P>

<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0 WIDTH=100% STYLE="background: #fc5555; border: 1px; border-color: black; border-style: solid;"><TR>
<TD WIDTH=255 ALIGN=center VALIGN=middle><A HREF="http://benturner.com/contact_me.php">e-mail us</A> with your input!</TD><TD WIDTH=161 VALIGN=middle ALIGN=center><FONT SIZE=1><A HREF="http://wuntsah.benturner.com/">the wuntsah project</A><BR> wuntsahpon a time<BR> ideas were beautiful</FONT></TD><TD VALIGN=middle ALIGN=center><A HREF="http://wuntsah.benturner.com/"><IMG SRC="wuntsah_header.jpg" WIDTH=456 HEIGHT=26 BORDER=0 ALT="With Wuntsah, watch yourself grow!"></A></TD>
</TR></TABLE>

<P>&nbsp;</P>

<?

// closes the database

MYSQL_CLOSE();

?>

</BODY>

</HTML>