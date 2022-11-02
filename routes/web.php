<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AboutController,
    HomeController,
    LoginController,
    RegisterController,
    HomepageController,
    PetRecordController,
    MarketplaceController,
    DiaryController,
    PetProfileController,
    ChatController,
    BlogController,
    SalesController,
    AdminController,
    NewProductController,
    MyBlogsController,
    MarketPetsController,
    MarketSuppliesController,
    MarketVetsController,
    SProductDetailsController,
    MarketplaceProductDetailsController,
    ProfileController,
    AdminPetRecordsController,
    AdminVetController,
    VetController,
    UserController,
    SupplierController,
    VetFileManagementController,
    ProductController,
    NewBlogController,
    AddPetController,
    UserlistDetailsController,
    VetlistDetailsController,
    VetPetDetailsController,
    VaccineController,
    MedicalController,
    AddMedicalController,
    AddVaccineController,
    PetVetController,
    VetLoginController,
    SupplierLoginController,
    LostPetController,
    FoundPetController,
    ProductCompareController,
    VetCompareController,
    SellerDetailsController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LOGIN

route::post('/vetregister', [VetController::class, 'register']) ->name('vet.register');

route::post('/userregister', [UserController::class, 'register']) ->name('user.register');

route::post('/supplierregister', [SupplierController::class, 'register']) ->name('supplier.register');

route::post('/signin', [LoginController::class, 'signin']) ->name('login.signin');

route::get('/signin/Vet', [VetLoginController::class, 'vetlogin']) ->name('vetlogin.vetlogin');

route::post('/signin/Vet/login', [VetLoginController::class, 'vetsignin']) ->name('vetsignin.vetlogin');

route::get('/signin/Supplier', [SupplierLoginController::class, 'supplierlogin']) ->name('supplierlogin.supplierlogin');

route::post('/signin/Supplier/login', [SupplierLoginController::class, 'suppliersignin']) ->name('suppliersignin.supplierlogin');

route::get('/logout', [LoginController::class, 'logout']) ->name('login.logout');

Route::get('/login', [LoginController::class, 'login'])->name('login.login');


//review controllers

Route::post('marketplace/marketpdetails/review', [MarketplaceProductDetailsController::class, 'review'])->name('review.marketpdetails');



//   PET OWNER HOMEPAGE
Route::post('/Addpet', [AddPetController::class, 'addpet'])->name('addpet.addpet');

Route::post('/sellproduct', [ProductController::class, 'sell'])->name('sell.product');

Route::get('/lost/pet', [LostPetController::class, 'lostpet'])->name('lostpet.lostpet');

Route::get('/lost/pet/details', [LostPetController::class, 'lostpetdetails'])->name('lostpetdetails.lostpet');

Route::post('/lost/pet/upload', [LostPetController::class, 'lostpetupload'])->name('lostpetupload.lostpetupload');

Route::get('/found/pet', [FoundPetController::class, 'foundpet'])->name('foundpet.foundpet');

Route::get('/found/pet/details', [FoundPetController::class, 'foundpetdetails'])->name('foundpetdetails.foundpet');

Route::post('/found/pet/upload', [FoundPetController::class, 'foundpetupload'])->name('foundpetupload.foundpetupload');

Route::post('/marketplace/search', [MarketplaceController::class, 'marketSearch'])->name('marketplace.marketSearch');

Route::post('/marketplace/vet/search', [MarketVetsController::class, 'marketVetSearch'])->name('marketvets.marketVetSearch');

Route::post('/marketplace/supplies/search', [MarketSuppliesController::class, 'marketSuppliesSearch'])->name('marketsupplies.marketSuppliesSearch');

Route::post('/marketplace/pets/search', [MarketPetsController::class, 'marketPetsSearch'])->name('marketpets.marketPetsSearch');

Route::get('/marketplace/product/productcompare', [ProductCompareController::class, 'productcompare']) ->name('productcompare.productcompare');

Route::get('/about/me', [AboutController::class, 'aboutme'])->name('about.aboutme');

Route::get('/', [HomeController::class, 'home'])->name('home.home');

Route::get('/login', [LoginController::class, 'login'])->name('login.login');

Route::get('/register', [RegisterController::class, 'register'])->name('register.register');

Route::get('/successful', [RegisterController::class, 'registersuccessful'])->name('register.registersuccessful');

Route::get('/homepage', [HomepageController::class, 'homepage'])->name('homepage.homepage');

Route::get('/mysales', [SalesController::class, 'sales'])->name('sales.sales');

Route::get('/marketplace', [MarketplaceController::class, 'marketplace'])->name('marketplace.marketplace');

