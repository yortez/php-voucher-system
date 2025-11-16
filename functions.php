<?php
function generateVoucherNo($conn) {
    $year = date('Y');
    $stmt = $conn->prepare("
        SELECT COUNT(*) AS count 
        FROM vouchers 
        WHERE strftime('%Y', created_at) = :year
    ");
    $stmt->execute([':year' => $year]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $next = $row['count'] + 1;
    return "V-$year-" . str_pad($next, 5, "0", STR_PAD_LEFT);
}
?>