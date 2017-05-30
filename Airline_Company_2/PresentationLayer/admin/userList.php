<html> 
	<head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>User List</title>
	</head>
	<body> 
		<div id="dvMain">
			<form id="form" action="" method="POST"  >
				<table id="tblUsers">
					<tbody>
						<tr>

							<th>Admin_id</th>
							<th>Username</th>
							<th>Password</th>
						</tr>
						<?php 
							 require_once("../../LogicLayer/EAdmin.php");

							 require_once("../../DataLayer/DAdmin.php");
 							$userList =getAdmins();

							
							
							for($i = 0; $i < count($userList); $i++) {
							?>
							<tr>
								<td><?php echo $userList[$i]->getAdmin_id(); ?></td>
								<td><?php echo $userList[$i]->getUsername(); ?></td>
								<td><?php echo $userList[$i]->getPassword(); ?></td>

							</tr>
							<?php
							}
						?>
						<tr>
							<td></td>
							<td>
								<input type="text" name="id" required />
							</td>
							<td>
								<input type="text" name="username" required />
							</td>
							<td>
								<input type="text" name="password" required /> 
								 <input type="submit" name="update" value="Update" onclick="submitForm('updateAdmin.php')" required /> 
								 <input type="submit" name="delete" value="Delete" onclick="submitForm('deleteAdmin.php')" required /> 

								<?php 
									if(isset($errorMeesage)) {
										echo "<br>" . "<span style='color: red;'>" . $errorMeesage . "</span>";
									}
								?>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		<script type="text/javascript">
    function submitForm(action)
    {
        document.getElementById('form').action = action;
        document.getElementById('form').submit();
    }
</script>
	</body> 
</html>