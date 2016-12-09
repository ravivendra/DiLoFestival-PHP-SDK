						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Request Sign In</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="sign-in" method="post" action="<?php echo site_url('api/sign-in/result'); ?>">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label col-lg-2">Email *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter your email address" class="form-control" id="userName" name="userName" type="text" required="required" value="<?php echo ($this->input->post('userName')) ? ($this->input->post('userName')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="control-label col-lg-2">Password *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter your password" class="form-control" id="password" name="password" type="password" required="required" value="<?php echo ($this->input->post('password')) ? ($this->input->post('password')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="terminal" class="control-label col-lg-2">Terminal *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Unique Terminal ID from T-MONEY system" class="form-control" id="terminal" name="terminal" type="text" required="required" aria-required="true" value="<?php echo ($this->input->post('terminal')) ? ($this->input->post('terminal')) : FUSION_TERMINAL; ?>" readonly="readonly" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <input name="send" class="btn btn-danger" type="submit" style="min-width: 100px;" value="Send" />
														<input name="reset" class="btn btn-default" type="reset" style="min-width: 100px;" value="Reset" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- .form -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->

                        </div> <!-- End row -->
                        <?php
                        	if(isset($response)) :
                        ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Response Sign In</h3>
									</div>
									<div class="panel-body code-edit-wrap">
										<textarea id="code" name="code"><?php echo @ json_pretty_print($response); ?></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- End row -->
						<?php
							endif;
						?>