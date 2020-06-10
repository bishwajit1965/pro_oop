<?php
// if (isset($_POST[])) {
//     # code...
// }
if (isset($_GET['inserted']) && $_GET['inserted'] == 1) {
    echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESSFUL!</strong> Data is uploaded successfully!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if (isset($_GET['inserted']) && $_GET['inserted'] == 0) {
    echo
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>SUCCESSFUL!</strong> Data is not uploaded successfully!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if (isset($_GET['deleted']) && $_GET['deleted'] == 1) {
    echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESSFUL!</strong> Data is deleted successfully!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if (isset($_GET['deleted']) && $_GET['deleted'] == 0) {
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>SORRY!</strong> Encountered problem while deleting!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if (isset($_GET['updated']) && $_GET['updated'] == 1) {
    echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!</strong> Data is updated successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if (isset($_GET['updated']) && $_GET['updated'] == 0) {
    echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>SORRY!</strong> Data is not updated successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
