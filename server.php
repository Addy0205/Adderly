<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

$data = array(
    'message' => 'Se ha enviado la notificación a tu enamorado.'
);

echo "event: notification\n";
echo 'data: ' . json_encode($data) . "\n\n";
flush();
?>

