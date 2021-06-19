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
import cookiePolicy from '../views/cookiePolicy.vue'
import adChoice from '../views/adChoice.vue'
import registerBusinessAccount from '../views/sellers/registerBusinessAccount.vue'
import seller_dashboard from '../views/sellers/seller_dashboard.vue'
import seller_productListing from '../views/sellers/seller_productListing.vue'
import seller_OrderHistory from '../views/sellers/sellers_OrderHistory.vue'
import uploadproductimage from '../views/sellers/uploadproductimage.vue'
import createnewlisting from '../views/sellers/createnewlisting.vue'
import seller_orderdetails from '../views/sellers/seller_orderdetails.vue'
import seller_changepassword from '../views/sellers/seller_changepassword.vue'
import seller_accountsettings from '../views/sellers/seller_accountsettings.vue'
import seller_supportservice from '../views/sellers/seller_supportservice.vue'
import Dashboard from '../views/sellers/seller_dashboard.vue'
import Seller_menu from '../views/sellers/seller_menu.vue'
import Order_process from '../views/sellers/orderprocess.vue'
import money_back_guarantee from '../views/rejee_money_back_guarantee.vue'
import start_selling from '../views/start_selling.vue'

Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Landingpage',
        component: LandingPage,
    },
    {
        path: '/Dashboard',
        name: 'seller_dashboard',
        component: Dashboard,
    },
    {
        path: '/menu',
        name: 'seller_dashboard',
        component: Seller_menu,
    },
    {
        path: '/seller_dashboard',
        name: 'seller_dashboard',
        component: seller_dashboard,
    },
    {
        path: '/Product Listing',
        name: 'seller_productListing',
        component: seller_productListing,
    },
    {
        path: '/Order History',
        name: 'seller_OrderHistory',
        component: seller_OrderHistory,
    },
    {
        path: '/Seller Orderdetails',
        name: 'seller_orderdetails',
        component: seller_orderdetails,
    },
    {
        path: '/Process Order',
        name: 'Order_process',
        component: Order_process,
    },
    {
        path: '/Seller change password',
        name: 'seller_changepassword',
        component: seller_changepassword,
    },
    {
        path: '/Seller account settings',
        name: 'seller_accountsettings',
        component: seller_accountsettings,
    },
    {
        path: '/Seller support service',
        name: 'seller_supportservice',
        component: seller_supportservice,
    },
    {
        path: '/Create New Listing',
        name: 'createnewlisting',
        component: createnewlisting,
    },
    {
        path: '/Upload Product Image',
        name: 'uploadproductimage',
        component: uploadproductimage,
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
        path: '/Cookie Policy',
        name: 'CookiePolicy',
        component: cookiePolicy,
    },
    {
        path: '/Ad Choice',
        name: 'AdChoice',
        component: adChoice,
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
        path: '/Login',
        name: 'userLogin',
        component: userLogin,
    },

    {
        path: '/Register Personal Account',
        name: 'userRegistrationPage',
        component: userRegistrationPage,
    },

    {
        path: '/Register Business Account',
        name: 'registerBusinessAccount',
        component: registerBusinessAccount,
    },
    {
        path: '/Add New Card',
        name: 'addCardPage',
        component: addCardPage,
    },
    {
        path: '/money back guarantee',
        name: 'money back guarantee',
        component: money_back_guarantee,
    },
    {
        path: '/Start selling',
        name: 'start selling',
        component: start_selling,
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