route::get('/pet/profile', [PetProfileController::class, 'petprofile']) ->name('petprofile.petprofile');

route::get('/Chats', [ChatController::class, 'chat']) ->name('chat.chat');

route::get('/blogs/latest', [BlogController::class, 'blog']) ->name('blog.blog');

route::get('/mysale/uploadproduct', [NewProductController::class, 'newproduct']) ->name('newproduct.newproduct');

route::get('/blogs/myblogs', [MyBlogsController::class, 'myblogs']) ->name('myblogs.myblogs');

route::get('/marketplace/vets', [MarketVetsController::class, 'marketvets']) ->name('marketvets.marketvets');

route::get('/marketplace/supplies', [MarketSuppliesController::class, 'marketsupplies']) ->name('marketsupplies.marketsupplies');

route::get('/marketplace/pets', [MarketPetsController::class, 'marketpets']) ->name('marketpets.marketpets');

route::get('/marketplace/sale/details', [SProductDetailsController::class, 'sproductdetails']) ->name('sproductdetails.sproductdetails');

route::get('/marketplace/sale/details/sold/{productSellId}', [SProductDetailsController::class, 'markAsSold']) ->name('sproductdetails.markAsSold');

route::get('/profile', [ProfileController::class, 'profile']) ->name('profile.profile');

route::get('/marketplace/product/details', [MarketplaceProductDetailsController::class, 'marketpdetails']) ->name('marketpdetails.marketpdetails');

route::get('/marketplacevet/product/details', [MarketplaceProductDetailsController::class, 'marketvetpdetails']) ->name('marketpdetails.marketvetpdetails');

route::post('/marketplacevet/vet/details/comment', [MarketplaceProductDetailsController::class, 'vetreview']) ->name('marketpdetails.vetreview');

route::get('marketplace/vet/compare', [VetComparecontroller::class, 'vetcompare']) ->name('vetcompare.vetcompare');

route::get('marketplace/product/sellerdetails',[SellerDetailsController::class, "sellerdetails"]) ->name('sellerdetails.sellerdetails');

route::get('marketplace/vet/vetdetails',[SellerDetailsController::class, "vetdetails"]) ->name('vetdetails.sellerdetails');



//   ADMIN VIEW CONTROLLERS

route::get('/adminpage', [AdminController::class, 'userlist']) ->name('admin.userlist');

route::get('/adminpage/profiledetails', [UserlistDetailsController::class, 'userdetails']) ->name('userlistdetails.userdetails');

route::get('/admin/vetrecords', [AdminVetController::class, 'adminvetlist']) ->name('adminvet.adminvetlist');

route::get('/admin/vetprofiledetails', [VetlistDetailsController::class, 'vetdetails']) ->name('vetlistdetails.vetdetails');

route::get('/admin/petrecords', [AdminPetRecordsController::class, 'adminpetrecords']) ->name('adminpetrecords.adminpetrecords');

//VET  HOMEPAGE CONTROLLERS

Route::post('vetview/sale/upload/product', [ProductController::class, 'vetsell']) ->name('vetproductsell.vetsell');

route::get('/vetview/marketplace/vet/vetdetails',[SellerDetailsController::class, "vetvetdetails"]) ->name('vetvetdetails.sellerdetails');

Route::get('vetview/found/pet/details', [FoundPetController::class, 'vetfoundpetdetails'])->name('vetfoundpetdetails.foundpet');

Route::get('vetview/lost/pet/details', [LostPetController::class, 'vetlostpetdetails'])->name('vetlostpetdetails.lostpet');

Route::get('vetview/lost/pet', [LostPetController::class, 'vetlostpet'])->name('vetlostpet.vetlostpet');

Route::post('vetview/lost/pet/upload', [LostPetController::class, 'vetlostpetupload'])->name('vetlostpetupload.lostpetupload');

Route::get('vetview/found/pet', [FoundPetController::class, 'vetfoundpet'])->name('vetfoundpet.foundpet');

Route::post('vetview/found/pet/upload', [FoundPetController::class, 'vetfoundpetupload'])->name('vetfoundpetupload.foundpetupload');

route::post('/vetview/marketplace/search', [MarketplaceController::class, 'vetMarketSearch']) ->name('vetmarketplace.vetMarketSearch');

Route::post('vetview/marketplace/vet/search', [MarketVetsController::class, 'vetmarketVetSearch'])->name('marketvets.vetmarketVetSearch');

Route::post('vetview/filemanagement/vetprofile/details/vaccineform/add', [AddVaccineController::class, 'addvaccinerecord'])->name('addvaccinerecord.addvaccinerecord');

