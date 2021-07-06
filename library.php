<?php include('conn.php')?>

<?php
$query = "SELECT * FROM `books`";
$result = mysqli_query($conn, $query);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>    Library    </title>
  </head>
  <body>
    


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">College-Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Display Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="issue.php">Student Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage.php">Manage Books</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>



      <h1 class="h1 text-center my-5 animate__animated animate__fadeInDown" style="color:#484bf2; font-family: 'Roboto Slab', serif;;">
          Books Avaiable
      </h1>


      <div class="container">
        <table class="table table-secondary table-striped animate__animated animate__fadeInUpBig ">
          <thead>
            <tr>
              <th scope="col">Book-Code</th>
              <th scope="col">Book-Name</th>
              <th scope="col">Genre</th>
              <th scope="col">Copies</th>
              </tr>
              </thead>
              <tbody>
          <?php
              while($row=mysqli_fetch_array($result)){
              $bname = $row["book_name"];
              $bcode = $row["book_code"];
              $copies = $row["no_books"];
              $genre = $row["genre"];
              ?>
              <tr>
                <th scope="row"><?php echo "$bcode";?></th>
                <td><?php echo "$bname";?></td>
                <td><?php echo "$genre";?></td>
                <td><?php echo "$copies";?></td>
              </tr>
  <?php
}
?>            
            </tbody>
          </table>
      </div>







    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>