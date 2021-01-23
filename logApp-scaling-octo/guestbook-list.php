<?php
require('config/config.php');
require('config/db.php');

$query = "Select * FROM person;";
$person = mysqli_query($conn, $query);


?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($person as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['person_id'];?></th>
                    <td><?php echo $person['person_lname'];?></td>
                    <td><?php echo $person['person_fname'];?></td>
                    <td><?php echo $person['person_address'];?></td>
                    <td><?php echo $person['person_datelog'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>