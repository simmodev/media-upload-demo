require('./bootstrap');

import { createApp } from 'vue';

import { UploadMedia, UpdateMedia } from 'vue-media-upload';

let app=createApp({})

app.component('upload-media' , UploadMedia);
app.component('update-media' , UpdateMedia);

app.mount("#app")
