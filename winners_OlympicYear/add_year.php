<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Year</h1>
	 <form action="index.php" method="post" id="add_Year_form">
        <input type="hidden" name="action" value="add_Year"/>
        <label>City:</label>
        <input type="input" name="City" />
        <br />
		 <label>Year:</label>
        <input type="input" name="Year" />
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Add Year" />
        <br />  <br />
    </form>
	 <p><a href="index.php?action=list_olympicYear">View Year List</a></p>
</div>
<?php include '../view/footer.php'; ?>
