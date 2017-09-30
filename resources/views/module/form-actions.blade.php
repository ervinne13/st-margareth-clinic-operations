<div class="pull-right m-t-2">
    @if($routeActionName == "edit")
    <button id="action-update-close" type="button" class="action-button btn-sm btn btn-success">Update</button>
    @elseif($routeActionName == "create")
    <button id="action-create-close" type="button" class="action-button btn-sm btn btn-success">Save</button>
    <button id="action-create-new" type="button" class="action-button btn-sm btn btn-primary">Save & New</button>
    @endif

    @if (isset($documentStatus) && $documentStatus == "Open" && $moduleCode && Auth::user()->getModuleAcces($moduleCode) == "MANAGER")
    @if($routeActionName == "edit")
    <button id="action-update-post" type="button" class="action-button btn-sm btn btn-brilliant-rose">Update & Post</button>
    @elseif($routeActionName == "create")
    <button id="action-create-post" type="button" class="action-button btn-sm btn btn-brilliant-rose">Create & Post</button>
    @endif
    @endif

    <button id="action-close" type="button" class="action-button btn-sm btn bg-grey">Close</button>
</div>