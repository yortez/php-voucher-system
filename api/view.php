<?php
include 'db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM vouchers WHERE id = :id");
$stmt->execute([':id' => $id]);
$v = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html><head><title>View Voucher</title></head><body>
<h2>Voucher Details</h2>
<p><strong>Voucher No:</strong> <?= $v['voucher_no'] ?></p>
<p><strong>Date:</strong> <?= $v['date_prepared'] ?></p>
<p><strong>Payee:</strong> <?= $v['payee'] ?></p>
<p><strong>Particulars:</strong> <?= $v['particulars'] ?></p>
<p><strong>Amount:</strong> <?= number_format($v['amount'],2) ?></p>
<p><strong>Status:</strong> <?= $v['status'] ?></p>
<a href="index.php">Back</a>
</body></html>