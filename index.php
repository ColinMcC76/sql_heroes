<!doctype html>
<html lang="en">

<head>
    <title>SQL Heroes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 class="display-4 text-center pt-3 pb-0">SQL Heroes</h1>
    <div class ='container-fluid px-5 py-2'>
        <div class="row">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "superheroes";


            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql= "SELECT * FROM heroes";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row  '
                while($row = $result->fetch_assoc()) {
                    $output =   "<div id=$row[id] class=' col-6 card'>
                                    <div class='card-body'>
                                        <h5 class='text-center card-title'>$row[name]</h5>
                                        <p class='card-text d-flex justify-content-center text-center'>
                                            $row[about_me]<br>                                    
                                        </p>
                                        <a href='./user.php?id=$row[id]' class='d-flex justify-content-center btn btn-warning'>See More</a>
                                    </div>
                                </div>";
                    echo $output;
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
    
    </html>
    
    <!-- SELECT * FROM ability_hero
    INNER JOIN abilities 
    ON abilities.id=ability_id
    INNER JOIN heroes 
    ON heroes.id=hero_id -->
    
    <!-- SELECT * FROM relationships
    INNER JOIN heroes 
    ON heroes.id=hero1_id
    INNER JOIN relationship_types
    ON relationship_types.id=type_id -->
    
    <!-- <img class='card-img-top' src='#' alt='Card image cap'> -->