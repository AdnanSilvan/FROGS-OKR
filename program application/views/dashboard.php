<style>
  .cardBox {
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 30px;
  }

  .cardBox .card {
    position: relative;
    background: #fff;
    padding: 30px;
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border: 2px solid #1face1;
  }

  .cardBox .card .numbers {
    position: relative;
    font-weight: 500;
    font-size: 2.5rem;
    color: var(--blue);
  }

  .cardBox .card .cardName {
    color: var(--black2);
    font-size: 1.1rem;
    margin-top: 5px;
  }

  .cardBox .card .iconBx {
    font-size: 3.5rem;
    color: var(--black2);
  }

  .cardBox .card:hover {
    background: #1face1;
    color: #fff;
  }

  .cardBox .card:hover .numbers,
  .cardBox .card:hover .cardName,
  .cardBox .card:hover .iconBx {
    color: var(--white);
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-fluid flex-grow-1 container-p-y">

    <div class="cardBox">
      <a href="<?= base_url('fi') ?>" style="text-decoration: none; color: inherit;">
        <div class="card">
          <div>
            <div class="numbers"><?= number_format($fis_count) ?></div>
            <div class="cardName">Total Entries in FI</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
      </a>

      <a href="<?= base_url('fsi') ?>" style="text-decoration: none; color: inherit;">
        <div class="card">
          <div>
            <div class="numbers"><?= number_format($fsis_count) ?></div>
            <div class="cardName">Total Entries in FSI</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
      </a>

      <a href="<?= base_url('technologi') ?>" style="text-decoration: none; color: inherit;">
        <div class="card">
          <div>
            <div class="numbers"><?= number_format($technologis_count) ?></div>
            <div class="cardName">Total Entries in Technologi</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
      </a>

      <a href="<?= base_url('bussiness') ?>" style="text-decoration: none; color: inherit;">
        <div class="card">
          <div>
            <div class="numbers"><?= number_format($bussinesss_count) ?></div>
            <div class="cardName">Total Entries in Bussiness</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
      </a>

      <a href="<?= base_url('finance') ?>" style="text-decoration: none; color: inherit;">
        <div class="card">
          <div>
            <div class="numbers"><?= number_format($finances_count) ?></div>
            <div class="cardName">Total Entries in Finance</div>
          </div>
          <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
          </div>
        </div>
      </a>
    </div>


    <!--/ Data Tables -->
  </div>
</div>
<!-- / Content -->



<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->