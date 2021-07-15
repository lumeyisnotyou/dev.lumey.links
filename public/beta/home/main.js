import { create } from 'filepond';
import 'filepond/dist/filepond.css';

// Get a file input reference
const input = document.querySelector('input[type="file"]');

// Create a FilePond instance
create(input, {
    storeAsFile: true,
});
