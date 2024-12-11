<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-fluid flex-grow-1 container-p-y">

    <!-- Data Tables -->
    <div class="card">
      <h5 class="card-header pb-0">Objectives & Key Results (OKR) Divisi Technologi</h5>
      <div class="m-3">
        <a href="<?php echo site_url('technologi/create'); ?>" class="btn btn-primary">
          <span class="tf-icons ri-checkbox-circle-line ri-16px me-1_5"></span>Add New
        </a>
      </div>
      <div class="table-responsive text-nowrap">
        <?php if (!empty($technologis)): ?>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Objective Name</th>
                <th>Key Result</th>
                <th>Owner</th>
                <th>Weight</th>
                <th>Target</th>
                <th>Actual</th>
                <th>Progress</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <?php $i = 1; ?>
              <?php foreach ($technologis as $technologi): ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $technologi['objective_name']; ?></td>
                  <td><?php echo $technologi['key_results']; ?></td>
                  <td><?php echo $technologi['owner']; ?></td>
                  <td>
                    <?php
                    $weight = $technologi['weight'];
                    echo (strpos($weight, '.00') !== false) ? rtrim(rtrim($weight, '0'), '.') . '%' : $weight . '%';
                    ?>
                  </td>
                  <td>
                    <?php
                    $target = $technologi['target'];
                    echo (strpos($target, '.00') !== false) ? rtrim(rtrim($target, '0'), '.') . '%' : $target . '%';
                    ?>
                  </td>
                  <td>
                    <?php
                    $actual = $technologi['actual'];
                    echo (strpos($actual, '.00') !== false) ? rtrim(rtrim($actual, '0'), '.') . '%' : $actual . '%';
                    ?>
                  </td>
                  <td>
                    <?php
                    $progress = $technologi['progress'];
                    $progressClass = '';
                    $emoji = '';

                    if ($progress < 30) {
                      $progressClass = 'text-danger'; // red
                      $emoji = '🚨'; // Emoji for "Tidak Berjalan"
                    } elseif ($progress >= 30 && $progress < 70) {
                      $progressClass = 'text-warning'; // yellow
                      $emoji = '<span class="text-dark">🛠</span>'; // Emoji for "Sedang Berjalan"
                    } elseif ($progress >= 70 && $progress < 100) {
                      $progressClass = 'text-success'; // green
                      $emoji = '👌'; // Emoji for "Berjalan dengan baik"
                    } else {
                      $progressClass = 'text-primary'; // blue
                      $emoji = '🚀'; // Emoji for "Selesai"
                    }
                    ?>
                    <span class="<?php echo $progressClass; ?>">
                      <?php echo $emoji . ' ' . ((strpos($progress, '.00') !== false) ? rtrim(rtrim($progress, '0'), '.') : $progress) . '%'; ?>
                    </span>
                  </td>

                  <td>
                    <a href="<?php echo site_url('technologi/edit/' . $technologi['id']); ?>"
                      class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger"
                      onclick="confirmDelete('<?php echo site_url('technologi/delete/' . $technologi['id']); ?>')">Delete</a>
                  </td>
                </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>No technologi data available.</p>
        <?php endif; ?>
      </div>
    </div>
    <!--/ Data Tables -->

    <!-- Overview Chart -->
     <div class="row mt-3">
    <div class="col-xl-6 col-md-8">
      <div class="card">
        <div class="card-header pb-2">
          <h5 class="mb-1">Objectives & Key Results (OKR) HRGA</h5>
        </div>
        <div class="card-body">
          <canvas id="progressOverviewChart"></canvas>
        </div>
      </div>
    </div>
    <script>
      // Chart / Grafik
      const objectiveNames = <?php echo json_encode(array_column($technologis, 'objective_name')); ?>;
      const progressData = <?php echo json_encode(array_column($technologis, 'progress')); ?>;
    </script>
    <!--/ Overview Chart -->

  
  <!-- Result -->
  <div class="col-xl-6 col-md-12">
    <div class="row">
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Result</h5>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Objective Name</th>
                  <th scope="col">Progress</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($technologis as $item): ?>
                <?php
                  // Determine the progress bar color class
                  $progress = $item['progress'];
                  $progressBarClass = '';

                  if ($progress < 30) {
                    $progressBarClass = 'bg-danger'; // Red
                  } elseif ($progress >= 30 && $progress < 70) {
                    $progressBarClass = 'bg-warning'; // Yellow
                  } elseif ($progress >= 70 && $progress < 100) {
                    $progressBarClass = 'bg-success'; // Green
                  } else {
                    $progressBarClass = 'bg-primary'; // Blue
                  }
                ?>
                <tr>
                  <td><?= htmlspecialchars($item['objective_name']); ?></td>
                  <td>
                    <div class="progress" style="height: 10px;">
                      <div class="progress-bar <?= $progressBarClass; ?>" role="progressbar" style="width: <?= $progress; ?>%;"
                        aria-valuenow="<?= $progress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-1"><?= $progress; ?>%</h6>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- End Result -->

      <!-- Keterangan -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Keterangan</h5>
          </div>
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-6">
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Tidak Berjalan 🚨</h6>
                  </div>
                  <div class="me-2">
                    <h6 class="mb-0 text-danger">&lt; 30%</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-6">
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Sedang Berjalan 🛠</h6>
                  </div>
                  <div class="me-2">
                    <h6 class="mb-0 text-warning">30% - 69%</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-6">
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Target Tercapai 👌</h6>
                  </div>
                  <div class="me-2">
                    <h6 class="mb-0 text-success">70% - 99%</h6>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-6">
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                  <div class="me-2">
                    <h6 class="mb-0">Melampui Target 🚀</h6>
                  </div>
                  <div class="me-2">
                    <h6 class="mb-0 text-primary">100%</h6>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
