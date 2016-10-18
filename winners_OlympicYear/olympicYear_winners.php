<?php include '../view/header.php';?>     
<div id="main">
    <h1>Year List</h1>
    <div id="sidebar">
        <h2>Year</h2>
        <ul class="nav">
        <?php foreach ($olympiads as $olympiad) : ?>
            <li>
            <a href="?olympiadYear_id=<?php echo $olympiad['ID']; ?>" >
                <?php echo $olympiad['Year']; ?>	
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
	<div id="content">
        <h2><?php echo $olympiad_city; ?> Winners</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>&nbsp;</th>
            </tr>
             <?php foreach ($winners as $winner) : ?>
            <tr>
                <td><?php echo $winner['FirstName']; ?></td>
                <td><?php echo $winner['LastName']; ?></td>
                <td>
            </tr>
            <?php endforeach; ?>
        </table>
       <p><a href="?action=show_add_form">Add Year</a></p>
	   <p><a href="../index.php">Back</a></p>
    </div>	 
</div>
 <?php include '../view/footer.php'; ?>