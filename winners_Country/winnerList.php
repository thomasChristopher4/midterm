<?php include '../view/header.php';?>

  
<div id="main">
    <h1>Country List</h1>
    <div id="sidebar">
        <h2>Countries</h2>
        <ul class="nav">
        <?php foreach ($countries as $country) : ?>
            <li>
            <a href="?country_id=<?php echo $country['ID']; ?>">
                <?php echo $country['Country']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
 <div id="content">
        <!-- display a table of products -->
        <h2><?php echo $country_name; ?> Winners</h2>
        <table>
            <tr>           
                <th>First Name</th>
                <th>Last name</th>    
            </tr>
            <?php foreach ($winners as $winner) : ?>
            <tr>  
                <td><?php echo $winner['FirstName']; ?></td>
                <td><?php echo $winner['LastName']; ?></td>
                <td>
            </tr>
            <?php endforeach; ?>
        </table>
		
        <p><a href="?action=show_add_form">Add Country</a></p>
		<p><a href="../index.php">Back</a></p>
    </div>
 <?php include '../view/footer.php'; ?>