Route::post('vetview/filemanagement/vetprofile/details/Medicalform/add', [AddMedicalController::class, 'addmedicalrecord'])->name('addmedicalrecord.addmedicalrecord');

Route::post('vetview/marketplace/supplies/search', [MarketSuppliesController::class, 'vetMarketSuppliesSearch'])->name('marketvets.vetMarketSuppliesSearch');

route::post('vetview/marketplace/pets/search', [MarketPetsController::class, 'vetMarketPetsSearch']) ->name('vetmarketpets.vetMarketPetsSearch');

route::get('/vetview/filemanagement/vetprofile/details', [VetPetDetailsController::class, 'vetpetdetails']) -> name('vetpetdetails.vetpetdetails');

route::get('/vetview/filemanagement/vetprofile/details/vaccineform', [VaccineController::class, 'vaccineform']) -> name('vaccineform.vaccineform');

route::get('/vetview/filemanagement/vetprofile/details/medicalform', [MedicalController::class, 'medicalform']) -> name('medicalform.medicalform');

route::get('/vetview/filemanagement', [VetFileManagementController::class, 'vfilemanagement']) ->name('vfilemanagement.vfilemanagement');

route::get('/vetview/homepage', [HomepageController::class, 'vethomepage']) ->name('vethomepage.homepage');

route::get('/vetview/marketplace', [MarketplaceController::class, 'vetmarketplace']) ->name('vetmarketplace.marketplace');

route::get('vetview/Chats', [ChatController::class, 'vetchat']) ->name('vetchat.chat');

route::get('vetview/blogs/myblogs', [MyBlogsController::class, 'vetmyblogs']) ->name('vetmyblogs.myblogs');

route::get('vetview/blogs', [BlogController::class, 'vet_blog']) ->name('vet_blogs.myblogs');

Route::get('vetview/mysales', [SalesController::class, 'vetsales'])->name('vet.sales');

route::get('vetview/marketplace/sale/details/sold/{productSellId}', [SProductDetailsController::class, 'vetmarkAsSold']) ->name('sproductdetails.vetmarkAsSold');

route::get('vetview/marketplace/vets', [MarketVetsController::class, 'vetmarketvets']) ->name('vetmarketvets.marketvets');

route::get('vetview/marketplace/supplies', [MarketSuppliesController::class, 'vetmarketsupplies']) ->name('vetmarketsupplies.marketsupplies');

route::get('vetview/marketplace/pets', [MarketPetsController::class, 'vetmarketpets']) ->name('vetmarketpets.marketpets');

route::get('vetview/marketplace/sale/details', [SProductDetailsController::class, 'vetsproductdetails']) ->name('vetsproductdetails.sproductdetails');

route::get('vetview/marketplace/product/details', [MarketplaceProductDetailsController::class, 'vetmarketpdetails']) ->name('marketpdetails.vetmarketpdetails');

route::post('vetview/marketplace/product/details/review', [MarketplaceProductDetailsController::class, 'vetpreview']) ->name('vetpreview.vetmarketpdetails');

route::post('vetview/marketplace/vet/details/review', [MarketplaceProductDetailsController::class, 'vetvetreview']) ->name('vetvetreview.vetmarketpdetails');

route::get('vetview/marketplace/product/vet/details', [MarketplaceProductDetailsController::class, 'vetmarketvetpdetails']) ->name('vetmarketpdetails.vetmarketvetpdetails');

route::get('vetview/profile', [ProfileController::class, 'vet_profile']) ->name('vet_profile.profile');

Route::get('vetview/marketplace/product/productcompare', [ProductCompareController::class, 'vetproductcompare']) ->name('vetproductcompare.productcompare');

Route::get('vetview/marketplace/vet/vetcompare', [VetCompareController::class, 'vetvetcompare']) ->name('vetvetcompare.vetcompare');

route::get('vetview/marketplace/product/sellerdetails',[SellerDetailsController::class, "vetsellerdetails"]) ->name('vetsellerdetails.sellerdetails');

route::get('vetview/marketplace/vet/vetdetails',[SellerDetailsController::class, "vetvetdetails"]) ->name('vetvetdetails.sellerdetails');





//   SUPPLIER HOMEPAGE CONTROLLERS

Route::post('supplierview/sale/upload/product', [ProductController::class, 'suppliersell']) ->name('supplierproductsell.suppliersell');


Route::get('supplierview/found/pet/details', [FoundPetController::class, 'supplierfoundpetdetails'])->name('supplierfoundpetdetails.foundpet');

Route::get('supplierview/lost/pet/details', [LostPetController::class, 'supplierlostpetdetails'])->name('supplierlostpetdetails.lostpet');

