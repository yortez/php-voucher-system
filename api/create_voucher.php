<!DOCTYPE html>
<html><head><title>Create Voucher</title></head><body>
<h2>Create Payment Voucher</h2>
<form action="store_voucher.php" method="POST">
<label>Payee:</label><br><input type="text" name="payee" required><br><br>
<label>Particulars:</label><br><textarea name="particulars" required></textarea><br><br>
<label>Amount:</label><br><input type="number" step="0.01" name="amount" required><br><br>
<label>Prepared By:</label><br><input type="text" name="prepared_by" required><br><br>
<button type="submit">Save Voucher</button>
</form>
</body></html>