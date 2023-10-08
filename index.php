<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include './parts/header.php'; ?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
      <img src="images.jpeg" alt="">
      <h3 class="display-4 fw-normal">اربح مع محمد</h3>
      <p class="lead fw-normal">بافي على فتح التسجيل </p>
      <h3  id="counretdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامح </p>
      
    </div>
    <div class="container">
<h3>للدخول في السحب اتبع مايلي:</h3>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">تابع البث المباشر على صفحتي على الفيسبوك بتاريخ المذكور اعلاه</li>
      <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه عبارة عن أسئلة و أجوبة حرة للجميع</li>
      <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك و إيميلك</li>
      <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
      <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
</div>

  </div>


<div class="container">

<div class="position-relative  text-center ">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php  $_SERVER['PHP_SELF'] ?>" method='POST'>
<center>
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstname" class="form-label">الاسم الاول</label>
    <input type="text"  name="firstname" class="form-control" id="firstname" value="<?php  echo $firstname ?>">
    <div  class="form-text error"><?php  echo $errors ['firstnameError']  ?></div>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">الاسم الاخير </label>
    <input type="text" name="lastname" class="form-control" id="lastname"  value="<?php  echo $lastname ?>">
    <div  class="form-text error"><?php  echo $errors ['lastnameError']  ?></div>
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email"  value="<?php  echo $email ?>">
    <div  class="form-text error"><?php  echo $errors ['emailError']  ?></div>
  </div>

  <button type="submit"  name="submit" class="btn btn-primary">رسال المعلومات</button>
  </center>
</form>
</div>
</div>
</div>


<div class="loder1" id="loder1">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5"> 
<button type="button" id="winner" class="btn btn-primary" >
اختيار الرابح 
</button>

</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     

        <h3 class="modal-title" id="modalLabel"> الرابح في المسابقة</h3>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
      <h6 class=" display-5 text-center  modl-title" id = "modalLabel" >   <?php echo htmlspecialchars($user['firstname']) .' ' .  htmlspecialchars($user['lastname']) ;?><br></h6>
      <?php endforeach; ?>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>


<!--<div  id="cards" class="row mb-5 pd-5">




<div class="col-sm-6">
    <div class="card my-2 bg-light">
        <div class="card-body">
            <h5 class="card-title"> <?php echo htmlspecialchars($user['firstname']) .' ' .  htmlspecialchars($user['lastname']) ;?><br><?php  echo htmlspecialchars($user['email']) ;?></h5>
        </div>
    </div>
</div>
      -->
<?php include './parts/footer.php'; ?>