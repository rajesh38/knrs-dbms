<html>
	<head>
		<style type="text/css">
		body
		{
			font-family:lucida fax;
		}
		</style>

		<script language="javascript">
			function validate()
			{
				if(f1.t1.value == "")
				{
					alert("DB name must not be empty.");
					return (false);
				}
				if(f1.t1.value.indexOf(" ") > -1)
				{
					alert("Whitespace not allowed in DB name.");
					return (false);
				}
				return (true);
			}
		</script>
	</head>
	<body bgcolor="#FFDADA" onload="parent.frames['left_top_container'].location.reload()">
		<form method="get" name="f1" onsubmit="return validate();" action="create_db.php">
			Enter new database name<input type=text name="t1">
			<input type=submit>
		</form>
	</body>
</html>