Route::post('supplierview/marketpdetails/review/post', [MarketplaceProductDetailsController::class, 'supplierreview'])->name('supplierreview.vetmarketpdetails');

Route::post('supplierview/marketpdetails/vet/review/post', [MarketplaceProductDetailsController::class, 'suppliervetreview'])->name('suppliervetreview.vetmarketpdetails');

Route::get('supplierview/lost/pet', [LostPetController::class, 'supplierlostpet'])->name('supplierlostpet.supplierlostpet');

Route::post('supplierview/lost/pet/upload', [LostPetController::class, 'supplierlostpetupload'])->name('lostpetupload.supplierlostpetupload');

Route::get('supplierview/found/pet', [FoundPetController::class, 'supplierfoundpet'])->name('foundpet.supplierfoundpet');

Route::post('supplierview/found/pet/upload', [FoundPetController::class, 'supplierfoundpetupload'])->name('foundpetupload.supplierfoundpetupload');

route::post('/supplierview/marketplace/search', [MarketplaceController::class, 'supplierMarketSearch']) ->name('supplierMarketSearch.supplierMarketSearch');

route::post('/supplierview/marketplace/vet/search', [MarketVetsController::class, 'supplierMarketVetSearch']) ->name('supplierMarketSearch.supplierMarketVetSearch');

route::post('/supplierview/marketplace/supplies/search', [MarketSuppliesController::class, 'suppliesMarketSuppliesSearch']) ->name('supplierMarketSearch.suppliesMarketSuppliesSearch');

route::post('/supplierview/marketplace/pet/search', [MarketPetController::class, 'suppliesMarketPetsSearch']) ->name('supplierMarketSearch.suppliesMarketPetsSearch');

route::get('/supplierview/homepage', [HomepageController::class, 'supplierhomepage']) ->name('supplierhomepage.homepage');

route::get('/supplierview/maketplace', [MarketplaceController::class, 'suppliermarketplace']) ->name('suppliermarketplace.marketplace');

route::get('supplierview/Chats', [ChatController::class, 'supplierchat']) ->name('supplierchat.chat');

route::get('supplierview/blogs/myblogs', [MyBlogsController::class, 'suppliermyblogs']) ->name('suppliermyblogs.myblogs');

route::get('supplierview/blogs', [BlogController::class, 'supplierblog']) ->name('supplierblog.blogs');

Route::get('supplierview/mysales', [SalesController::class, 'suppliersales'])->name('supplier.sales');

route::get('supplier/marketplace/sale/details/sold/{productSellId}', [SProductDetailsController::class, 'suppliermarkAsSold']) ->name('sproductdetails.suppliermarkAsSold');

route::get('supplierview/marketplace/vets', [MarketVetsController::class, 'suppliermarketvets']) ->name('suppliermarketvets.marketvets');

route::get('supplierview/marketplace/supplies', [MarketSuppliesController::class, 'suppliermarketsupplies']) ->name('suppliermarketsupplies.marketsupplies');

route::get('supplierview/marketplace/pets', [MarketPetsController::class, 'suppliermarketpets']) ->name('suppliermarketpets.marketpets');

route::get('supplierview/marketplace/sale/details', [SProductDetailsController::class, 'suppliersproductdetails']) ->name('suppliersproductdetails.sproductdetails');


route::get('supplierview/marketplace/product/details', [MarketplaceProductDetailsController::class, 'suppliermarketpdetails']) ->name('suppliermarketpdetails.suppliermarketpdetails');

route::get('supplierview/marketplace/product/vet/details', [MarketplaceProductDetailsController::class, 'suppliermarketvetpdetails']) ->name('suppliermarketpdetails.suppliermarketvetpdetails');

route::get('supplierview/profile', [ProfileController::class, 'supplier_profile']) ->name('supplier_profile.profile');

Route::get('supplier/marketplace/product/productcompare', [ProductCompareController::class, 'supplierproductcompare']) ->name('supplierproductcompare.productcompare');

Route::get('supplier/marketplace/vet/vetcompare', [VetCompareController::class, 'suppliervetcompare']) ->name('suppliervetcompare.productcompare');

route::get('/petvet', [PetVetController::class, 'petvet'])->name('petvet.petvet');

route::get('supplierview/marketplace/product/sellerdetails',[SellerDetailsController::class, "suppliersellerdetails"]) ->name('suppliersellerdetails.sellerdetails');

route::get('supplierview/marketplace/vet/vetdetails',[SellerDetailsController::class, "suppliervetdetails"]) ->name('suppliervetdetails.sellerdetails');

