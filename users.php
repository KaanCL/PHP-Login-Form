<?php
include 'connectionDB.php';
$sql = "SELECT name, surname, email ,birthdate ,gender FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcılar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Kayıtlı Kullanıcılar</h2>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">Ad</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Doğum Tarihi</th>
                    <th scope="col">Cinsiyet</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        if ($row['gender']==1){
                            $gender = "Erkek";
                        }if ($row['gender']==0){
                            $gender = "Kadın";
                        }

                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['surname']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['birthdate']) . "</td>";
                        echo "<td>" . htmlspecialchars($gender) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Kayıtlı kullanıcı bulunmamaktadır.</td></tr>";
                }
                ?>
            </tbody>
        </table>
       <a href="login.php"><input type="button" class="btn btn-dark" value="Geri Dön"></a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
