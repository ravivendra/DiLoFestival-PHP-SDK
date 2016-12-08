						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Request IPG Get Ticket</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="ipg-get-ticket" method="post" action="<?php echo site_url('api/ipg-get-ticket/result'); ?>">
                                                <div class="form-group">
                                                    <label for="merchant_id" class="control-label col-lg-2">Merchant ID *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="merchant_id" name="merchant_id" type="text" required="required" value="195100001410" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="invoice" class="control-label col-lg-2">Invoice ID *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="invoice" name="invoice" type="text" required="required" value="" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount" class="control-label col-lg-2">Amount *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="amount" name="amount" type="text" required="required" aria-required="true" value="100" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="redirect_url" class="control-label col-lg-2">Redirect URL *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="redirect_url" name="redirect_url" type="text" required="required" aria-required="true" value="http://www.indihome.co.id/" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="payment_notif_url" class="control-label col-lg-2">Notification URL *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="payment_notif_url" name="payment_notif_url" type="text" required="required" aria-required="true" value="http://www.indihome.co.id/" />
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
										<h3 class="panel-title">Response IPG Get Ticket</h3>
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