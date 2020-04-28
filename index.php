<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviePro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .pro_name h1{
            font-size: 80px;
        }
        .manual-mrg {
            margin-bottom: 20px;
        }
        .mov_name:hover {
            color: white;
            background-color: #2f2f2f;
        }
        .mov_name {
            cursor: pointer;
        }
        .mov_name h4 {
            padding: 0;
            margin: 10px;
            font-size: 100%;
        }
    </style>
</head>

    <?php
        if(isset($_POST['s'])){
            $movie_name = $_POST['s'];
            $a = 4;$b = 5;
            $result = exec("python py/add.py $a $b");
            $mov = [
                'Rockstar','Heropanti','Mard','Marjawaan','Bang Bang', 'Bahubali',
                'Good News', 'Zero', 'Interseller', 'Gravity', 'Geeta Govintham',
                'The Great Grand Masti', 'Mangal', 'Mission Mangal', 'Baaghi', 'Baaghi',
                'Malang', 'Sultan', 'Thappad', 'Dangal', 'ABCD', 'ABCD2', 'Street Dancer',
                'Dabang', 'Dabang2', 'Dabang3', 'Bala', 'Housefull', 'Housefull 2',
                'Housefull 3', 'Housefull 4', 'Commando', 'Commando 2', 'Commando 3'
            ]
    ?>
    <body class="" style="min-height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center pro_name">
                        <h1>MoviePro</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="text-primary">result which are matched...</h5>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php 
                foreach($mov as $movnm){
                ?>
                <div class="col-12 col-sm-4 col-md-3 manual-mrg">
                    <div class="card align-items-center mov_name">
                        <h4>
                            <?php echo $movnm; ?>
                        </h4>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
        }
        else{
    ?>
<body class="d-flex align-items-center" style="min-height: 100vh;">
    <div class="container align-items-center">
        <div class="row">
            <div class="col">
                <div class="text-center pro_name">
                    <h1>MoviePro</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col col-md-7">
                <div class="searchbar">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="Enter Here">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="search" class="btn btn-outline-secondary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>