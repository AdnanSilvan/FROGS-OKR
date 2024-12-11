<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Create New | Objectives & Key Results (OKR) Divisi Operasional FI</h5>
                </div>
                <?php if (validation_errors()): ?>
                    <div class="error"><?php echo validation_errors(); ?></div>
                <?php endif; ?>

                <?php echo form_open('technologi/edit/' . $technologi['id']); ?>
                <div class="card-body">
                    <form>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Objective Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="ri-focus-2-fill ri-20px"></i> 
                                    </span>
                                    <input type="text" name="objective_name" class="form-control" id="basic-icon-default-fullname" value="<?php echo set_value('objective_name', $technologi['objective_name']); ?>"  />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-keyresults">Key Results</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-keyresults2" class="input-group-text">
                                        <i class="ri-clipboard-line ri-20px"></i>
                                    </span>
                                    <input type="text" name="key_results" id="basic-icon-default-keyresults" class="form-control" value="<?php echo set_value('key_results', $technologi['key_results']); ?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-owner">Owner</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-owner2" class="input-group-text">
                                        <i class="ri-user-line ri-20px"></i> 
                                    </span>
                                    <input type="text" name="owner" id="basic-icon-default-owner" class="form-control" value="<?php echo set_value('owner', $technologi['owner']); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-weight">Weight</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-weight2" class="input-group-text">
                                        <i class="ri-equalizer-line ri-20px"></i>
                                    </span>
                                    <input type="text" name="weight" id="basic-icon-default-weight" class="form-control" 
                                    value="<?php
                                        $weight = $technologi['weight'];
                                        echo (strpos($weight, '.00') !== false) ? rtrim(rtrim($weight, '0'), '.') : $weight;
                                        ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-target">Target</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-target2" class="input-group-text">
                                        <i class="ri-crosshair-2-line ri-20px"></i> 
                                    </span>
                                    <input type="text" name="target" id="basic-icon-default-target" class="form-control" 
                                    value="<?php
                                        $target = $technologi['target'];
                                        echo (strpos($target, '.00') !== false) ? rtrim(rtrim($target, '0'), '.') : $target;
                                        ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-actual">Actual</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-actual2" class="input-group-text">
                                        <i class="ri-checkbox-line ri-20px"></i> 
                                    </span>
                                    <input type="text" name="actual" id="basic-icon-default-actual" class="form-control" 
                                    value="<?php
                                        $actual = $technologi['actual'];
                                        echo (strpos($actual, '.00') !== false) ? rtrim(rtrim($actual, '0'), '.') : $actual;
                                        ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-progress">Progress</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-progress2" class="input-group-text">
                                        <i class="ri-bar-chart-line ri-20px"></i> 
                                    </span>
                                    <input type="text" name="progress" id="basic-icon-default-progress" class="form-control" 
                                    value="<?php
                                        $progress = $technologi['progress'];
                                        echo (strpos($progress, '.00') !== false) ? rtrim(rtrim($progress, '0'), '.') : $progress;
                                        ?>" />
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="submit" value="Update" class="btn btn-primary">Create</button>
                            <a href="<?php echo site_url('technologi'); ?>" class="btn btn-secondary">Cancel</a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
