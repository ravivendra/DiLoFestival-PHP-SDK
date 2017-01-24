						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Request FinPay 0211 Reserve</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="finpay0211-reserve" method="post" action="<?php echo site_url('api/finpay0211-reserve/result'); ?>">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label col-lg-2">ID T-Money *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter your T-Money account ID" class="form-control" id="idTmoney" name="idTmoney" type="text" required="required" value="<?php echo ($this->input->post('idTmoney')) ? ($this->input->post('idTmoney')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="idFusion" class="control-label col-lg-2">ID Wallet *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter your T-MONEY wallet ID (Example : +62195112345678)" class="form-control" id="idFusion" name="idFusion" type="text" required="required" value="<?php echo ($this->input->post('idFusion')) ? ($this->input->post('idFusion')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="token" class="control-label col-lg-2">Token *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter generated Token from Sign In API" class="form-control" id="token" name="token" type="text" required="required" value="<?php echo ($this->input->post('token')) ? ($this->input->post('token')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="invoice" class="control-label col-lg-2">Invoice ID *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter your unique Invoice ID (Example : 12345)" class="form-control" id="invoice" name="invoice" type="text" required="required" value="" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount" class="control-label col-lg-2">Amount *</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Enter transaction amount (Example : 10000)" class="form-control" id="amount" name="amount" type="text" required="required" aria-required="true" value="" />
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
										<h3 class="panel-title">Response FinPay 0211 Reserve</h3>
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