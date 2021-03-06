import Vue from 'vue'
import VueRouter from 'vue-router'

import LandingPage from '../views/buyers/landingPage.vue'
import orderDetailsPage from '../views/buyers/orderDetailsPage.vue'
import changeUserPasswordPage from '../views/buyers/changeUserPasswordPage.vue'
import paymentMethodPage from '../views/buyers/paymentMethodPage.vue'
import editAddressPage from '../views/buyers/editAddressPage.vue'
import addUserAddressPage from '../views/buyers/addUserAddressPage.vue'
import userRegistrationPage from '../views/buyers/userRegistrationPage.vue'
import userLogin from '../views/buyers/userLogin.vue'
import userCategoriePage from '../views/buyers/userCategoriePage.vue'
import productPage from '../views/buyers/productPage.vue'
import seller from '../views/buyers/seller.vue'
import propertyPage from '../views/buyers/propertyPage.vue'
import vehiclePage from '../views/buyers/vehiclePage.vue'
import vehicles from '../views/buyers/vehicles.vue'
import properties from '../views/buyers/properties.vue'
import productDetails from '../views/buyers/productDetails.vue'
import productDetails_1 from '../views/buyers/productDetails_1.vue'
import checkOutPage from '../views/buyers/checkOutPage.vue'
import productcart from '../views/buyers/productCart.vue'
import checkOutPageAddress from '../views/buyers/checkOutPageAddress.vue'
import checkOutPagepayment from '../views/buyers/checkoutPagePayment.vue'
import Mymessage from '../views/buyers/message.vue'
import Mymessage_open from '../views/buyers/message_open.vue'
import sent_message from '../views/buyers/sent_message.vue'

import search from '../views/buyers/search.vue'
import searching from '../views/buyers/searching.vue'
import watching from '../views/buyers/watching.vue'
import purchase_history from '../views/buyers/purchase_history.vue'
import signin_sec from '../views/buyers/signin_sec.vue'
import paymentgate from '../views/buyers/paymentgate.vue'
import edit_login_name from '../views/buyers/edit_login_name.vue'
import edit_login_email from '../views/buyers/edit_login_email.vue'
import edit_login_mobilenumber from '../views/buyers/edit_login_mobilenumber.vue'
import paymentsuccess from '../views/buyers/paymentsuccess.vue'
import checkoutsummary from '../views/buyers/checkoutsummary.vue'
import regaddresscreate from '../views/buyers/regaddresscreate.vue'



import Account from '../views/buyers/account.vue'
import payment_setting from '../views/buyers/payment_setting.vue'
import buyeraddress_setting from '../views/buyers/address_setting.vue'
import changePasswordPage from '../views/buyers/changePasswordPage.vue'


import registerBusinessAccount from '../views/sellers/registerBusinessAccount.vue'
import seller_changepassword from '../views/sellers/seller_changepassword.vue'
import Dashboard from '../views/sellers/seller_dashboard.vue'
import orders_page from '../views/sellers/orders_page.vue'
import listings_page from '../views/sellers/listings.vue'
import create_listing from '../views/sellers/create_listing.vue'
import property_listing from '../views/sellers/Property_listing.vue'
import vehicle_listing from '../views/sellers/vehicle_listing.vue'
import add_category from '../views/sellers/add_category.vue'
import add_category3 from '../views/sellers/add_category3.vue'
import add_subcategory from '../views/sellers/add_subcategory.vue'
import add_subcategory3 from '../views/sellers/add_subcategory3.vue'
import Order_process from '../views/sellers/orderprocess.vue'

import store_info from '../views/sellers/store_info.vue'
import signin_security from '../views/sellers/signin_security.vue'
import address_setting from '../views/sellers/address_setting.vue'
import payout_settings from '../views/sellers/payout_settings.vue'
import payout_add from '../views/sellers/payout_add.vue'

