<div class="footer text-light">
  <div class="d-flex pt-5 pb-5 pe-5 ps-5">
    <div class="col-4 ms-5">
      <h4>Get In Touch</h4>
      <p class="footertitle-underline"></p>
      <div class="text">
        <span>Got questions or want to learn more about Theinngu Monastery?
        We’re here to help you on your journey.</span>
        <p class="mt-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
          </svg>
          name@gmail.com
        </p>
        <p class="mt-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill me-2" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
          </svg>
          name@gmail.com
        </p>
        <p class="mt-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg>
          01-64851 / 09-247997483 / 09-738363848
        </p>
      </div>
    </div>
    <div class="col-2 ms-5">
      <h4>Quick Links</h4>
      <p class="footertitle-underline"></p>
      <div class="footer-links">
        <a href="#" class="f-links link">Home</a>
        <a href="#" class="f-links link">About Us</a>
        <a href="#" class="f-links link">Resources</a>
        <a href="#" class="f-links link">Announcement</a>
        <a href="#" class="f-links link">Activity</a>
        <a href="#" class="f-links link">Donate</a>
        <a href="#" class="f-links link">Cantact</a>
      </div>
    </div>
    <div class="col-5 pe-5">
      <h4>Address</h4>
      <p class="footertitle-underline"></p>
      <div class="mapswrapper"><iframe width="100%" height="250px" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=hmawbi%20thae%20inn%20gu&zoom=17&maptype=satellite"></iframe><a href="https://www.fluxaiimagegenerator.net">ai image</a><style>.mapswrapper{position:relative}.mapswrapper iframe{border:0;position:relative;z-index:2}.mapswrapper a{color:rgba(0,0,0,0);position:absolute;left:0;top:0;z-index:0}</style></div>
    </div>
  </div>
  <div class="copyright pt-2 pb-3 d-flex">
    <div class="col-9">
      2024 ThaeInnGu - Myanmar. All right reserved.
    </div>
    <div class="col-2 ms-3">
      Design By <a href="https://protechmm.com/" class="link ms-2">ProTech</a>
    </div>
  </div>
</div>
</body>
</html>
<script>

// Scrool Check
var header = document.querySelector('#header');
var btn = document.querySelector('#btn');

function scrollDetect(){
  var mar = 300;
  window.onscroll = function() {
      let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value
      console.log(currentScroll);
      if (currentScroll > mar) {
        btn.classList.remove('hide');
        header.classList.remove('hide');
      }else{
        btn.classList.add('hide');
        header.classList.add('hide');
      }
  };
}

scrollDetect();

let biobtn1 = document.querySelector('#btn1');
let biobtn2 = document.querySelector('#btn2');
let biobtn3 = document.querySelector('#btn3');
let biobtn4 = document.querySelector('#btn4');

let bioimg1 = document.querySelector('#sayardaw1');
let bioimg2 = document.querySelector('#sayardaw2');
let bioimg3 = document.querySelector('#sayardaw3');
let bioimg4 = document.querySelector('#sayardaw4');

let biotext1 = document.querySelector('#biotext1');
let biotext2 = document.querySelector('#biotext2');
let biotext3 = document.querySelector('#biotext3');
let biotext4 = document.querySelector('#biotext4');

bioimg1.classList.remove('hide');
biotext1.classList.remove('hide');
biobtn1.classList.add('none-bg');

biobtn1.addEventListener('click',function(){
  bioimg1.classList.remove('hide');
  biotext1.classList.remove('hide');
  bioimg2.classList.add('hide');
  biotext2.classList.add('hide');
  bioimg3.classList.add('hide');
  biotext3.classList.add('hide');
  bioimg4.classList.add('hide');
  biotext4.classList.add('hide');
  biobtn1.classList.add('none-bg');
  biobtn2.classList.remove('none-bg');
  biobtn3.classList.remove('none-bg');
  biobtn4.classList.remove('none-bg');
})

biobtn2.addEventListener('click',function(){
  bioimg1.classList.add('hide');
  biotext1.classList.add('hide');
  bioimg2.classList.remove('hide');
  biotext2.classList.remove('hide');
  bioimg3.classList.add('hide');
  biotext3.classList.add('hide');
  bioimg4.classList.add('hide');
  biotext4.classList.add('hide');
  biobtn1.classList.remove('none-bg');
  biobtn2.classList.add('none-bg');
  biobtn3.classList.remove('none-bg');
  biobtn4.classList.remove('none-bg');
})

biobtn3.addEventListener('click',function(){
  bioimg1.classList.add('hide');
  biotext1.classList.add('hide');
  bioimg2.classList.add('hide');
  biotext2.classList.add('hide');
  bioimg3.classList.remove('hide');
  biotext3.classList.remove('hide');
  bioimg4.classList.add('hide');
  biotext4.classList.add('hide');
  biobtn1.classList.remove('none-bg');
  biobtn2.classList.remove('none-bg');
  biobtn3.classList.add('none-bg');
  biobtn4.classList.remove('none-bg');
})

biobtn4.addEventListener('click',function(){
  bioimg1.classList.add('hide');
  biotext1.classList.add('hide');
  bioimg2.classList.add('hide');
  biotext2.classList.add('hide');
  bioimg3.classList.add('hide');
  biotext3.classList.add('hide');
  bioimg4.classList.remove('hide');
  biotext4.classList.remove('hide');
  biobtn1.classList.remove('none-bg');
  biobtn2.classList.remove('none-bg');
  biobtn3.classList.remove('none-bg');
  biobtn4.classList.add('none-bg');
})

</script>
