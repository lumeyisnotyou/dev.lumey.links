// Turn input element into a pond
/*$('.my-pond').filepond();

// Turn input element into a pond with configuration options
$('.my-pond').filepond({
    allowMultiple: true,
});

// Set allowMultiple property to true
$('.my-pond').filepond('allowMultiple', false);

// Listen for addfile event
$('.my-pond').on('FilePond:addfile', function (e) {
    console.log('file added event', e);
});

// Manually add a file using the addfile method
$('.my-pond')
    .filepond('addFile', 'index.html')
    .then(function (file) {
        console.log('file added', file);
    });
*/
$.fn.filepond.registerPlugin(FilePondPluginFileValidateSize);

$.fn.filepond.setDefaults({
    maxFileSize: '150MB',
});

import { create } from 'filepond';
import 'filepond/dist/filepond.css';

// Get a file input reference
const input = document.querySelector('input[type="file"]');

// Create a FilePond instance
create(input, {
    storeAsFile: true,
});