import money_back_guarantee from '../views/rejee_money_back_guarantee.vue'
import start_selling from '../views/start_selling.vue'
import start_selling_here from '../views/start_selling_here.vue'
import creating_listing from '../views/creating_listing.vue'
import sellers_can_cancel_order from '../views/sellers_can_cancel_order.vue'
import resolving_unpaid_item_with_buyer from '../views/resolving_unpaid_item_with_buyer.vue'
import managing_returns_missing_items_and_refunds_for_sellers from '../views/managing_returns_missing_items_and_refunds_for_sellers.vue'
import userAgreementPage from '../views/userAgreementPage.vue'
import userPrivacy from '../views/userPrivacy.vue'
import cookiePolicy from '../views/cookiePolicy.vue'
import adChoice from '../views/adChoice.vue'
import resolution_center from '../views/resolution_center.vue'
import resolut_Center from '../views/resolut_Center.vue'
import cancel_order from '../views/cancel_order.vue'
import PasswordRecovery from '../views/password_recovery.vue'
import Selling from '../views/selling.vue'
import return_missing_item from '../views/return_missing_item.vue'
import resolving_unpaid_item from '../views/resolving_unpaid_item.vue'
import resolving_with_seller from '../views/resolving_with_seller.vue'
import Subscription from '../views/subscription.vue'
import Subscription_select from '../views/subscription_select.vue'
import subscription_pay from '../views/sellers/subscription_pay.vue'
import Signout from '../views/signout.vue'


Vue.use(VueRouter);

