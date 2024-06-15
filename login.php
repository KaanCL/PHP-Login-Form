<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link rel="stylesheet" href="styles/style.css" >
</head>
<body>
<div class="container">
    <div class="row div-center">
        <div class="content">
        <h2  class="text-muted px-4 border-right-6 ">Kayıt Ol</h2>
    <hr/>
            <form action="register.php" method="post">  
                <div class="row ">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-right-5">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="fname" type="text" name="fname" placeholder="Ad" class="form-control bg-white border-left-0 border-md" required>
                    </div>

                    <div class="input-group  mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lname" type="text" name="lname" placeholder="Soyad" class="form-control bg-white border-left-0 border-md" required>
                    </div>
                    <div class="input-group  mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md" required>
                    </div>
            
                    <div class="input-group  mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Şifre" class="form-control bg-white border-left-0 border-md" required>
                    </div>
                
                    <div class="input-group  mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-md border-right-0">
                                <i class="fa fa-calendar text-muted"></i>
                         </span>
                        </div>
                        <input type="date" id="birthdate" name="birthdate" placeholder="Doğum Tarihi" class="form-control custom-select bg-white border-left-0 border-md">
                    </div>

                    <div class="input-group  mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-3 border-md border-right-0">
                                <i class="fa fa-venus-mars text-muted"></i>
                         </span>
                        </div>
                          <select id="gender" name="gender" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="">Cinsiyetinizi Seçiniz</option>
                            <option value="men">Erkek</option>
                            <option value="women">Kadın</option>
                        </select>
                    </div>             
                    <input type="submit"  class="btn form-group col-lg-12 mx-auto mb-2 btn-primary" value="Kayıt Ol" name="signUp">
                    <a href="users.php"class="col-lg-12 mb-2"><input type="button" class="btn col-lg-12 " value="Kullanıcılar"></a>
                </div>
            </form>  
            </div>
    </div>
</div>
<script src="scripts/script.js"></script>
</body>
</html>