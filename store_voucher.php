<?php
include 'db.php';
include 'functions.php';

$voucher_no = generateVoucherNo($conn);
$date_prepared = date('Y-m-d');

$stmt = $conn->prepare("
INSERT INTO vouchers (voucher_no, date_prepared, payee, particulars, amount, prepared_by)
VALUES (:voucher_no, :date_prepared, :payee, :particulars, :amount, :prepared_by)
");

$stmt->execute([
    ':voucher_no' => $voucher_no,
    ':date_prepared' => $date_prepared,
    ':payee' => $_POST['payee'],
    ':particulars' => $_POST['particulars'],
    ':amount' => $_POST['amount'],
    ':prepared_by' => $_POST['prepared_by']
]);

echo "Voucher Created Successfully!<br>";
echo "Voucher No: " . $voucher_no;
echo "<br><a href='index.php'>Back</a>";
?>