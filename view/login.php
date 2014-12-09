<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Haber Box</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php include "menu.php"; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <div class="row">
          
          <div class="col-lg-10">
            <h3>Üyelik Giriş Alanı</h1>
          </div>
 
      </div>
      
      <div class="row">
       
       <div class="col-xs-6 col-centered">
           
              <form method="POST" action="/giris">
              <div class="form-group">
                <label for="exampleInputEmail1">Kullanıcı Adınız?</label>
                <input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Şifreniz?</label>
                <input type="password" class="form-control " name="parola" placeholder="Şifre">
              </div>
              <button type="submit" class="btn btn-info">Giriş Yap</button>
            </form> 
        
          
          </div>

      </div>

    </div>
