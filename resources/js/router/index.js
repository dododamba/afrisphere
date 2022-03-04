import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home';
import Contact from '../views/Contact';
import About from '../views/About'
import Realisation from '../views/Realisation'
import Login from '../views/Login'
import Blog from '../views/Blog'
import Career from '../views/Career'


import Dashboard from '../views/backend/Dashboard'

import ServiceFormation from '../views/ServiceFormation'
import ServiceDev from '../views/ServiceDev'
import ServiceConseil from '../views/ServiceConseil'


import Logs from '../views/backend/logs/Index'

import User from '../views/backend/users/Index'
import UserCreate from '../views/backend/users/Create'

Vue.use(VueRouter);

const router = new VueRouter({
    routes : [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {
                requiresAuth: false, 
                hideForAuth: false,
            }
        },
        {
            path: '/about',
            name: 'about',
            component: About,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/careers',
            name: 'careers',
            component: Career,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/realisations',
            name: 'realisations',
            component: Realisation,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/services-developpents',
            name: 'servicesdevemoppents',
            component: ServiceDev,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/serices-formations',
            name: 'sericesformations',
            component: ServiceFormation,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/services-etudes-conseils',
            name: 'servicesetudesconseils',
            component: ServiceConseil,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
   
       

        {
            path: '/users/',
            name: 'users',
            component: User,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

        {
            path: '/users-create',
            name: 'userCreate',
            component: UserCreate,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

      
        {
            path: '/logs',
            name: 'logs',
            component: Logs,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
       
    ]
});


export default router;
