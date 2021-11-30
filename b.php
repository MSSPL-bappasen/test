<?php 
    session_start(); 
    //print_r($_SESSION['saved_data']);
?>
<style>
	table {
	  width: 100%;
	  border: 1px solid #ddd;
	}

	th, td {
	  text-align: left;
	  padding: 16px;
	}

	tr:nth-child(even) {
	  background-color: #f2f2f2
	}
</style>
<script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
<center><h1>Details List</h1></center>
<table class="sortable">
    <tr>
      <th>Name</th>
      <th>Age</th>
    </tr>
    <?php for($i = 0 ; $i < count($_SESSION['saved_data']) ; $i++) { ?>
    <tr>
       <td><?php echo $_SESSION['saved_data'][$i][0] ?></td>
       <td><?php echo $_SESSION['saved_data'][$i][1] ?></td>
    </tr>
    <?php }  ?>
</table>