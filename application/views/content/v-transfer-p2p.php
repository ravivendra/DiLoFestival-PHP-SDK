						<div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Request Transfer P2P</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="transfer-p2p" method="post" action="<?php echo ($this->input->post('transactionType') == 1) ? site_url('api/transfer-p2p/confirmation') : site_url('api/transfer-p2p/inquiry'); ?>">
                                                <div class="form-group">
                                                    <label for="idTmoney" class="control-label col-lg-2">ID T-Money *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="idTmoney" name="idTmoney" type="text" required="required" value="<?php echo ($this->input->post('idTmoney')) ? ($this->input->post('idTmoney')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="idFusion" class="control-label col-lg-2">ID Wallet *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="idFusion" name="idFusion" type="text" required="required" value="<?php echo ($this->input->post('idFusion')) ? ($this->input->post('idFusion')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="token" class="control-label col-lg-2">Token *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="token" name="token" type="text" required="required" value="<?php echo ($this->input->post('token')) ? ($this->input->post('token')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="terminal" class="control-label col-lg-2">Terminal *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="terminal" name="terminal" type="text" required="required" aria-required="true" value="<?php echo ($this->input->post('terminal')) ? ($this->input->post('terminal')) : FUSION_TERMINAL; ?>" readonly="readonly" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="destAccount" class="control-label col-lg-2">Destination Account *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="destAccount" name="destAccount" type="text" required="required" value="<?php echo ($this->input->post('destAccount')) ? ($this->input->post('destAccount')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount" class="control-label col-lg-2">Amount *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="amount" name="amount" type="text" required="required" value="<?php echo ($this->input->post('amount')) ? ($this->input->post('amount')) : ''; ?>" aria-required="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="transactionType" class="control-label col-lg-2">Transaction Type *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="transactionType" name="transactionType" type="text" required="required" aria-required="true" value="<?php echo ($this->input->post('send') == 'Send' && ($this->input->post('transactionType') == 1 OR $this->input->post('transactionType') == 2)) ? 2 : 1; ?>" readonly="readonly" />
                                                    </div>
                                                </div>
                                                <?php
                                                	if($this->input->post('send') == 'Send' && ($this->input->post('transactionType') == 1 OR $this->input->post('transactionType') == 2)) :
                                                ?>
                                                <div class="form-group">
                                                    <label for="transactionID" class="control-label col-lg-2">Transaction ID *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="transactionID" name="transactionID" type="text" required="required" aria-required="true" value="<?php echo ($this->input->post('transactionID')) ? ($this->input->post('transactionID')) : ''; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="refNo" class="control-label col-lg-2">Reference Code *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="refNo" name="refNo" type="text" required="required" aria-required="true" value="<?php echo ($this->input->post('refNo')) ? ($this->input->post('refNo')) : ''; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin" class="control-label col-lg-2">PIN *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="pin" name="pin" type="password" required="required" maxlength="6" aria-required="true" value="" />
                                                    </div>
                                                </div>
                                                <?php
                                                	endif;
                                                ?>
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
										<h3 class="panel-title">Response Transfer P2P</h3>
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