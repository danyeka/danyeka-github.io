<!doctype html>
<html lang="en">
<?php $this->load->view('partials/head.php'); ?>

<body>
  <header><H1>Minuman</H1></header>
  <div id="main">
    <article>
    <div class="row"> 
        <div class="column">
        <div class="text">
            <h3 class="text-heading">Teh Telur</h3>
          </div>
          <img src="<?= base_url('assets/images/Teh Telur.jpg') ?>" style="width:100%">
        </div>
        <div class="column">
          <img src="<?= base_url('assets/images/Teh Telur.jpg') ?>" style="width:100%">
        </div> 
        <div class="column">
          <img src="<?= base_url('assets/images/Teh Telur.jpg') ?>" style="width:100%">
        </div>
        <div class="column">
          <img src="<?= base_url('assets/images/Teh Telur.jpg') ?>" style="width:100%">
        </div>   
      </div>
    </article>
    <?php $this->load->view('partials/navbar.php'); ?> 
  </div>
  <footer><?php $this->load->view('partials/footer.php'); ?></footer>
</body>
</html>