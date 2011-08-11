<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<title>Reference Manual</title>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javaScript" src="search/search.js"></script>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
<script src="http://mantydze.web.cern.ch/mantydze/new_doxy/menu.js" type="text/javascript"></script>
</head>
<body onload='addLinksToMenu()'>

<table width="100%" bgcolor="#b7cade" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
 <td><img src="http://mantydze.web.cern.ch/mantydze/new_doxy/leftImage.jpg" alt="CMS 3D" align="left" border="0"/>
</td>
 <td><img src="http://mantydze.web.cern.ch/mantydze/new_doxy/rightImage.jpg" alt="CMS Logo" align="right" border="0"/> </td>
</tr>
</tbody></table>
<hr noshade="noshade" width="100%" color="green"/>

<!-- Generated by Doxygen 1.7.2 -->
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li class="current"><a href="index.html"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.html"><span>Modules</span></a></li>
      <li><a href="namespaces.html"><span>Namespaces</span></a></li>
      <li><a href="annotated.html"><span>Classes</span></a></li>
      <li><a href="pages.html"><span>Package&#160;Documentation</span></a></li>
    </ul>
  </div>
</div>

<center>
<h1>CMSSW Documentation</h1>
<h2>CMSSW_Version</h2>
</center>
<?php 


function getIframe($file){

$iframeHtml = "<center><iframe id = \"frame\" src =\"splittedTree/".$file.".html\" style=\"height:300; width:100%; overflow:auto; border:1px solid lightgray;\">
  <p>Your browser does not support iframes.</p>
</iframe></center>";

   return $iframeHtml;
}

if (!isset($_GET['category'])) { $category = ""; }
else { $category = $_GET['category']; };

?>

<p>
<table class="doctable">
<tbody>
<tr class="top" valign="top">
<th class="domain">Domain</th><th class="contact">Contact</th>
</tr>
<tr class="odd">
	<td><a href="?category=gen">Generators</a></td>
	<td class="contact">P. Lenzi, Fabio Cossutti </td>
</tr>
<?php if ($category == 'gen'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>

<tr class="even">
	<td><a href="?category=sim#sim">Full Simulation</a><a name="sim"></a></td>
	<td class="contact"> Sunanda Banerjee, Mike Hildreth </td>
</tr>
<?php if ($category == 'sim'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=fastsim#fastsim">Fast Simulation</a><a name="fastsim"></a></td>
	<td class="contact"> Andrea Perrotta, A. Giammanco </td>

</tr>
<?php if ($category == 'fastsim'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td><a href="?category=l1#l1">L1</a><a name="l1"></a></td>
	<td class="contact"> Vasile Ghete </td>
</tr>
<?php if ($category == 'l1'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=hlt#hlt">HLT (TSG)</a><a name="hlt"></a></td>
	<td class="contact"> Andrea Bocci, Martin Gruenewald </td>

</tr>
<?php if ($category == 'hlt'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td><a href="?category=reco#reco">Reconstruction</a><a name="reco"></a></td>
	<td class="contact"> David Lange, Jean-Roch Vlimant </td>
</tr>
<?php if ($category == 'reco'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=core#core">CoreSW</a><a name="core"></a></td>
	<td class="contact"> Peter Elmer, Chris Jones, Stephen Gowdy </td>

</tr>
<?php if ($category == 'core'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td><a href="?category=dqm#dqm">DQM</a><a name="dqm"></a></td>
	<td class="contact"> S. Dutta, K. Maeshima, M. Rovere </td>
</tr>
<?php if ($category == 'dqm'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=db#db">DataBase</a><a name="db"></a></td>
	<td class="contact"> Francesca Cavallari, Andreas Pfeiffer, Vincenzo Innocente, Frank Glege </td>

</tr>
<?php if ($category == 'db'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td><a href="?category=calib#calib">Calibration &amp; Alignment</a><a name="calib"></a></td>
	<td class="contact"> Gianluca Cerminara, Stephanie Beauceron, C. Rovelli </td>
</tr>
<?php if ($category == 'calib'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=analysis#analysis">Analysis Tools</a><a name="analysis"></a></td>
	<td class="contact"> Salvatore Rappoccio, Roger Wolf</td>

</tr>
<?php if ($category == 'analysis'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td><a href="?category=geometry#geometry">Geometry</a><a name="geometry"></a></td>
	<td class="contact"> Mike Case, (S.Banerjee, M.Hildreth) </td>
</tr>
<?php if ($category == 'geometry'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="https://twiki.cern.ch/twiki/bin/view/CMS/SWGuide">Documentation</a></td>
	<td class="contact"> Kati Lassila Perini, Sudhir Malik</td>

</tr>
<tr class="even">
	<td><a href="?category=daq">DAQ (Tridas)</a></td>
	<td class="contact"> F. Meijers, J. Varela </td>
</tr>
<?php if ($category == 'daq'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="odd">
	<td><a href="?category=visualization#visualization">Visualization</a><a name="visualization"></a></td>
	<td class="contact"> Giulio Eulisse (iSpy), Dmytro Kovalsky, Chris Jones (FireWorks) </td>

</tr>
<?php if ($category == 'visualization'){
echo "<tr><td colspan=\"2\">".getIframe($category)."</td></tr>";
}
?>
<tr class="even">
	<td> Operations (DM/WM + L2s of reco, sim, fastsim, generators, analysis tools)</td>
	<td class="contact"> all the relevant conveners </td>
</tr>
</table>
</p>

<br/>
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="http://www.doxygen.org/index.html"><img class="footer" src="doxygen.png" alt="doxygen"/></a> 1.7.3</small></address>
</body>
</html>
