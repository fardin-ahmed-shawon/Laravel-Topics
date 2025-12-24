<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Add Product Page</h1>
    <form action="submit-product" method="post">
        @csrf
        <input type="text" name="title" placeholder="Enter product title">
        <input type="text" name="price" placeholder="Enter price">
        <input type="submit" value="Add Product">
    </form>

</body>
</html>