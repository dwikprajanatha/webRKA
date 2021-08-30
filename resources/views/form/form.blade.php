<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran LPK Resort Kuta</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('form/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('form/css/style.css')}}">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('form/images/signup-img.jpg')}}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="{{route('post.form')}}" class="register-form" id="register-form">

                    @csrf

                        <h2>Form Registrasi Mahasiswa Baru</h2>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" name="nama" id="nama" required/>
                        </div>

                        <div class="form-row">

                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir :</label>
                                <input type="text" name="tempatLahir" id="tempatLahir" required/>                           
                            </div>

                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir :</label>
                                <input type="date" name="tanggalLahir" id="tanggalLahir" required/>                           
                            </div>

                        </div>
                       

                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" id="alamat" required/>
                        </div>
                        
                        <div class="form-radio">

                            <label for="gender" class="radio-label">Jenis Kelamin :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Laki - Laki</label>
                                <span class="check"></span>
                            </div>

                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Perempuan</label>
                                <span class="check"></span>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group">
                                <label for="telp">No. Telp :</label>
                                <input type="tel" name="telp" id="telp" required/>
                            </div>

                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" required/>
                            </div>

                        </div>

                        <div class="form-group">
                                <label for="asalSekolah">Asal Sekolah :</label>
                                <input type="text" name="asalSekolah" id="asalSekolah" required/>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="jurusan">Jurusan :</label>
                            <div class="form-select">
                                <select name="jurusan" id="jurusan">
                                    <option value="" hidden disabled selected></option>
                                    <option value="FO">Front Office</option>
                                    <option value="FBS">F&B Service</option>
                                    <option value="FBP">F&B Product</option>
                                    <option value="ECOM">E-Commerce</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="program">Program :</label>
                            <div class="form-select">
                                <select name="program" id="program">
                                    <option value="" hidden disabled selected></option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('form/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('form/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>