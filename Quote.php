<?php
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://quotes-inspirational-quotes-motivational-quotes.p.rapidapi.com/quote?token=ipworld.info",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: quotes-inspirational-quotes-motivational-quotes.p.rapidapi.com",
        "x-rapidapi-key: 57a3d5c615mshe06f0bf079c5a60p1ad9edjsne6126566a50b"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // JSON response
    $quoteData = json_decode($response, true); 

    // Check if the necessary keys exist in the response
    if (!empty($quoteData) && isset($quoteData['author'], $quoteData['text'])) {
        $author = htmlspecialchars($quoteData['author']); 
        $text = htmlspecialchars($quoteData['text']);   
    } else {
        $author = "Unknown Author";
        $text = "No quote available.";
    }
}
?>

<?php
include("header.php");
?>
<body>
   
    <main>
        <div class="quote-container">
            <blockquote>
                <p><?php echo $text; ?></p>
                <footer>
                    — <cite><?php echo $author; ?></cite>
                </footer>
            </blockquote>
        </div>
    </main>


</body>
</html>
