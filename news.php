<?php
// Default API source
$api_key = "b9e60a92fd594d8fa3aee8c716c26242";
$base_url = "https://newsapi.org/v2/everything?domains=techcrunch.com&apiKey=$api_key";

// Check for user input
$query = isset($_GET['keyword']) ? urlencode($_GET['keyword']) : null;

// Final API URL
$api_url = $query ? $base_url . "&q=$query" : "https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=$api_key";

// Get news data from API
$response = file_get_contents($api_url);
$newsData = json_decode($response);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech News Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🔍 TechCrunch News Search</h1>
        <form method="get" class="search-form">
            <input type="text" name="keyword" placeholder="Enter keyword (e.g. AI, robotics)" value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>">
            <button type="submit">Search</button>
        </form>

        <hr>

        <?php
        if ($newsData->status == "ok" && count($newsData->articles) > 0) {
            foreach ($newsData->articles as $article) {
                echo "<div class='news-card'>";
                echo "<h2>{$article->title}</h2>";
                echo "<p><strong>Author:</strong> " . ($article->author ?? "Unknown") . "</p>";
                if ($article->urlToImage) {
                    echo "<img src='{$article->urlToImage}' alt='News Image'>";
                }
                echo "<p>{$article->description}</p>";
                echo "<a href='{$article->url}' target='_blank'>Read more</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No news found for your search. Try a different keyword.</p>";
        }
        ?>
    </div>
</body>
</html>

