<?php
// Admissions REST API
// GET parameters supported:
//  - page (int, optional)
//  - per_page (int, optional)
//  - contacted (0|1, optional)

// Set JSON headers FIRST, before any other output
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// Database connection (no auth required for API)
require_once __DIR__ . '/../../db.php';

// Check connection
if (!$conn) {
    http_response_code(500);
    exit(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : null;
$per_page = isset($_GET['per_page']) ? max(1, (int)$_GET['per_page']) : null;
$contacted = isset($_GET['contacted']) ? $_GET['contacted'] : null;

$where = [];
if ($contacted !== null && ($contacted === '0' || $contacted === '1')) {
    $where[] = "contacted = " . (($contacted === '1') ? "1" : "0");
}

$where_sql = '';
if (count($where) > 0) {
    $where_sql = 'WHERE ' . implode(' AND ', $where);
}

// Count total
$count_sql = "SELECT COUNT(*) AS cnt FROM admissions $where_sql";
$count_res = mysqli_query($conn, $count_sql);
$total = 0;
if ($count_res) {
    $c = mysqli_fetch_assoc($count_res);
    $total = (int)$c['cnt'];
}

$limit_sql = '';
if ($page !== null && $per_page !== null) {
    $offset = ($page - 1) * $per_page;
    $limit_sql = "LIMIT $offset, $per_page";
} elseif ($per_page !== null) {
    $limit_sql = "LIMIT 0, $per_page";
}

$sql = "SELECT * FROM admissions $where_sql ORDER BY id DESC $limit_sql";
$res = mysqli_query($conn, $sql);

$data = [];
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = [
            'id' => (int)$row['id'],
            'student_name' => $row['student_name'],
            'grade' => $row['grade'],
            'parent_name' => $row['parent_name'],
            'parent_email' => $row['parent_email'],
            'parent_phone' => $row['parent_phone'],
            'dob' => $row['dob'] ? date('Y-m-d', strtotime($row['dob'])) : null,
            'submitted_at' => $row['submitted_at'] ? date(DATE_ATOM, strtotime($row['submitted_at'])) : null,
            'contacted' => (int)$row['contacted']
        ];
    }
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database query failed']);
    exit;
}

echo json_encode([
    'success' => true,
    'total' => $total,
    'count' => count($data),
    'data' => $data
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

// End