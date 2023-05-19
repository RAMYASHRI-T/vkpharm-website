<!-- <h3>Welcome to VK PHARMACY</h3>
<h5>Find everything you need!</h5>
<hr>
<div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <button style="margin-left:750px;" class="btn btn-outline-primary" type="button" id="upload" href="#" onclick="show('popup')">Upload you prescription here</button>

<div class="popup" id="popup">
<div class="container">
  <div class="card">
    <div class="drop_box">
      <div class="container1">  
  <form id="contact" action="" method="post">
    <h3>Prescription Upload Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Your address here...." tabindex="5" required></textarea>
    </fieldset>
      <header>
        <h4>Upload prescription here</h4>
      </header>
      <p>Files Supported: PDF, PNG, JPG</p>
      <input type="file" hidden accept=".png,.jpg,.pdf" id="fileID" style="display:none;">
      <button class="btn">Choose File</button>
     <fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

    </div>

  </div>
</div>
  <a href="#" onclick="hide('popup')">Close</a>
</div>


                    </div>
                </div>
            </div>
<style>
    
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 10 5px;
  padding: 10px;
  font-size: 15px;
}

.btn {
  text-decoration: none;
  background-color: #005af0;
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  outline: none;
  transition: 0.3s;
}

.btn:hover{
  text-decoration: none;
  background-color: #ffffff;
  color: #005af0;
  padding: 10px 20px;
  border: none;
  outline: 1px solid #010101;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

    .popup {
  display: none;
  position: fixed;
  padding: 10px;
  width: 780px;
  left: 25%;
  margin-left: 500px;
  height: 580px;
  top: 40%;
  margin-top: -200px;
  background: #FFF;
  border: 3px solid black;
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}
    .prod-item:hover>.card{
        background: rgba(var(--bs-info-rgb),.5)
    }
    
    .prod-item>.card .img-top{
        transition: transform .5s ease;
        width: 100%;
    }
    .prod-item:hover>.card .img-top{
        transform:scale(1.5);
    }
</style>
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-4">
            <h4><b>Categories</b></h4>
            <hr>
            <div class="list-group">
                <a href="./?category=all" class="list-group-item <?php echo !isset($_GET['category']) || (isset($_GET['category']) && !is_numeric($_GET['category']))? "active" : "" ?>">All</a>
                <?php 
                $categories = $conn->query("SELECT * FROM `category_list` where `status` = 1 order by `name` asc");
                while($row=$categories->fetchArray()):
                ?>
                    <a href="./?category=<?php echo $row['category_id'] ?>" class="list-group-item <?php echo isset($_GET['category']) && $_GET['category'] == $row['category_id'] ? "active" : "" ?>"><?php echo $row['name'] ?></a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="<?php echo isset($_GET['search'])?  $_GET['search'] : '' ?>" class="form-control" placeholder="Search Product Here" aria-label="Search Product Here" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button" id="search">Search</button>
                    </div>
                </div>
            </div>
            <div class="row gx-3 row-cols-3">
                <?php 
                $where = "";
                if(isset($_GET['category']) && $_GET['category'] != 'all' && is_numeric($_GET['category'])){
                    $where = " and p.`category_id` = '{$_GET['category']}' ";
                }
                if(isset($_GET['search'])){
                    $where = " and (p.`name` like '%{$_GET['search']}%' or p.`description` like '%{$_GET['search']}%' or c.`name` like '%{$_GET['search']}%') ";
                }
                $qry = $conn->query("SELECT p.*,c.name as cname FROM `product_list` p inner join `category_list` c on p.category_id = c.category_id where p.`status` = 1 {$where} order by p.`name` asc");
                while($row = $qry->fetchArray()):
                ?>
                <a class="col prod-item text-dark text-decoration-none" href="javascript:void(0)" data-id="<?php echo $row['product_id'] ?>">
                    <div class="card h-100">
                        <div class="h-auto overflow-hidden">
                            <img src="<?php echo "uploads/thumbnails/".$row['product_id'].".png" ?>" alt="IMG" class="img-top">
                        </div>
                        <div class="card-body">
                            <div class="fs-5"><?php echo $row['name'] ?></div>
                            <small><i><?php echo $row['cname'] ?></i></small>
                            <p class="m-0 truncate-3"><small><i><?php echo $row['description'] ?></i></small></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
            <?php 
            if(!$qry->fetchArray()): ?>
            <center>
                <?php if(isset($_GET['search'])): ?>
                <div class="fs-5"><b><i>No product found.</i></b></div>
                <?php else: ?>
                <div class="fs-5"><b><i>No Product Listed Yet.</i></b></div>
                <?php endif; ?>
            </center>
            <?php endif;  ?>
        </div>
    </div>
</div>
<script>
    const dropArea = document.querySelector(".drop_box"),
  button = dropArea.querySelector("button"),
  dragText = dropArea.querySelector("header"),
  input = dropArea.querySelector("input");
let file;
var filename;

button.onclick = () => {
  input.click();
};

input.addEventListener("change", function (e) {
  var fileName = e.target.files[0].name;
  let filedata = `
    <form action="" method="post">
    <div class="form">
    <h4>${fileName}</h4>
    <input type="email" placeholder="Enter email upload file">
    <button class="btn">Upload</button>
    </div>
    </form>`;
  dropArea.innerHTML = filedata;
});

    $ = function(id) {
  return document.getElementById(id);
}

var show = function(id) {
	$(id).style.display ='block';
}
var hide = function(id) {
	$(id).style.display ='none';
}
    $(function(){
        $('.prod-item').click(function(){
            uni_modal("Product Details","view_product.php?id="+$(this).attr('data-id'),"mid-large")
        })
        $('[name="search"]').keydown(function(e){
            if(e.which == 13){
                e.preventDefault();
                $('#search').trigger('click')
            }
        })
        $('#search').click(function(){
            if($('[name="search"]').val() == '')
            location.href="./";
            else
            location.href="./?search="+$('[name="search"]').val();
        })
    })
</script> -->




<h3>Welcome to VK PHARMACY</h3>
<h5>Find everything you need!</h5>
<hr>
<div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <button style="margin-left:750px;" class="btn btn-outline-primary" type="button" id="upload" href="#" onclick="show('popup')">Upload you prescription here</button>

<div class="popup" id="popup">
<div class="container">
  <div class="card">
    <div class="drop_box">
      <div class="container1">  
  <form id="contact" action="" method="post">
    <h3>Prescription Upload Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Your address here...." tabindex="5" required></textarea>
    </fieldset>
      <header>
        <h4>Upload prescription here</h4>
      </header>
      <p>Files Supported: PDF, PNG, JPG</p>
      <input type="file" hidden accept=".png,.jpg,.pdf" id="fileID" style="display:none;">
      <button class="btn">Choose File</button>
     <fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

    </div>

  </div>
</div>
  <a href="#" onclick="hide('popup')">Close</a>
</div>


                    </div>
                </div>
            </div>

<style>
  .popup {
  display: none;
  position: fixed;
  padding: 10px;
  width: 780px;
  left: 25%;
  margin-left: 500px;
  height: 580px;
  top: 40%;
  margin-top: -200px;
  background: #FFF;
  border: 3px solid black;
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}
  
  #contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 10 5px;
  padding: 10px;
  font-size: 15px;
}
#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
    .prod-item:hover>.card{
        background: rgba(var(--bs-info-rgb),.5)
    }
    
    .prod-item>.card .img-top{
        transition: transform .5s ease;
        width: 100%;
    }
    .prod-item:hover>.card .img-top{
        transform:scale(1.5);
    }
