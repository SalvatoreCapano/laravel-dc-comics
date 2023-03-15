import './bootstrap';

import '~resources/scss/app.scss';
import '~resources/scss/header.scss';
import '~resources/scss/_card.scss';
import '~resources/scss/_button.scss';
import '~resources/scss/footer.scss';
import '~resources/scss/home.scss';
import '~resources/scss/actions.scss';
import '~resources/scss/_form.scss';
import '~resources/scss/_modal.scss';

import * as bootstrap from 'bootstrap';

import.meta.glob([
    '../img/**'
]);

const { createApp } = Vue

createApp({
    data() {
      return {
        message: 'Hello Vue!',
        openModal: false,
        idToDelete: null
      }
    },
    methods: {
        
    },
    created(){
      
    }
  }).mount('#app')