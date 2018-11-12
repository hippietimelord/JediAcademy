
<?php
    include("confiq.php");
    $query = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	<meta charset="UTF-8">

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="background.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


</head>
<style>
		h1 {
				font-size: 60px;
				text-indent: 20px;
				color: yellow;
				font-family: 'Reem Kufi', sans-serif;
			}
			div#left {
				float: left;
				width: 10%;
				background-color: rgba(255,255,255,0.4);
			}
			div#right {
				float: right;
				width: 90%;
				background-color: rgba(255,255,255,0.4);
				text-align: center;
			}
			table, tr{
				border: 1px solid silver;
				padding: 5px; 
				width: 100%;
			}
			td {
				border: 1px solid silver;
				padding: 5px; 
			}
			form {
				width: 100%;
				margin: auto;
				text-align: left;
				font-family: 'Fjalla One', sans-serif;
				font-size: 20px;
				color: black;
				background-color: rgba(255,255,255,0.4);
			}
			#button {
				background-color: white;
				border: none;
				color: black;
				padding: 5px 12px;
				font-family: 'Reem Kufi', sans-serif;
				font-size: 15px;
				text-align: center;
				font-weight: bold;
				text-decoration: none;
				display: inline-block;
				cursor: pointer;
			}
	</style>
<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to delete users?");
    if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
</head>
<body>	
<form name="bulk_action_form" action="deleteaction.php" method="post" onsubmit="return deleteConfirm();"/>
    <table>
	<h1>Delete User</h1>
        <thead>
        <tr>
            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
            <th>Username</th>
            <th>Student Name</th>
            <th>Programme</th>
            <th>Grade</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['programme']; ?></td>
            <td><?php echo $row['grade']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td>No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
	
</form>
<p style="text-align:right;"><a style= "font-size:180%;" href="logout.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style= "font-size:180%;" href="welcome.php">Home page</a></p>
</body>
</html>