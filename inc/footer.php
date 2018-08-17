
     
		<script type="text/javascript">
			var myVar;

		function myFunction() {
		    myVar = setTimeout(showPage, 7000);
		    myVar = setInterval(alertFunc, 7000);
		}

		function showPage() {
		  document.getElementById("loader").style.display = "none";
		  document.getElementById("myDiv").style.display = "block";
		}
</script>

</body>
</html>