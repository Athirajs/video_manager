  
import Home from './components/Home';
import List from './components/List';

export default{
    mode: 'history',

    routes: [
        
        {
            path: '/',
            component: Home,
            name: 'Home'
           
        },
        {
            path: '/list',
            component: List,
            name: 'List'
            
        },
    ]
}