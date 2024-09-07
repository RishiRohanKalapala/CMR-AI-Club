<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);

    // Recipient email address
    $to = 'your-email@example.com';
    $subject = 'New Blog Submission: ' . $title;
    $message = "Title: $title\nAuthor: $author\nEmail: $email\n\nContent:\n$content";
    $headers = 'From: ' . $email;

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Blog submitted successfully!';
    } else {
        echo 'Error submitting blog. Please try again.';
    }
} else {
    echo 'Invalid request method.';
}
?>
