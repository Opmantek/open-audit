
        <!-- modal license start -->
        <div class="modal" id="myModalLicense" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_header">&nbsp;</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p id="modal_text">
                        </p>
                        <br />
                        <?php if ($license === 'free') { ?>
                            <h4>Upgrade to Professional or Enterprise today.</h4>
                            <br />
                        <?php } else if ($this->config->config['oae_product'] === 'Open-AudIT Community') { ?>
                            <h4>Activate your Free License or upgrade to Professional or Enterprise today.</h4>
                            <br />
                        <?php } ?>
                        <br />
                        <table class="table" id="feature_table">
                            <thead>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><a class="btn btn-light" target="_blank" href="<?php echo $this->config->config['oae_url']; ?>/../opLicense"><?php echo __('Restore my Licenses') ?></a><br />&nbsp;</td>

                                    <td class="text-center"><a id="com_price_button" class="btn btn-light" href="<?php echo $this->config->config['oa_web_index'] ?>/index.php"><?php echo __('Get Started') ?></a><br />&nbsp;<span id="com_price_text"></span></td>

                                    <?php if ($license === 'none' or $license === 'community') { ?>
                                    <td class="text-center <?php echo $free_style ?>"><a id="fre_price_button" class="btn btn-success" style="color:white;" href="<?php echo $this->config->config['oae_url']; ?>/license_free"><?php echo __('Activate') ?></a><br />&nbsp;<span id="fre_price_text"></span></td>
                                    <?php } else if ($license === 'free') { ?>
                                    <td class="text-center <?php echo $free_style ?>"><a id="fre_price_button" class="btn btn-primary" style="color:white;" href="<?php echo $this->config->config['oae_url']; ?>/../opLicense"><?php echo __('Deactivate') ?></a><br />&nbsp;<span id="fre_price_text"></span></td>
                                    <?php } else { ?>
                                    <td class="text-center <?php $free_style ?>"><a id="fre_price_button" class="btn btn-light" href="<?php echo $this->config->config['oae_url']; ?>/license_free"><?php echo __('Activate') ?></a><br />&nbsp;<span id="fre_price_text"></span></td>
                                    <?php } ?>

                                    <?php if ($license === 'community' or $license === 'none' or $license === 'free') { ?>
                                    <td class="text-center"><a id="pro_price_button" class="btn btn-success" style="color:white;" href="#"><?php __('Upgrade') ?></a><br /><span id="pro_price_text"></span></td>
                                    <?php } else if ($license === 'professional') { ?>
                                    <td class="text-center" id="pro_price"><a id="pro_price_button" class="btn btn-primary" style="color:white;" href="#"><?php __('Buy More') ?></a><br /><span id="pro_price_text"></span></td>
                                    <?php } else { ?>
                                    <td class="text-center" id="pro_price"><a id="pro_price_button" class="btn btn-light" role="button" href="#">Buy</a><br /><span id="pro_price_text"></span></td>
                                    <?php } ?>

                                    <?php if ($license === 'community' or $license === 'professional' or $license === 'none' or $license === 'free') { ?>
                                    <td class="text-center"><a id="ent_price_button" class="btn btn-success" style="color:white;" href="#"><?php echo __('Upgrade') ?></a><br /><span id="ent_price_text"></span></td>
                                    <?php } else { ?>
                                    <td class="text-center" id="ent_price"><a id="ent_price_button" class="btn btn-primary" style="color:white;" href="#"><?php echo __('Buy More') ?></a><br /><span id="ent_price_text"></span></td>
                                    <?php } ?>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>