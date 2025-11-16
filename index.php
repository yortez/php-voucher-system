<?php
include 'db.php';
$result = $conn->query("SELECT * FROM vouchers ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
<title>Voucher List</title>
</head>
<body>
<h2>Voucher List</h2>
<a href="create_voucher.php">Create Voucher</a>
<table border="1" cellpadding="10">
<tr>
<th>Voucher No</th>
<th>Date</th>
<th>Payee</th>
<th>Amount</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php while($v = $result->fetch(PDO::FETCH_ASSOC)): ?>
<tr>
<td><?= $v['voucher_no'] ?></td>
<td><?= $v['date_prepared'] ?></td>
<td><?= $v['payee'] ?></td>
<td><?= number_format($v['amount'],2) ?></td>
<td><?= $v['status'] ?></td>
<td><a href="view.php?id=<?= $v['id'] ?>">View</a></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>