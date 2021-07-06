<?php include('conn.php');?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    
    <title>Manage Books</title>
  </head>
  <body class="backBody">
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">College-Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="library.php">Display Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="issue.php">Student Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="manage.html">Manage Books</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>



      <div class="container-fluid mb-5">
          <div class="row">

            <!-- add book -->
              <div class="addBook col-md-6">
                    <h2 class="h2 my-4 text-center text" >
                        Add a Book
                    </h2>
                <form class="container" action="addBooks.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Book Code</label>
                      <input type="text" name="bcode" required class="form-control" id="bCode">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input type="text" name="bname" required class="form-control" id="bName">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                        <input type="text" name="genre" required class="form-control" id="genre">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">No. of Copies</label>
                      <input type="text" required name="copies" class="form-control" id="copies">
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                  </form>
              </div>





              <!-- delete book -->
              <div class="delBook col-md-6">

                <h2 class="h2 my-4 text-center text" >
                    Delete a Book
                </h2>
            <form class="container" action="delBook.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Book Code</label>
                  <input type="text" name="bcode" required class="form-control" id="bCode">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Book Name</label>
                    <input type="text" name="bname" required class="form-control" id="bName">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              </div>
          </div>






          <div class="row">

            <!-- Issue book -->
              <div class="addBook col-md-6">
                    <h2 class="h2 my-4 text-center text" >
                        Issue a Book
                    </h2>
                <form class="container" action="issueBook.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Book Code</label>
                      <input type="text" required class="form-control" name="bcode" id="bCode">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input type="text" required class="form-control" name="bname" id="bName">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Student Name</label>
                        <input type="text" required class="form-control" name="stname" id="genre">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>


              <!--Return  book -->
              <div class="delBook col-md-6">

                <h2 class="h2 my-4 text-center text" >
                    Return a Book
                </h2>
            <form class="container" method="post" action="returnBook.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Book Code</label>
                  <input type="text" required class="form-control" name="bcode" id="bCode">
                </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input type="text" required class="form-control" name="bname" id="bName">
                      </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Student Name</label>
                    <input type="text" required class="form-control" name="stname">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              </div>
          </div>






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