const routes = [{
        path: '/',
        name: 'Landingpage',
        component: LandingPage,
    },
    {
        path: '/Overview',
        name: 'seller_dashboard',
        component: Dashboard,
    },
    {
        path: '/editloginname',
        name: 'editloginname',
        component: edit_login_name,
    },
    {
        path: '/subscriptionpay',
        name: 'subscriptionpay',
        component: subscription_pay,
    },

    {
        path: '/editloginemail',
        name: 'editloginemail',
        component: edit_login_email,
    },
    {
        path: '/editloginnumber',
        name: 'editloginnumber',
        component: edit_login_mobilenumber,
    },
    {
        path: '/addcard',
        name: 'addcard',
        component: paymentgate,
    },
    {
        path: '/Orders',
        name: 'Orders Page',
        component: orders_page,
    },

    {
        path: '/editpassword',
        name: 'editpassword',
        component: changePasswordPage,
    },
    {
        path: '/paymentsuccess',
        name: 'paymentsuccess',
        component: paymentsuccess,
    },
    {
        path: '/checkoutsummary',
        name: 'checkoutsummary',
        component: checkoutsummary,
    },
    {
        path: '/listings',
        name: 'listings',
        component: listings_page,
    },
    {
        path: '/newlisting',
        name: 'newlisting',
        component: create_listing,
    },
    {
        path: '/propertylisting',
        name: 'propertylisting',
        component: property_listing,
    },

    {
        path: '/vehiclelisting',
        name: 'vehiclelisting',
        component: vehicle_listing,
    },
   {
        path: '/propertyPage/:pname',
        name: 'propertyPage',
        component: propertyPage,
        props: true,
    },
    {
         path: '/vehiclepage/:pname',
         name: 'vehiclepage',
         component: vehiclePage,
         props: true,
     },
     {
         path: '/vehicles',
         name: 'vehicles',
         component: vehicles,
     },
     {
         path: '/properties',
         name: 'properties',
         component: properties,
     },
    {
        path: '/processorder',
        name: 'processorder',
        component: Order_process,
    },
    {
        path: '/Seller change password',
        name: 'seller_changepassword',
        component: seller_changepassword,
    },
    {
        path: '/paymentsetting',
        name: 'paymentsetting',
        component: payment_setting,
    },

    {
        path: '/addpayout',
        name: 'addpayout',
        component: payout_add,
    },

    {
        path: '/buyeraddresssetting',
        name: 'buyeraddresssetting',
        component: buyeraddress_setting,
    },

    {
        path: '/buyersigninsecsetting',
        name: 'buyersigninsecsetting',
        component: signin_sec,
    },
    
    {
        path: '/purchasehistory',
        name: 'purchasehistory',
        component: purchase_history,
    }, {
        path: '/watchingpage',
        name: 'watchingpage',
        component: watching,
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
        path: '/Login',
        name: 'Login',
        component: userLogin,
    },
    {
        path: '/orderdetails',
        name: 'orderdetails',
        component: orderDetailsPage,
    },
    {
        path: '/storeinfo',
        name: 'storeinfo',
        component: store_info,
    },
    {
        path: '/siginsec',
        name: 'siginsec',
        component: signin_security,
    },
    {
        path: '/addresssetting',
        name: 'addresssetting',
        component: address_setting,
    },
    {
        path: '/managepayout',
        name: 'managepayout',
        component: payout_settings,
    },

    {
        path: '/CategoriePage/:catname',
        name: 'UserCategoriePage',
        component: userCategoriePage,
    },
    
    {
        path: '/ProductPage/:subcatname',
        name: 'ProductPage',
        component: productPage,
    },
    {
        path: '/ProductPage',
        name: 'ProductPage',
        component: productPage,
    },
    {
        path: '/seller/:username',
        name: 'seller',
        component: seller,
    },
    {
        path: '/productDetail',
        name: 'ProductDetail',
        component: productDetails,
    },
    {
        path: '/productDetails_1/:pname',
        name: 'productDetails_1',
        component: productDetails_1,
    },
    {
        path: '/ViewCart',
        name: 'View Cart',
        component: productcart,
    },
    {
        path: '/Checkout',
        name: 'CheckOut',
        component: checkOutPage,
    },
    {
        path: '/checkoutpayment',
        name: 'CheckOutPayment',
        component: checkOutPagepayment,
    },
    {
        path: '/checkoutAddress',
        name: 'CheckOutAddress',
        component: checkOutPageAddress,
    },
    {
        path: '/addnewaddress',
        name: 'addnewaddress',
        component: addUserAddressPage,
    },
    {
        path: '/editaddress/:pid',
        name: 'editaddress',
        component: editAddressPage,
        props: true,
    },
    {
        path: '/changepassword',
        name: 'changepassword',
        component: changeUserPasswordPage,
    },
    {
        path: '/passwordrecovery',
        name: 'passwordrecovery',
        component: PasswordRecovery,
    },

    {
        path: '/paymentset',
        name: 'paymentset',
        component: paymentMethodPage,
    },

    {
        path: '/Login',
        name: 'Login',
        component: userLogin,
    },

    {
        path: '/register',
        name: 'register',
        component: userRegistrationPage,
    },
    {
        path: '/regaddress',
        name: 'regaddress',
        component: regaddresscreate,
    },

    {
        path: '/registertosell',
        name: 'registertosell',
        component: registerBusinessAccount,
    },
    {
        path: '/money back guarantee',
        name: 'money back guarantee',
        component: money_back_guarantee,
    },
    {
        path: '/Resolving unpaid item',
        name: 'Resolving unpaid item',
        component: resolving_unpaid_item,
    },
    {
        path: '/Resolving with seller',
        name: 'Resolving with seller',
        component: resolving_with_seller,
    },
    {
        path: '/Resolving unpaid item with buyer',
        name: 'Resolving unpaid item with buyer',
        component: resolving_unpaid_item_with_buyer,
    },
    {
        path: '/managing returns missing items and refunds for sellers',
        name: 'Managing returns missing items and refunds for sellers',
        component: managing_returns_missing_items_and_refunds_for_sellers,
    },
    {
        path: '/cancel order',
        name: 'cancel order',
        component: cancel_order,
    },
    {
        path: '/Selling',
        name: 'Selling',
        component: Selling,
    },
    {
        path: '/Return missing item',
        name: 'Return missing item',
        component: return_missing_item,
    },
    {
        path: '/Start selling',
        name: 'Start selling',
        component: start_selling,
    },
    {
        path: '/Start selling guide',
        name: 'Start selling guide',
        component: start_selling_here,
    },
    {
        path: '/Creating listing',
        name: 'Creating listing',
        component: creating_listing,
    },
    {
        path: '/addcategory',
        name: 'addcategory',
        component: add_category,
    },
    {
        path: '/addcategory3',
        name: 'addcategory3',
        component: add_category3,
    },
    {
        path: '/addsubcategory',
        name: 'addsubcategory',
        component: add_subcategory,
    },
    {
        path: '/addsubcategory3/:cid',
        name: 'addsubcategory3',
        component: add_subcategory3,
        props: true,
    },
    {
        path: '/Sellers can cancel order',
        name: 'Sellers can cancel order',
        component: sellers_can_cancel_order,
    },
    {
        path: '/search',
        name: 'search',
        component: search,
    },
    {
        path: '/searching',
        name: 'searching',
        component: searching,
    },
    {
        path: '/My Message',
        name: 'My message',
        component: Mymessage,
    },
    {
        path: '/messageopen/:mid',
        name: 'messageopen',
        component: Mymessage_open,
        props: true,
    },
    {
        path: '/sentmessage',
        name: 'sentmessage',
        component: sent_message,
    },
    {
        path: '/account',
        name: 'account',
        component: Account,
    },
    {
        path: '/help',
        name: 'help',
        component: resolution_center,
    },
    {
        path: '/resolutioncenter',
        name: 'resolutioncenter',
        component: resolut_Center,

    },
    {
        path: '/Subscription',
        name: 'Subscription',
        component: Subscription,
    },
    {
        path: '/Subscriptions',
        name: 'Subscriptions',
        component: Subscription_select,
    },
    {
        path: '/Signout',
        name: 'Signout',
        component: Signout,
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