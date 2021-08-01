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
import checkOutPagepayment from '../views/buyers/checkoutPagePayment.vue'
import userAgreementPage from '../views/userAgreementPage.vue'
import userPrivacy from '../views/userPrivacy.vue'
import cookiePolicy from '../views/cookiePolicy.vue'
import adChoice from '../views/adChoice.vue'
import registerBusinessAccount from '../views/sellers/registerBusinessAccount.vue'
import seller_changepassword from '../views/sellers/seller_changepassword.vue'
import Dashboard from '../views/sellers/seller_dashboard.vue'
import orders_page from '../views/sellers/orders_page.vue'
import order_details from '../views/sellers/order_details.vue'
import listing_page from '../views/sellers/listing_page.vue'
import create_listing from '../views/sellers/create_listing.vue'
import upload_image from '../views/sellers/upload_image.vue'
import Account_Page from '../views/sellers/account_page.vue'
import seller_message from '../views/sellers/message_page2.vue'
import Order_process from '../views/sellers/orderprocess.vue'
import money_back_guarantee from '../views/rejee_money_back_guarantee.vue'
import start_selling from '../views/start_selling.vue'
import start_selling_here from '../views/start_selling_here.vue'
import creating_listing from '../views/creating_listing.vue'
import sellers_can_cancel_order from '../views/sellers_can_cancel_order.vue'
import resolving_unpaid_item_with_buyer from '../views/resolving_unpaid_item_with_buyer.vue'
import managing_returns_missing_items_and_refunds_for_sellers from '../views/managing_returns_missing_items_and_refunds_for_sellers.vue'
import Mymessage from '../views/buyers/message.vue'
import Mymessage_open from '../views/buyers/message_open.vue'
import Account from '../views/buyers/account.vue'
import Summary from '../views/buyers/summary.vue'
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
        path: '/Orders',
        name: 'Orders Page',
        component: orders_page,
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
        path: '/Create listing',
        name: 'Create listing',
        component: create_listing,
    },
    {
        path: '/Account Page',
        name: 'Account Page',
        component: Account_Page,
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
        path: '/Upload Image',
        name: 'Upload Image',
        component: upload_image,
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
        path: '/productDetail',
        name: 'ProductDetail',
        component: productDetails,
    },
    {
        path: '/View Cart',
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
        path: '/Payment Method',
        name: 'Payment Method',
        component: paymentMethodPage,
    },

    {
        path: '/ADD Payment Method',
        name: 'ADD Payment Method',
        component: addPaymentMethod,
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
        path: '/Add New Card',
        name: 'Add New Card',
        component: addCardPage,
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
        path: '/Message Read',
        name: 'Message Read',
        component: Mymessage_open,
    },
    {
        path: '/Message',
        name: 'Message',
        component: seller_message,
    },
    {
        path: '/account',
        name: 'account',
        component: Account,
    },
    {
        path: '/Resolution center',
        name: 'Resolution_center',
        component: resolution_center,
    },
    {
        path: '/Resolut Center',
        name: 'Resolut Center',
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