import Vue from 'vue'
import VueRouter from 'vue-router'
import LandingPage from '../views/buyers/landingPage.vue'
import UserOrderPage from '../views/buyers/userOrderPage.vue'
import orderDetailsPage from '../views/buyers/orderDetailsPage.vue'
import wishlist from '../views/buyers/wishlist.vue'
import userAccountDetailPage from '../views/buyers/userAccountDetailPage.vue'
import userAddressBook from '../views/buyers/userAddressBook.vue'
import changeUserPasswordPage from '../views/buyers/changeUserPasswordPage.vue'
import paymentMethodPage from '../views/buyers/paymentMethodPage.vue'
import editAddressPage from '../views/buyers/editAddressPage.vue'
import addUserAddressPage from '../views/buyers/addUserAddressPage.vue'
import addCardPage from '../views/buyers/addCardPage.vue'
import addPaymentMethod from '../views/buyers/addPaymentMethod.vue'
import userRegistrationPage from '../views/buyers/userRegistrationPage.vue'
import userLogin from '../views/buyers/userLogin.vue'
import userCategoriePage from '../views/buyers/userCategoriePage.vue'
import productPage from '../views/buyers/productPage.vue'
import productDetails from '../views/buyers/productDetails.vue'
import checkOutPage from '../views/buyers/checkOutPage.vue'
import productcart from '../views/buyers/productCart.vue'
import checkOutPageAddress from '../views/buyers/checkOutPageAddress.vue'
import userAgreementPage from '../views/userAgreementPage.vue'
import userPrivacy from '../views/userPrivacy.vue'

Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Landingpage',
        component: LandingPage,
    },
    {
        path: '/Register buyers',
        name: 'userRegistrationPage',
        component: userRegistrationPage,
    },
    {
        path: '/User Agreement',
        name: 'UserAgreementPage',
        component: userAgreementPage,
    },
    {
        path: '/User Privacy',
        name: 'UserPrivacy',
        component: userPrivacy,
    },
    {
        path: '/Categorie Page',
        name: 'UserCategoriePage',
        component: userCategoriePage,
    },
    {
        path: '/Login buyers',
        name: 'userAccountDetailPage',
        component: userLogin,
    },
    {
        path: '/Order Details',
        name: 'orderDetailsPage',
        component: orderDetailsPage,
    },
    {
        path: '/Categorie Page',
        name: 'UserCategoriePage',
        component: userCategoriePage,
    },
    {
        path: '/orderpage',
        name: 'Orderpage',
        component: UserOrderPage,
    },
    {
        path: '/Product Page',
        name: 'ProductPage',
        component: productPage,
    },
    {
        path: '/Product Detail',
        name: 'ProductDetail',
        component: productDetails,
    },
    {
        path: '/Product Cart',
        name: 'ProductCart',
        component: productcart,
    },
    {
        path: '/Checkout',
        name: 'CheckOut',
        component: checkOutPage,
    },
    {
        path: '/Checkout Address',
        name: 'CheckOutAddress',
        component: checkOutPageAddress,
    },
    {
        path: '/Wish list',
        name: 'wishlist',
        component: wishlist,
    },
    {
        path: '/User Detail',
        name: 'userAccountDetailPage',
        component: userAccountDetailPage,
    },
    {
        path: '/Address Book',
        name: 'userAddressBook',
        component: userAddressBook,
    },
    {
        path: '/Add New Address',
        name: 'addUserAddressPage',
        component: addUserAddressPage,
    },
    {
        path: '/Edit Address',
        name: 'editAddressPage',
        component: editAddressPage,
    },
    {
        path: '/Change Password',
        name: 'changeUserPasswordPage',
        component: changeUserPasswordPage,
    },

    {
        path: '/Payment Method',
        name: 'paymentMethodPage',
        component: paymentMethodPage,
    },

    {
        path: '/ADD Payment Method',
        name: 'addPaymentMethod',
        component: addPaymentMethod,
    },

    {
        path: '/Add New Card',
        name: 'addCardPage',
        component: addCardPage,
    },

    {
        path: '/about',
        name: 'About',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/About.vue')
    }
]

const router = new VueRouter({
    routes
})

export default router