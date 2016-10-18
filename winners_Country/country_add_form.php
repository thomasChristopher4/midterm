<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Country</h1>
	    <form action="index.php" method="post" id="add_country_form">
        <input type="hidden" name="action" value="add_product" />
        <label>Name:</label>
        <input type="input" name="name" />
        <br />
        <label>&nbsp;</label>
        <input type="submit" value="Add Country" />
        <br />  <br />
    </form>
    <p><a href="index.php?action=list_winners">View Country List</a></p>
</div>
<?php include '../view/footer.php'; ?>