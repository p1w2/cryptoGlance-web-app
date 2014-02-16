
<?php require_once("templates/modals/edit_host.php"); ?>

<div id="rig<?=$minerId?>" class="panel panel-primary panel-rig">
    <h1>Mining Rig Stats</h1>
    <div class="panel-heading">
        <button type="button" class="panel-header-button" data-toggle="modal" data-target="#deletePrompt" data-backdrop="static" aria-hidden="true"><i class="icon icon-circledelete"></i></button> 
        <button type="button" class="panel-header-button toggle-panel-body"><i class="icon icon-chevron-up"></i></button> 
        <h2 class="panel-title"><i class="icon icon-server"></i> <span class="value"><?=(empty($miner['name'])) ? $miner['host'] : $miner['name']?></span></h2>
    </div>
    <ul class="nav nav-pills">
    
    </ul>
    
    <div class="tab-content">
        <div class="tab-pane fade in active" id="rig<?=$minerId?>-summary">
            <div class="panel-body panel-body-stats">
                <div class="panel-body-summary">
                
                </div>
                <div class="table-summary table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                            <th></th>
                            <th>GPU #</th>
                            <th>Temperature</th>
                            <th>Fan Speed</th>
                            <th>Fan %</th>
                            <th>Hashrate (5s)</th>
                            <th>Utility</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div><!-- / .panel-body -->
        </div>     
    </div>
    
    <div class="panel-footer">
        <div class="text-right">
            <button type="button" class="btn btn-default btn-updater" data-type="miner" data-attr="<?=$minerId?>"><i class="icon icon-refresh"></i> Update Now</button>
            <!--         <button type="button" class="btn btn-default" data-toggle="modal" data-target="#editRig" data-backdrop="static" data-id="1"><i class="icon icon-edit"></i> Edit Rig</button>-->
            <!--         <button type="button" class="btn btn-default" data-toggle="modal" data-target="#switchPool" data-backdrop="static" data-id="1"><i class="icon icon-refreshalt"></i> Switch Pool</button>-->
            <!-- <button type="button" class="btn btn-default"><i class="icon icon-statistics"></i> View All Stats</button> -->
        </div>
    </div>
</div>