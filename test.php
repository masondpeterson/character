                <div class="col-sm-12">
                  <?php
                  $monDetails = $db->get_monDetails();
                  foreach($monDetails as $md){
                    ?>
                    <div class="form-group">
                      <label class="control-label col-sm-3"><?=$md->column_name?></label>
                      <div>
                        <input type="text" class="form-control" name="<?$md->column_name ?>">
                      </div>
                    </div>
                    <?php
                  }
                  ?>
                </div>