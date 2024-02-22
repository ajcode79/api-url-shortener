$url = $_GET['url'];
$aj = 'https://vurl.com/api.php';
$params = [
    'url' => $url,
];
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $aj . '?' . http_build_query($params),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
]);
$result = curl_exec($ch);
echo $result;