</style>
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-4">
            <h4><b>Categories</b></h4>
            <hr>
            <div class="list-group">
                <a href="./?category=all" class="list-group-item <?php echo !isset($_GET['category']) || (isset($_GET['category']) && !is_numeric($_GET['category']))? "active" : "" ?>">All</a>
                <?php 
                $categories = $conn->query("SELECT * FROM `category_list` where `status` = 1 order by `name` asc");
                while($row=$categories->fetchArray()):
                ?>
                    <a href="./?category=<?php echo $row['category_id'] ?>" class="list-group-item <?php echo isset($_GET['category']) && $_GET['category'] == $row['category_id'] ? "active" : "" ?>"><?php echo $row['name'] ?></a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="<?php echo isset($_GET['search'])?  $_GET['search'] : '' ?>" class="form-control" placeholder="Search Product Here" aria-label="Search Product Here" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="button" id="search">Search</button>
                    </div>
                </div>
            </div>
            <div class="row gx-3 row-cols-3">
                <?php 
                $where = "";
                if(isset($_GET['category']) && $_GET['category'] != 'all' && is_numeric($_GET['category'])){
                    $where = " and p.`category_id` = '{$_GET['category']}' ";
                }
                if(isset($_GET['search'])){
                    $where = " and (p.`name` like '%{$_GET['search']}%' or p.`description` like '%{$_GET['search']}%' or c.`name` like '%{$_GET['search']}%') ";
                }
                $qry = $conn->query("SELECT p.*,c.name as cname FROM `product_list` p inner join `category_list` c on p.category_id = c.category_id where p.`status` = 1 {$where} order by p.`name` asc");
                while($row = $qry->fetchArray()):
                ?>
                <a class="col prod-item text-dark text-decoration-none" href="javascript:void(0)" data-id="<?php echo $row['product_id'] ?>">
                    <div class="card h-100">
                        <div class="h-auto overflow-hidden">
                            <img src="<?php echo "uploads/thumbnails/".$row['product_id'].".png" ?>" alt="IMG" class="img-top">
                        </div>
                        <div class="card-body">
                            <div class="fs-5"><?php echo $row['name'] ?></div>
                            <small><i><?php echo $row['cname'] ?></i></small>
                            <p class="m-0 truncate-3"><small><i><?php echo $row['description'] ?></i></small></p>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
            <?php 
            if(!$qry->fetchArray()): ?>
            <center>
                <?php if(isset($_GET['search'])): ?>
                <div class="fs-5"><b><i>No product found.</i></b></div>
                <?php else: ?>
                <div class="fs-5"><b><i>No Product Listed Yet.</i></b></div>
                <?php endif; ?>
            </center>
            <?php endif;  ?>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.prod-item').click(function(){
            uni_modal("Product Details","view_product.php?id="+$(this).attr('data-id'),"mid-large")
        })
        $('[name="search"]').keydown(function(e){
            if(e.which == 13){
                e.preventDefault();
                $('#search').trigger('click')
            }
        })
        $('#search').click(function(){
            if($('[name="search"]').val() == '')
            location.href="./";
            else
            location.href="./?search="+$('[name="search"]').val();
        })
    })
    
</script>