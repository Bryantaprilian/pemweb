<html>

<head>
	<title>PEMILIHAN CALON PRESIDEN</title>
	<link rel="stylesheet" type="text/css" href="css/poll.css"/>
	<script language="javascript">
	     function setVote(voteName)
	     {
	      	document.getElementById("votefor").value = voteName;
	     }
	     function confirmSubmit() 
	     { 
		if (document.getElementById("votefor").value == "")
		{
		     var agree=confirm("TERIMA KASIH TELAH MEMILIH"); 
		     return false; 
		}
	     } 
	</script>
</head>

<body>
	<FORM id="frmVote" action="results.php" method="POST">
	     <table id="tblMain" align="center">
	       	<tr>
			<td class="header">PEMILIHAN UMUM</td>
	     	</tr>
		<tr>
			<td>
			     <?php
				include "loadpoll.php";
			     ?>
			</td>
		</tr>
		<tr>
			<td>
			     <input name="votefor" type="hidden"/>
			</td>
		</tr>
 		<tr>
			<td class="button">
			     <INPUT id="btnVote" onclick="return confirmSubmit()" type="submit" value="Vote"/>
			</td>
		</tr>
		<tr>
			<td class="footer">
			INDONESIA
		      </td>
	     	</tr>
	     </table>
	</FORM>
</body>

</html>
