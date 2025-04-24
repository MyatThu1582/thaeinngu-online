<?php include '../navbar.php'; ?>
<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Donate</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="donate.php" class="link text-brown">Donate</a>
  </div>
</div>
<div class="container mt-5 pt-5">
  <div class="d-flex">
    <div class="col-6 pe-5">
      <h4>Our Information</h4>
      <p class="title-underline"></p>
      <h5 class="mb-4">You can donate us with below informations</h5>
      <table class="table table-bordered">
        <tr class="" style="font-size:16px;">
          <th style="color:rgb(94,0,0);">Bank Account Name</th>
          <th style="color:rgb(94,0,0);">Account Number</th>
          <th style="color:rgb(94,0,0);">Ph. No</th>
        </tr>
        <tr style="font-size:14px;">
          <td>KANBAWZA BANK LTD</td>
          <td>899324562765466</td>
          <td>09-267397564</td>
        </tr>
        <tr style="font-size:14px;">
          <td>YOMA BANK LTD</td>
          <td>627689932455466</td>
          <td>09-267397564</td>
        </tr>
        <tr style="font-size:14px;">
          <td>CB BANK LTD</td>
          <td>456276899325466</td>
          <td>09-267397564</td>
        </tr>
        <tr style="font-size:14px;">
          <td>WAVE PAY (U Mg Mg)</td>
          <td>324562899765466</td>
          <td>09-267397564</td>
        </tr>
      </table>
      <h5 class="mt-5">We really appreciate your donation.</h5>
      <p>
        Please fill your infomations here
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-hand-index text-brown hand mb-1 ms-2" viewBox="0 0 16 16">
          <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/>
        </svg>
      </p>
    </div>
    <div class="col-6">
      <h4>Donator Information</h4>
      <p class="title-underline"></p>
      <form class="" action="" method="post">
        <div class="d-flex">
          <div class="col me-3">
            <input type="text" name="" value="" class="donate" placeholder="Name">
          </div>
          <div class="col">
            <input type="text" name="" value="" class="donate" placeholder="Email">
          </div>
        </div>
        <div class="d-flex mt-4">
          <div class="col-12">
            <input type="text" name="" value="" class="donate" placeholder="Address">
          </div>
        </div>
        <div class="d-flex mt-4">
          <div class="col-6 me-3">
            <input type="text" name="" value="" class="donate" placeholder="Phone No.">
          </div>
          <div class="col-3 me-3" style="width: 22% !important;">
            <select class="donate" name="">
              <option value="">Select</option>
              <option value="">1</option>
              <option value="">2</option>
            </select>
          </div>
          <div class="col-3" style="width: 22% !important;">
            <input type="number" name="" class="donate" placeholder="Amount">
          </div>
        </div>
        <div class="d-flex mt-4">
          <div class="col-12">
            <textarea name="name" rows="4" cols="80" class="donate" placeholder="Message"></textarea>
          </div>
        </div>
        <button type="button" name="button" class="mt-4 donatebtn">Send</button>
      </form>
    </div>
  </div>
</div>
<br><br><br>
<?php include '../footer.php'; ?>
