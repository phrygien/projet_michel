import AllPosts from './components/AllPost.vue';
import AddPost from './components/AddPost.vue';
import EditPost from './components/EditPost.vue';

import AllAnnees from './components/AllAnnee.vue';
import AddAnnee from './components/AddAnnee.vue';
import EditAnnee from './components/EditAnnee.vue';

import AllMentions from './components/AllMention.vue';
import AddMention from './components/AddMention.vue';
import EditMention from './components/EditMention.vue';
  
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllMentions
    },
    {
        name: 'add',
        path: '/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    },
    {
        name: 'annees',
        path: '/annees',
        component: AllAnnees
    },
    {
        name: 'addAnnee',
        path: '/addAnnee',
        component: AddAnnee
    },
    {
        name: 'editAnnee',
        path: '/editAnnee/:id',
        component: EditAnnee
    },

    {
        name: 'mentions',
        path: '/mentions',
        component: AllMentions
    },
    {
        name: 'addMention',
        path: '/addMention',
        component: AddMention
    },
    {
        name: 'editMention',
        path: '/editMention/:id',
        component: EditMention
    }
];