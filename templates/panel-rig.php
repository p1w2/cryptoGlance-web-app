<div id="rig-<?php echo $minerId?>" class="panel panel-primary panel-rig" data-type="rig" data-id="<?php echo $minerId?>">
    <h1><?php echo (empty($miner['name'])) ? $miner['host'] : $miner['name']?></h1>

    <div class="panel-heading">
        <button type="button" class="panel-header-button btn-delete" data-toggle="modal" data-target="#deletePrompt" data-backdrop="static" aria-hidden="true"><i class="icon icon-circledelete"></i></button>
        <button type="button" class="panel-header-button btn-manage-rig" data-type="rig" data-toggle="modal" data-target="#manageRig" data-attr="<?php echo $minerId?>" style="display: none;"><i class="icon icon-managedhosting"></i> Manage</button>
        <!-- <a href="#goDirectlyToHelpPageAnchor"><button type="button" class="panel-header-button"><i class="icon icon-question-sign"></i></button></a>
        <button type="button" class="sort-down panel-header-button toggle-panel-body"><i class="icon icon-chevron-down"></i></button>
        <button type="button" class="sort-up panel-header-button toggle-panel-body"><i class="icon icon-chevron-up"></i></button>
        <button type="button" class="panel-header-button toggle-panel-body"><i class="icon icon-chevron-up"></i></button>  -->
        <h2 class="panel-title"><i class="icon icon-pixelpickaxe"></i> Rig Stats</h2>
    </div>

    <div class="panel-content">
        <ul class="nav nav-pills"></ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="rig-<?php echo $minerId?>-summary">
                <div class="panel-body panel-body-stats">
                    <div class="panel-body-summary"><img src="images/ajax-loader.gif" alt="loading" /></div>
                    <div class="table-summary table-responsive">
                        <table class="table table-hover table-striped" style="display: none;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>DEV #</th>
                                    <th>Temperature</th>
                                    <th>Hashrate 5s</th>
                                    <th>Accepted</th>
                                    <th>Rejected</th>
                                    <th>Utility</th>
                                    <th>HW Errors</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div><!-- / .panel-body -->
            </div>
        </div>
    <!--
        <div class="panel-footer">
            <div class="text-right">

            <button type="button" class="btn btn-default btn-updater" data-type="rig" data-attr="<?php echo $minerId?>"><i class="icon icon-refresh"></i> Update Now</button>
            <button type="button" class="btn btn-default"><i class="icon icon-statistics"></i> View All Stats</button>
            </div>
        </div>
    -->
    </div>

</div>