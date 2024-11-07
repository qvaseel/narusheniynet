import './bootstrap';
import 'flowbite';
import IMask from 'imask';

IMask(
    document.getElementById('tel'),
    {
        mask: '+{7}(000)000-00-00'
    }
)

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
