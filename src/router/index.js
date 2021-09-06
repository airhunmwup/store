import Vue from 'vue'
import VueRouter from 'vue-router'

import LandingPage from '../views/buyers/landingPage.vue'
import UserOrderPage from '../views/buyers/userOrderPage.vue'
import orderDetailsPage from '../views/buyers/orderDetailsPage.vue'
import userAccountDetailPage from '../views/buyers/userAccountDetailPage.vue'
import changeUserPasswordPage from '../views/buyers/changeUserPasswordPage.vue'
import paymentMethodPage from '../views/buyers/paymentMethodPage.vue'
import editAddressPage from '../views/buyers/editAddressPage.vue'
import addUserAddressPage from '../views/buyers/addUserAddressPage.vue'
import userRegistrationPage from '../views/buyers/userRegistrationPage.vue'
import userLogin from '../views/buyers/userLogin.vue'
import userCategoriePage from '../views/buyers/userCategoriePage.vue'
import productPage from '../views/buyers/productPage.vue'
import productDetails from '../views/buyers/productDetails.vue'
import checkOutPage from '../views/buyers/checkOutPage.vue'
import productcart from '../views/buyers/productCart.vue'
import checkOutPageAddress from '../views/buyers/checkOutPageAddress.vue'
import checkOutPagepayment from '../views/buyers/checkoutPagePayment.vue'
import Mymessage from '../views/buyers/message.vue'
import Mymessage_open from '../views/buyers/message_open.vue'
import sent_message from '../views/buyers/sent_message.vue'

import Summary from '../views/buyers/summary.vue'
import saved_seller from '../views/buyers/saved_seller.vue'
import saved_search from '../views/buyers/saved_search.vue'
import watching from '../views/buyers/watching.vue'
import purchase_history from '../views/buyers/purchase_history.vue'
import recently_viewed from '../views/buyers/recently_viewed.vue'
import signin_sec from '../views/buyers/signin_sec.vue'
import buyer_returns from '../views/buyers/returns.vue'
import cancelled_order from '../views/buyers/cancelled_orders.vue'
import buy_again from '../views/buyers/buyagain.vue'
import paymentgate from '../views/buyers/paymentgate.vue'
import edit_login_name from '../views/buyers/edit_login_name.vue'
import edit_login_email from '../views/buyers/edit_login_email.vue'
import edit_login_mobilenumber from '../views/buyers/edit_login_mobilenumber.vue'



import Account from '../views/buyers/account.vue'
import payment_setting from '../views/buyers/payment_setting.vue'
import buyeraddress_setting from '../views/buyers/address_setting.vue'
import changePasswordPage from '../views/buyers/changePasswordPage.vue'


import registerBusinessAccount from '../views/sellers/registerBusinessAccount.vue'
import seller_changepassword from '../views/sellers/seller_changepassword.vue'
import Dashboard from '../views/sellers/seller_dashboard.vue'
import orders_page from '../views/sellers/orders_page.vue'
import order_details from '../views/sellers/order_details.vue'
import listing_page from '../views/sellers/listing_page.vue'
import listings_page from '../views/sellers/listings.vue'
import create_listing from '../views/sellers/create_listing.vue'
import add_category from '../views/sellers/add_category.vue'
import add_category3 from '../views/sellers/add_category3.vue'
import add_subcategory from '../views/sellers/add_subcategory.vue'
import add_subcategory3 from '../views/sellers/add_subcategory3.vue'
import Order_process from '../views/sellers/orderprocess.vue'

import communication_settings from '../views/sellers/communication_settings.vue'
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
        path: '/Order details',
        name: 'Orders details',
        component: order_details,
    },
    {
        path: '/Listing',
        name: 'listing Page',
        component: listing_page,
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
        path: '/newlisting3/:sid',
        name: 'newlisting3',
        component: create_listing3,
        props: true,
    },
    {
        path: '/buyerreturns',
        name: 'buyerreturns',
        component: buyer_returns,
    },
    {
        path: '/cancelledorder',
        name: 'cancelledorder',
        component: cancelled_order,
    },
    {
        path: '/buyagain',
        name: 'buyagain',
        component: buy_again,
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
        path: '/savedseller',
        name: 'savedseller',
        component: saved_seller,
    }, {
        path: '/savedsearch',
        name: 'savedsearch',
        component: saved_search,
    }, {
        path: '/purchasehistory',
        name: 'purchasehistory',
        component: purchase_history,
    }, {
        path: '/watchingpage',
        name: 'watchingpage',
        component: watching,
    }, {
        path: '/recentlyviewed',
        name: 'recentlyviewed',
        component: recently_viewed,
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
        path: '/orderdetails',
        name: 'orderdetails',
        component: orderDetailsPage,
    },
    {
        path: '/communicationsettings',
        name: 'Orders details',
        component: communication_settings,
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
        path: '/productDetail',
        name: 'ProductDetail',
        component: productDetails,
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
        path: '/User Detail',
        name: 'userAccountDetailPage',
        component: userAccountDetailPage,
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
        name: 'Change Password',
        component: changeUserPasswordPage,
    },
    {
        path: '/passwordrecovery',
        name: 'Password Recovery',
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
        name: 'Register Personal Account',
        component: userRegistrationPage,
    },

    {
        path: '/mechantregister',
        name: 'Register Business Account',
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
        path: '/Summary',
        name: 'Summary',
        component: Summary,
    },
    {
        path: '/My Message',
        name: 'My message',
        component: Mymessage,
    },
    {
        path: '/messageopen',
        name: 'messageopen',
        component: Mymessage_open,
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
        path: '/Resolution Center',
        name: 'Resolution Center',
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