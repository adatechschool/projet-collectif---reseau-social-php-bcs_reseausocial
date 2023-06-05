<?php 
include 'connexion.php';

if (empty($_POST["content"])) { 
    echo "No content";
} else {
    $content = $_POST["content"];
    $conn->query("INSERT INTO todos (content) VALUES ('$content')");
}
?>

<form action="/projet-collectif---reseau-social-php-bcs_reseausocial/todos/index.php" method="POST">
    <input type="text" name="content" />
    <button type="submit">Create</button>
</form>

<?php 
$todos = $conn->query("SELECT * FROM todos");

while ($todo = $todos->fetch_assoc()) {
?>
<h1><?php $todo["content"]?></h1>
<?php }?>