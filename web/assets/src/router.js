/**
 * Created by jenwi on 30-Oct-18.
 */

import Vue from 'vue'
import Router from 'vue-router'

import Music from './components/Music.vue'
import About from './components/About.vue'

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes : [
        {path:'/home/',component : Music},
        {path:'/home/about',component : About},
    ]
})
