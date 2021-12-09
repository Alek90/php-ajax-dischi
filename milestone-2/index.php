<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>


    <header id="header_site">

        <img class="logo" src="https://www.wallpapertip.com/wmimgs/17-176153_download-logo-spotify-png.png" alt="logo Spotify">

    </header>


    <main>


        <div class="row mx-4 gy-4 gx-5 justify-content-center">


            <div class="col-2" v-for= "disc in discs">

                <div class="disc p-4 text-center">
                
                    <img :src="disc.poster"  alt= '' >

                    <h5 class="text-white my-4"> {{disc.title}} </h5>

                    <div class="info">

                        <div class="author"> {{disc.author}} </div>
                        <div class="year"> {{disc.year}} </div>
                        
                    </div>

                </div>

            </div>


        </div>


    </main>





    <!-- script axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- script vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- script file js -->
    <script src="./assets/app.js"></script>
    
</body>
</html>
