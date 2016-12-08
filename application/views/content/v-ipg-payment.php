						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Request IPG Payment</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="ipg-get-ticket" method="post" action="<?php echo site_url('api/ipg-payment/result'); ?>">
                                                <div class="form-group">
                                                    <label for="ticketID" class="control-label col-lg-2">Ticket ID *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="ticketID" name="ticketID" type="text" required="required" value="" aria-required="true" />
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
										<h3 class="panel-title">Response IPG Payment</h3>
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