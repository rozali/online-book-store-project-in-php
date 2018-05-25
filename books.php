<?php
  session_start();
  $count = 0;
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT book_isbn, book_image FROM books";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/header.php";
?>
<div class="row">
  <div class="col-md-9">
  <p class="lead text-center text-muted">Full Catalogs of Books</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['book_image']; ?>">
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
?>
</div>
  <div class="col-md-3">
    <div class="panel panel-default sidebar-menu" id="accordion">
      <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
      </div>
      <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
          <li>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Cetegories 1 <span class="badge pull-right">42</span></a>
            <div id="collapseOne" class="panel-collapse collapse in">
            <ul>
              <li><a href="category.html">Sub Categories 1</a>
              </li>
              <li><a href="category.html">Sub Categories 1</a>
              </li>
              <li><a href="category.html">Sub Categories 1</a>
              </li>
              <li><a href="category.html">Sub Categories 1</a>
              </li>
            </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Categories 2 <span class="badge pull-right">123</span></a>
            <div id="collapseTwo" class="panel-collapse collapse">
            <ul>
              <li><a href="category.html">Sub Categories 2</a>
              </li>
              <li><a href="category.html">Sub Categories 2</a>
              </li>
              <li><a href="category.html">Sub Categories 2</a>
              </li>
              <li><a href="category.html">Sub Categories 2</a>
              </li>
            </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Categories 3 <span class="badge pull-right">11</span></a>
            <div id="collapseThree" class="panel-collapse collapse">
            <ul>
              <li><a href="category.html">Sub Categories 3</a>
              </li>
              <li><a href="category.html">Sub Categories 3</a>
              </li>
              <li><a href="category.html">Sub Categories 3</a>
              </li>
              <li><a href="category.html">Sub Categories 3</a>
              </li>
            </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
  require_once "./template/footer.php";
?>