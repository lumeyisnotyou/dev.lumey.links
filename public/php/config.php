<?php

// where to get files from
const ENTRY_FIELD = array('filepond');

$dirup = dirname(__DIR__, 1)

// where to write files to
const TRANSFER_DIR = $dirup . '/tmp';
const UPLOAD_DIR = $dirup . '/uploads';
const VARIANTS_DIR = $dirup . '/variants';

// name to use for the file metadata object
const METADATA_FILENAME = '.metadata';

// this automatically creates the upload and transfer directories, if they're not there already
if (!is_dir(UPLOAD_DIR)) mkdir(UPLOAD_DIR, 0755);
if (!is_dir(TRANSFER_DIR)) mkdir(TRANSFER_DIR, 0755);

// this is optional and only needed if you're doing server side image transforms, if images are transformed on the clients, this can stay commented
// require_once('config_doka.php');
