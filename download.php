<?php
// Simple download script

if(isset($_GET['game'])) {
    $game = $_GET['game'];
    
    // Add your ad integration here (Google AdSense or other network)
    // You can either embed ads on this page or make this an interstitial page with a timer

    echo "<h2>Please wait while we show you an ad...</h2>";
    
    // Wait for a few seconds to simulate ad viewing (this is where ad integration would happen)
    header("refresh:5;url=download_links/$game.zip");  // Redirect to actual download link after 5 seconds
    exit;
}
?>