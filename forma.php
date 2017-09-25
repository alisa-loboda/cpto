<?php
include "header.php";
?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <h1 class="text-center">
          ФОРМА ОБРАТНОЙ СВЯЗИ
        </h1>
        <div class="col-lg-6 col-md-6">
              <form action="post.php" method="post" role="form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NAME</label>
                  <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label  for="exampleInputFile">MESSAGE</label>
                  <textarea rows="15" id="exampleInputFile" name="message">
                    
                  </textarea>
                </div>  
                
                <button type="submit" class="btn btn-default">Отправить</button>
              </form>
        </div>
        <div class="col-lg-6 col-md-6"></div>
      </div>
  </div>
</div>
<?php
include "footer.php";
?>