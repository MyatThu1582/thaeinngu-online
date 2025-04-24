<?php include 'resource/links.php'; ?>
<style>
  <?php include 'resource/style.css'; ?>
</style>
<?php include 'navbar.php'; ?>
<div class="logincontainer d-flex">
  <div class="col-2 me-2 tohide">

  </div>
  <div class="col-7 bg-light rounded ms-5 p-3 floating register full">
    <p class="text-center h4 blue mt-3 floating">Register At Asoka Center</p>
    <div class="m-3 floating">
      <input type="name" name="" value="" placeholder="Name" class="mt-2 input">
    </div>
    <div class="d-flex mt-3">
      <div class="col-6">
        <div class="ms-3 me-3 floating">
          <input type="email" name="" value="" placeholder="Email" class="mt-2 input">
        </div>
      </div>
      <div class="col-6">
        <div class="ms-3 me-3 floating">
          <input type="phone" name="" value="" placeholder="Phone" class="mt-2 input">
        </div>
      </div>
    </div>
    <div class="d-flex mt-3">
      <div class="col-6">
        <div class="ms-3 me-3 floating">
          <input type="password" name="" value="" placeholder="Password" class="mt-2 input">
        </div>
      </div>
      <div class="col-6">
        <div class="ms-3 me-3 floating">
          <input type="password" name="" value="" placeholder="Confirm Password" class="mt-2 input">
        </div>
      </div>
      </div>
      <div class="ms-3 me-3 mt-3 floating">
        <textarea name="name" rows="3" cols="80" placeholder="Address" class="input"></textarea>
      </div>
    <div class="ms-3 me-3 mt-5 mb-3 floating">
      <button type="button" name="button" class="btn text-light form-control" style="background-color:#02137d;">Register</button>
    </div>
  </div>
</div>
    <div class="floating"></div>
<?php include 'footer.php'; ?>
