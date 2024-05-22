<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container my-5">
    <h2>List of Clients</h2>
    <a href='/create.php' class="btn btn-primary" role="button">New Client</a>
    <br>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Created At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Kết nối CSDL
        require 'connection.php';

        // Viết truy vấn SQL
        $sql = "SELECT * FROM clients";
        $result = $conn->query($sql);

        if(!$result) {
          die("Invalid query: " . $conn->error);
        }

        // read data of each now 
        while($row = $result->fetch_assoc()) {
          echo "
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>$row[created_at]</td> 
            <td>
              <a class='btn btn-primary btn-sm' href='/edit.php?id=$row[id]'>Edit</a>
              <a onclick=\"return confirm('Bạn có muốn xóa khách hàng này không?')\" class='btn btn-danger btn-sm' href='/delete.php?id=$row[id]'>Delete</a>
            </td>
          </tr>
          ";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
