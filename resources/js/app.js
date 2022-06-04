require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
<<<<<<< HEAD
import axios from 'axios';

=======
>>>>>>> ca4215e859120f21679a4173389ca4e7143d5a57
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });


//API Chat
const nickname = document.getElementById('nickname');
const message = document.getElementById('message');
const submitButton = document.getElementById('submitButton');
const chatDiv = document.getElementById('chat');

submitButton.addEventListener('click', ()=>{
    axios.post('/chat', {
        nickname: nickname.value,
        message: message.value
    });
});

window.Echo.channel('chat')
    .listen('.chat-message', (event) => {
        chatDiv.innerHTML += `<div class="other break-all mt-2  ml-5 rounded-bl-none float-none bg-gray-300 mr-auto rounded-2xl p-2">
        ${event.message} par <em>${event.nickname}</em>
        </div>`
    });