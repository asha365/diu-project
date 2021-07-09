<?php
    require_once("../Book-Store-Management-System/php/component.php");
    require_once("../Book-Store-Management-System/php/operation.php");
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WWW.BOOK STORE MANAGEMENT SYSTEM.COM</title>

    <!-- Bootstrap -->
    <link href="Asset/css/bootstrap.css" rel="stylesheet">
    <link href="Asset/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="Asset/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!----------------------------------book store menu start------------------------------------------>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <section>
  <div class="container Dai_add_m"> 
		<div class="nav top-menu">
			<div class="icon-nav">
				<span class="icon glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			</div>
			<div class="menu-items">
				
				<div class="col-md-2 menu_book_box"> 
					<h4><a href="Home.html">HOME</a></h4>
                    <a href="" >Galley</a><br/>
					         
				</div>

                <div class="col-md-2 menu_book_box">
                    <h4><a href="About.html">ABOUT BOOK</a></h4>
                    <a href="">Governance</a><br/>
                    <a href="">Academical Model</a><br/>
                    <a href="">History</a>
                </div>

                <div class="col-md-2 menu_book_box">
                    <h4><a href="All-Books.html">ALL BOOKS</a></h4>
                    <a href="" >Business Related</a><br/>
					          <a href="">History Related</a><br/>
                    <a href="">Islamic</a>

                </div>

                <div class="col-md-2 menu_book_box">
                    <h4><a href="Contact Author">CONTACT US</a></h4>
                    <a href="" >Contact author</a><br/>
                    <a href="">Help Center</a>
                </div>

              

                <div class="col-md-2 menu_book_box">
                    <h4><a href="Login.html">LOGIN</a></h4>
                    <a href="">Sign Up</a>
                </div>
				
			</div>
		</div>
	<div class="row"> 
    </section>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store menu End------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->




  <!----------------***********************************------------->
  <!----------------*****************left_right_step_start******************------------->
  <!----------------***********************************------------->
  <section>
  <div class=" container book_header_section clearfix">

    <div class="col-md-10  book_store_name">
        <span>BOOK STORE</span>
        <p>When I look back, I am so impressed again with the life-giving power of literature. If I were a young person today, trying to gain a sense of myself in the world, I would do that again by reading, just as I did when I was young</p>
        </p>
    </div>

    <div class="col-md-2 book_icon"> 
        <img style="height: 150px; width: 170px;" src="Asset/image/logo.png" alt="n/a"/>
    </div>

</div>	
</section>

<!----------------***********************************------------->
<!----------------***************left_right_step_end*****************------------->
<!----------------***********************************------------->






  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store main part Start------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->

  <section>
    <div class="col-md-12 book">
    <div class="col-md-2"></div>
    <div class="col-sm-6 col-md-8 main-store">

      <h4 class="thamble"><i class="fas fa-book"></i> Book Store</h4> <br><br>


      <div class="input-form">
        <form action="" method="post">
        <!------------------book form update------------------------>
          <div class="input-form">
          <?php inputElement($placeholder="ID",$name="book_id",$value=""); ?>
          </div>
          <div class="input-form">
            <?php inputElement($placeholder="Book Name",$name="book_name",$value=""); ?>
          </div>
          <div class="input-form">
            <?php inputElement($placeholder="Author",$name="book_author",$value=""); ?>
          </div>
          <div class="input-form">
            <?php inputElement($placeholder="Price",$name="book_price",$value=""); ?>
          </div>

        </form>
      </div>

    </div>

    <div class="col-md-2"></div>
    </div>
  </section>

  <section>
    <div class="col-md-12">
      <div class="col-md-2"></div>
   
      <div class="col-md-8">
      <div class="d-flex justify-content-center">

      <div class="d-flex justify-content-center">
          <?php  buttonElement($btnId="btn-create", $btnClass="btn btn-success", $text="Create", $name="create", $attribute="dat-toggle='tooltip' data-placement='bottom' title='Create'");?>
          <?php  buttonElement($btnId="btn-refresh", $btnClass="btn btn-primary", $text="Refresh", $name="refresh", $attribute="dat-toggle='tooltip' data-placement='bottom' title='Refresh'");?>
          <?php  buttonElement($btnId="btn-warning", $btnClass="btn btn-warning", $text="Update", $name="update", $attribute="dat-toggle='tooltip' data-placement='bottom' title='update'");?>
          <?php  buttonElement($btnId="btn-danger", $btnClass="btn btn-danger", $text="Delete All", $name="Delete All", $attribute="dat-toggle='tooltip' data-placement='bottom' title='Delete All'");?>
      </div>

      </div>
      </div>


      <div class="col-md-2"></div>
    </div>
  </section>

  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store main part End---------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->

  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store Data table Start----------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <div class="container d-flex">
    <div class="col-md-12 table-style">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author</th>
            <th scope="col">Book Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Book</td>
            <td>Apoorva Kumar Singh</td>
            <td>20.23</td>
            <td class="font-edit"><i class="fas fa-edit"></i></td>
            <td class="font-delete"><i class="fas fa-trash-alt"></i></td>
          </tr>


        </tbody>
      </table>
    </div>
  </div>

    <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store Data table End---------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->

  
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store main footer start----------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->

  <div class="container"> 
    <div class="book-store_footer"> 
      <p>Copyright &copy; 2021</p>
    </div>
    </div>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------book store main footer end----------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->