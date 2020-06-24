<tr>
	<?php if($arrayResult['result']['name']){?>

		<td> <?php echo $arrayResult['result']['name']; ?> </td>
		<td> <?php echo $arrayResult['result']['city']; ?> </td>
		<td> <?php echo $arrayResult['result']['country']; ?> </td>
		<td> <?php echo $arrayResult['result']['phone']; ?> </td>
		
	<?php }else{?>	
	<td> <?php echo $arrayResult['errorMessage']?> </td>
    <?php }?>	
</tr> 
