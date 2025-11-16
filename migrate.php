<?php
include 'db.php';

$sql = "
CREATE TABLE IF NOT EXISTS vouchers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    voucher_no TEXT NOT NULL,
    date_prepared TEXT NOT NULL,
    payee TEXT NOT NULL,
    particulars TEXT NOT NULL,
    amount REAL NOT NULL,
    prepared_by TEXT,
    approved_by TEXT,
    status TEXT DEFAULT 'Draft',
    created_at TEXT DEFAULT CURRENT_TIMESTAMP,
    updated_at TEXT DEFAULT CURRENT_TIMESTAMP
);
";

$conn->exec($sql);
echo "Database migrated successfully!";
?>