<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GdprController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TimelogController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EstimateController;
use App\Http\Controllers\LeadFileController;
use App\Http\Controllers\LeadNoteController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TaskFileController;
use App\Http\Controllers\TaskNoteController;
use App\Http\Controllers\ClientDocController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadBoardController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\PaypalIPNController;
use App\Http\Controllers\PublicUrlController;
use App\Http\Controllers\TaskBoardController;
use App\Http\Controllers\TaskLabelController;
use App\Http\Controllers\UpdateAppController;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClientNoteController;
use App\Http\Controllers\CreditNoteController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\StickyNoteController;
use App\Http\Controllers\TaskReportController;
use App\Http\Controllers\TaxSettingController;
use App\Http\Controllers\TicketFileController;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\CustomFieldController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeDocController;
use App\Http\Controllers\KnowledgeBaseCategory;
use App\Http\Controllers\LeadCategoyController;
use App\Http\Controllers\LeadSettingController;
use App\Http\Controllers\LeaveReportController;
use App\Http\Controllers\LeavesQuotaController;
use App\Http\Controllers\MessageFileController;
use App\Http\Controllers\ProductFileController;
use App\Http\Controllers\ProjectFileController;
use App\Http\Controllers\ProjectNoteController;
use App\Http\Controllers\SmtpSettingController;
use App\Http\Controllers\SubTaskFileController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\TaskSettingController;
use App\Http\Controllers\TicketAgentController;
use App\Http\Controllers\TicketGroupController;
use App\Http\Controllers\TicketReplyController;
use App\Http\Controllers\ContractFileController;
use App\Http\Controllers\ContractTypeController;
use App\Http\Controllers\CustomModuleController;
use App\Http\Controllers\GdprSettingsController;
use App\Http\Controllers\LeaveSettingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SlackSettingController;
use App\Http\Controllers\TaskCalendarController;
use App\Http\Controllers\TaskCategoryController;
use App\Http\Controllers\ThemeSettingController;
use App\Http\Controllers\TwoFASettingController;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\ContractRenewController;
use App\Http\Controllers\EventCalendarController;
use App\Http\Controllers\FinanceReportController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\ModuleSettingController;
use App\Http\Controllers\ProjectMemberController;
use App\Http\Controllers\ProjectRatingController;
use App\Http\Controllers\TicketChannelController;
use App\Http\Controllers\TicketSettingController;
use App\Http\Controllers\TimelogReportController;
use App\Http\Controllers\ClientCategoryController;
use App\Http\Controllers\InvoiceSettingController;
use App\Http\Controllers\LeadCustomFormController;
use App\Http\Controllers\MessageSettingController;
use App\Http\Controllers\Payment\MollieController;
use App\Http\Controllers\Payment\PaypalController;
use App\Http\Controllers\Payment\SquareController;
use App\Http\Controllers\Payment\StripeController;
use App\Http\Controllers\ProfileSettingController;
use App\Http\Controllers\ProjectSettingController;
use App\Http\Controllers\PublicLeadGdprController;
use App\Http\Controllers\PusherSettingsController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\StorageSettingController;
use App\Http\Controllers\TimeLogSettingController;
use App\Http\Controllers\UserPermissionController;
use App\Http\Controllers\BusinessAddressController;
use App\Http\Controllers\CurrencySettingController;
use App\Http\Controllers\DiscussionFilesController;
use App\Http\Controllers\DiscussionReplyController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\LanguageSettingController;
use App\Http\Controllers\Payment\PayfastController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectTemplateController;
use App\Http\Controllers\SecuritySettingController;
use App\Http\Controllers\TimelogCalendarController;
use App\Http\Controllers\AttendanceReportController;
use App\Http\Controllers\EmergencyContactController;
use App\Http\Controllers\LeadAgentSettingController;
use App\Http\Controllers\Payment\PaystackController;
use App\Http\Controllers\Payment\RazorPayController;
use App\Http\Controllers\ProjectMilestoneController;
use App\Http\Controllers\PushNotificationController;
use App\Http\Controllers\RecurringExpenseController;
use App\Http\Controllers\RecurringInvoiceController;
use App\Http\Controllers\TicketCustomFormController;
use App\Http\Controllers\AttendanceSettingController;
use App\Http\Controllers\ClientSubCategoryController;
use App\Http\Controllers\LeadSourceSettingController;
use App\Http\Controllers\LeadStatusSettingController;
use App\Http\Controllers\Payment\AuthorizeController;
use App\Http\Controllers\SocialAuthSettingController;
use App\Http\Controllers\ContractDiscussionController;
use App\Http\Controllers\DiscussionCategoryController;
use App\Http\Controllers\ProductSubCategoryController;
use App\Http\Controllers\NotificationSettingController;
use App\Http\Controllers\Payment\FlutterwaveController;
use App\Http\Controllers\ProjectTemplateTaskController;
use App\Http\Controllers\ProjectTimelogBreakController;
use App\Http\Controllers\TicketReplyTemplatesController;
use App\Http\Controllers\DatabaseBackupSettingController;
use App\Http\Controllers\EmployeeShiftChangeRequestController;
use App\Http\Controllers\EmployeeShiftController;
use App\Http\Controllers\EmployeeShiftScheduleController;
use App\Http\Controllers\GoogleCalendarSettingController;
use App\Http\Controllers\IncomeVsExpenseReportController;
use App\Http\Controllers\OfflinePaymentSettingController;
use App\Http\Controllers\Payment\StripeWebhookController;
use App\Http\Controllers\ProjectTemplateMemberController;
use App\Http\Controllers\ProjectTemplateSubTaskController;
use App\Http\Controllers\PaymentGatewayCredentialController;
use App\Http\Controllers\TicketEmailSettingController;
use Route as GlobalRoute;

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
Route::get('/', function () {
    return redirect(route('giris'));
});

Route::get('/davet/{kod}', [RegisterController::class, 'davet'])->name('davet');
Route::post('/davet/kabul-et', [RegisterController::class, 'davetKabulEt'])->name('davet_kabul');

Route::get('/fatura/{hash}', [HomeController::class, 'fatura'])->name('on.fatura');
Route::get('faturalar/gorsel-goster', [HomeController::class, 'gorselGoster'])->name('faturalar.halka_gorsel_goster');

Route::get('/fatura-stripe/stripe-modal/', [HomeController::class, 'stripeModal'])->name('on.stripe_modal');
Route::get('/fatura-paystack/paystack-modal/', [HomeController::class, 'paystackModal'])->name('on.paystack_modal');
Route::get('/fatura-flutterwave/flutterwave-modal/', [HomeController::class, 'flutterwaveModal'])->name('on.flutterwave_modal');
Route::get('/fatura-mollie/mollie-modal/', [HomeController::class, 'mollieModal'])->name('on.mollie_modal');
Route::get('/fatura-authorize/authorize-modal/', [HomeController::class, 'authorizeModal'])->name('on.authorize_modal');
Route::post('fatura-stripe/stripe-detay-kaydet/', [HomeController::class, 'stripeDetayKaydet'])->name('on.stripe_detay_kaydet');
Route::get('/fatura/indir/{id}', [HomeController::class, 'faturaIndir'])->name('on.fatura_indir');
Route::post('/fatura-odeme-basarisiz/{faturaId}', [HomeController::class, 'faturaOdemeBasarisiz'])->name('on.fatura_odeme_basarisiz');

Route::get('/lead-formu', [HomeController::class, 'leadFormu'])->name('on.lead_formu');
Route::post('/lead-formu/lead-kaydet', [HomeController::class, 'leadKaydet'])->name('on.lead_kaydet');
Route::get('/bilet-formu', [HomeController::class, 'biletFormu'])->name('on.bilet_formu');
Route::post('/lead-formu/bilet-kaydet', [HomeController::class, 'biletKaydet'])->name('on.bilet_kaydet');
Route::get('/sozlesme/{hash}', [PublicUrlController::class, 'sozlesmeGoruntule'])->name('on.sozlesme.goruntule');
Route::post('/sozlesme/imzala/{id}', [PublicUrlController::class, 'sozlesmeImzala'])->name('on.sozlesme.imzala');
Route::get('/sozlesme/indir/{id}', [PublicUrlController::class, 'sozlesmeIndir'])->name('on.sozlesme.indir');

// Tahmin Halka Url
Route::get('/tahmin/{hash}', [PublicUrlController::class, 'tahminGoruntule'])->name('on.tahmin.goruntule');
Route::post('/tahmin/reddet/{id}', [PublicUrlController::class, 'tahminReddet'])->name('on.tahmin.reddet');
Route::post('/tahmin/kabul-et/{id}', [PublicUrlController::class, 'tahminKabulEt'])->name('on.tahmin.kabul_et');
Route::get('/tahmin/indir/{id}', [PublicUrlController::class, 'tahminIndir'])->name('on.tahmin.indir');

Route::get('/gorev/{id}', [HomeController::class, 'gorevDetay'])->name('on.gorev_detay');
Route::post('/gantt-chart-veri/{id}', [HomeController::class, 'ganttVeri'])->name('on.gantt_veri');
Route::get('/gantt-chart/{hash}', [HomeController::class, 'gantt'])->name('on.gantt');

Route::get('/gorev-tahtasi/{hash}', [HomeController::class, 'gorevTahtasi'])->name('on.gorev_tahtasi');
Route::get('/gorev-tahtasi/daha-fazla-yukle/{hash}', [HomeController::class, 'gorevTahtasiDahaFazlaYukle'])->name('on.gorev_tahtasi.daha_fazla_yukle');

Route::get('/teklif/{hash}', [HomeController::class, 'teklif'])->name('on.teklif');
Route::post('/teklif-aksiyonu/{id}', [HomeController::class, 'teklifAksiyonKaydet'])->name('on.teklif_aksiyonu');
Route::get('/teklif/indir/{id}', [HomeController::class, 'teklifIndir'])->name('on.teklif_indir');

// GDPR onayı
Route::get('/onay/l/{hash}', [PublicLeadGdprController::class, 'onay'])->name('on.gdpr.onay');
Route::post('/onay/lider-kaldir-talep', [PublicLeadGdprController::class, 'liderKaldirTalep'])->name('on.gdpr.lider_kaldir_talep');
Route::post('/onay/l/guncelle/{lider}', [PublicLeadGdprController::class, 'onayGuncelle'])->name('on.gdpr.onay.guncelle');

// Sosyal oturum açma rotaları
Route::get('/yonlendir/{saglayici}', [LoginController::class, 'yonlendir'])->name('sosyal_giris');
Route::get('/geri-donus/{saglayici}', [LoginController::class, 'geriDonus'])->name('sosyal_giris_geri_donus');
Route::post('eposta-kontrol', [LoginController::class, 'epostaKontrol'])->name('eposta_kontrol');
Route::post('kod-kontrol', [LoginController::class, 'kodKontrol'])->name('kod_kontrol');
Route::get('kod-yeniden-gonder', [LoginController::class, 'kodYenidenGonder'])->name('kod_yeniden_gonder');

// Para Ayarları rotaları
Route::get('para-ayarlari/guncelleme/doviz-kurlari', [CurrencySettingController::class, 'updateExchangeRate'])->name('para_ayarlari.guncelleme_doviz_kurlari');

/* Para Ayarları rotaları başlangıç */
Route::get('para-ayarlari/doviz-anahtari', [CurrencySettingController::class, 'currencyExchangeKey'])->name('para_ayarlari.doviz_anahtari');
Route::post('para-ayarlari/doviz-anahtari-kaydet', [CurrencySettingController::class, 'currencyExchangeKeyStore'])->name('para_ayarlari.doviz_anahtari_kaydet');
Route::get('para-ayarlari/doviz-kuru/{currency}', [CurrencySettingController::class, 'exchangeRate'])->name('para_ayarlari.doviz_kuru');

Route::get('para-ayarlari/para-formatini-guncelle', [CurrencySettingController::class, 'updateCurrencyFormat'])->name('para_ayarlari.para_formatini_guncelle');
Route::resource('para-ayarlari', CurrencySettingController::class);
Route::resource('odeme-gecidi-ayarlari', PaymentGatewayCredentialController::class);
/* Para Ayarları rotaları bitiş */

Route::resource('cevrimdisi-odeme-ayari', OfflinePaymentSettingController::class);
Route::resource('fatura-ayarlari', InvoiceSettingController::class);

/* Destek bileti ayarları rotaları başlangıç */
Route::post('destek-ajanlari/grup-guncelleme/{id}', [TicketAgentController::class, 'updateGroup'])->name('destek_ajanlari.grup_guncelleme');
Route::resource('destek-ajanlari', TicketAgentController::class);

Route::resource('destek-bilet-ayarlari', TicketSettingController::class);
Route::resource('destek-gruplari', TicketGroupController::class);
Route::resource('destekTurleri', TicketTypeController::class);
Route::resource('destekKanallari', TicketChannelController::class);
Route::resource('destek-e-posta-ayarlari', TicketEmailSettingController::class);

Route::get('cevapSablonlari/sablon-getir', [TicketReplyTemplatesController::class, 'fetchTemplate'])->name('cevapSablonlari.sablon_getir');
Route::resource('cevapSablonlari', TicketReplyTemplatesController::class);
/* Destek bileti ayarları rotaları bitiş */

Route::resource('proje-ayarlari', ProjectSettingController::class);
Route::resource('devam-ayarlari', AttendanceSettingController::class);
Route::resource('izin-ayarlari', LeaveSettingController::class);

// Izin Türü Kaynak
Route::resource('izinTuru', LeaveTypeController::class);

// Özel Alanlar Ayarları
Route::resource('ozel-alanlar', CustomFieldController::class);

// Mesaj Ayarları
Route::resource('mesaj-ayarlari', MessageSettingController::class);

// Depolama Ayarları
Route::get('depolama-ayarlari/aws-local-aws-modal', [StorageSettingController::class, 'awsLocalToAwsModal'])->name('depolama-ayarlari.aws_local_aws_modal');
Route::post('depolama-ayarlari/aws-local-aws', [StorageSettingController::class, 'moveFilesLocalToAwsS3'])->name('depolama-ayarlari.aws_local_aws');
Route::get('depolama-ayarlari/aws-testi-modal', [StorageSettingController::class, 'awsTestModal'])->name('depolama-ayarlari.aws_testi_modal');
Route::post('depolama-ayarlari/aws-testi', [StorageSettingController::class, 'awsTest'])->name('depolama-ayarlari.aws_testi');
Route::resource('depolama-ayarlari', StorageSettingController::class);

// Dil Ayarları
Route::get('dil-ayarlari/otomatik-ceviri', [LanguageSettingController::class, 'autoTranslate'])->name('dil_ayarlari.otomatik_ceviri');
Route::post('dil-ayarlari/otomatik-ceviri', [LanguageSettingController::class, 'autoTranslateUpdate'])->name('dil_ayarlari.otomatik_ceviri_guncelle');
Route::post('dil-ayarlari/veriyi-guncelle/{id?}', [LanguageSettingController::class, 'updateData'])->name('dil_ayarlari.veriyi_guncelle');
Route::resource('dil-ayarlari', LanguageSettingController::class);

// Görev Ayarları
Route::resource('gorev-ayarlari', TaskSettingController::class, ['only' => ['index', 'store']]);

// Zaman Kaydı Ayarları
Route::resource('zaman-kaydi-ayarlari', TimeLogSettingController::class);

// Sosyal Kimlik Doğrulama Ayarları
Route::resource('sosyal-kimlik-dogrulama-ayarlari', SocialAuthSettingController::class, ['only' => ['index', 'update']]);

/* Müşteri Adayı Ayarları */
Route::resource('musteri-adayi-ayarlari', LeadSettingController::class);
Route::resource('musteri-kaynagi-ayarlari', LeadSourceSettingController::class);

Route::get('musteri-durum-guncelle/{statusId}', [LeadStatusSettingController::class, 'statusUpdate'])->name('musteriAyari.durumGuncelle');
Route::resource('musteri-durum-ayarlari', LeadStatusSettingController::class);

Route::resource('musteri-temsilcisi-ayarlari', LeadAgentSettingController::class);

/* Müşteri Adayı Ayarları */

// Güvenlik Ayarları
Route::get('google-recaptcha-v3-dogrula', [SecuritySettingController::class, 'verify'])->name('google_recaptcha_v3_dogrula');
Route::resource('guvenlik-ayarlari', SecuritySettingController::class);

// Google Takvim Ayarları
Route::resource('google-takvim-ayarlari', GoogleCalendarSettingController::class);
Route::get('google-dogrulama', [GoogleAuthController::class, 'index'])->name('googleDogrulama');
Route::delete('google-dogrulama', [GoogleAuthController::class, 'destroy'])->name('googleDogrulama.sil');


// Veritabanı Yedekleme Ayarları
Route::get('veritabani-yedekleme-ayarlari/yedek-olustur', [DatabaseBackupSettingController::class, 'createBackup'])->name('veritabani-yedekleme-ayarlari.yedek_olustur');
Route::get('veritabani-yedekleme-ayarlari/indir/{dosya_adi}', [DatabaseBackupSettingController::class, 'download'])->name('veritabani-yedekleme-ayarlari.indir');
Route::get('veritabani-yedekleme-ayarlari/sil/{dosya_adi}', [DatabaseBackupSettingController::class, 'delete'])->name('veritabani-yedekleme-ayarlari.sil');
Route::resource('veritabani-yedekleme-ayarlari', DatabaseBackupSettingController::class);

// Rol İzinleri
Route::post('rol-izinleri/rolKaydet', [RolePermissionController::class, 'storeRole'])->name('rol-izinleri.rol_kaydet');
Route::post('rol-izinleri/rolSil', [RolePermissionController::class, 'deleteRole'])->name('rol-izinleri.rol_sil');
Route::post('rol-izinleri/izinler', [RolePermissionController::class, 'permissions'])->name('rol-izinleri.izinler');
Route::post('rol-izinleri/ozelIzinler', [RolePermissionController::class, 'customPermissions'])->name('rol-izinleri.ozel_izinler');
Route::post('rol-izinleri/izinleri-sifirla', [RolePermissionController::class, 'resetPermissions'])->name('rol-izinleri.izinleri_sifirla');
Route::resource('rol-izinleri', RolePermissionController::class);

// Tema Ayarları
Route::resource('tema-ayarlari', ThemeSettingController::class);

// Modül Ayarları
Route::resource('modul-ayarlari', ModuleSettingController::class);

// Özel Modüller
Route::post('ozel-moduller/satin-alma-dogrulama', [CustomModuleController::class, 'verifyingModulePurchase'])->name('ozel-moduller.satin_alma_dogrulama');
Route::resource('ozel-moduller', CustomModuleController::class);

Route::post('isletme-adresi/varsayilan-belirle', [BusinessAddressController::class, 'setDefaultAddress'])->name('isletme-adresi.varsayilan_belirle');
Route::resource('isletme-adresi', BusinessAddressController::class);

Route::post('calisan-vardiyalari/varsayilan-belirle', [EmployeeShiftController::class, 'setDefaultShift'])->name('calisan-vardiyalari.varsayilan_belirle');
Route::resource('calisan-vardiyalari', EmployeeShiftController::class);


/* Ayar menüsü rotaları burada bitiyor */
Route::post('silinenler/toplu-sil', [RemovedItemController::class, 'deleteAllSelected'])->name('silinenler.toplu_sil');
Route::resource('silinenler', RemovedItemController::class);

Route::get('proje-notlari/sifre-sor/{id}', [ProjectNoteController::class, 'askForPassword'])->name('proje_notlari.sifre_sor');
Route::post('proje-notlari/sifre-kontrol', [ProjectNoteController::class, 'checkPassword'])->name('proje_notlari.sifre_kontrol');
Route::post('proje-notlari/hizli-islem-uygula', [ProjectNoteController::class, 'applyQuickAction'])->name('proje_notlari.hizli_islem_uygula');
Route::resource('proje-notlari', ProjectNoteController::class);
Route::resource('projeler', ProjectController::class);

/* ÜRÜNLER */
Route::post('urunler/hizli-islem-uygula', [ProductController::class, 'applyQuickAction'])->name('urunler.hizli_islem_uygula');
Route::post('urunler/sepetten-urun-sil/{id}', [ProductController::class, 'removeCartItem'])->name('urunler.sepetten_urun_sil');
Route::post('urunler/sepet-urun-ekle', [ProductController::class, 'addCartItem'])->name('urunler.sepet_urun_ekle');
Route::get('urunler/sepet', [ProductController::class, 'cart'])->name('urunler.sepet');
Route::resource('urunler', ProductController::class);
Route::resource('urunKategori', ProductCategoryController::class);
Route::get('urunAltKategorilerGetir/{id}', [ProductSubCategoryController::class, 'getSubCategories'])->name('urun_alt_kategoriler_getir');
Route::resource('urunAltKategori', ProductSubCategoryController::class);

/* ÜRÜN DOSYALARI */
Route::get('urun-dosyalari/indir/{id}', [ProductFileController::class, 'download'])->name('urun-dosyalari.indir');
Route::post('urun-dosyalari/gorsel-sil/{id}', [ProductFileController::class, 'deleteImage'])->name('urun-dosyalari.gorsel_sil');
Route::post('urun-dosyalari/gorsel-guncelle', [ProductFileController::class, 'updateImages'])->name('urun-dosyalari.gorsel_guncelle');
Route::resource('urun-dosyalari', ProductFileController::class);

// Vergi Ayarları
Route::resource('vergiler', TaxSettingController::class);

/* Ödemeler */
Route::get('siparisler/ofline-odeme-modal', [OrderController::class, 'offlinePaymentModal'])->name('siparisler.ofline_odeme_modal');
Route::get('siparisler/urun-ekle', [OrderController::class, 'addItem'])->name('siparisler.urun_ekle');
Route::get('siparisler/stripe-modal', [OrderController::class, 'stripeModal'])->name('siparisler.stripe_modal');
Route::post('siparisler/fatura-olustur/{orderId}', [OrderController::class, 'makeInvoice'])->name('siparisler.fatura_olustur');
Route::post('siparisler/odeme-basarisiz/{orderId}', [OrderController::class, 'paymentFailed'])->name('siparisler.odeme_basarisiz');
Route::post('siparisler/stripe-detay-kaydet', [OrderController::class, 'saveStripeDetail'])->name('siparisler.stripe_detay_kaydet');
Route::post('siparisler/durum-degistir', [OrderController::class, 'changeStatus'])->name('siparisler.durum_degistir');
Route::get('siparisler/indir/{id}', [OrderController::class, 'download'])->name('siparisler.indir');

/* Siparişler */
Route::resource('siparisler', OrderController::class);

/* DUYURU */
Route::post('duyurular/hizli-islem-uygula', [NoticeController::class, 'applyQuickAction'])->name('duyurular.hizli_islem_uygula');
Route::resource('duyurular', NoticeController::class);


/* Bilgi Tabanı */
Route::get('knowledgebase/create/{id?}', [KnowledgeBaseController::class, 'create'])->name('knowledgebase.create');
Route::post('knowledgebase/apply-quick-action', [KnowledgeBaseController::class, 'applyQuickAction'])->name('knowledgebase.apply_quick_action');
Route::get('knowledgebase/searchquery/{query?}', [KnowledgeBaseController::class, 'searchQuery'])->name('knowledgebase.searchQuery');
Route::resource('knowledgebase', KnowledgeBaseController::class)->except(['create']);

/* Bilgi Tabanı Kategorisi */
Route::resource('knowledgebasecategory', KnowledgeBaseCategory::class);

/* ETKİNLİKLER */
Route::resource('events', EventCalendarController::class);
Route::get('private-calendor/data', [EventCalendarController::class, 'data'])->name('private_calendor.data');

/* GÖREVLER */
Route::post('tasks/change-status', [TaskController::class, 'changeStatus'])->name('tasks.change_status');
Route::post('tasks/apply-quick-action', [TaskController::class, 'applyQuickAction'])->name('tasks.apply_quick_action');
Route::post('tasks/store-pin', [TaskController::class, 'storePin'])->name('tasks.store_pin');
Route::post('tasks/reminder', [TaskController::class, 'reminder'])->name('tasks.reminder');
Route::post('tasks/destroy-pin/{id}', [TaskController::class, 'destroyPin'])->name('tasks.destroy_pin');
Route::post('tasks/check-task/{taskID}', [TaskController::class, 'checkTask'])->name('tasks.check_task');
Route::post('tasks/gantt-task-update/{id}', [TaskController::class, 'updateTaskDuration'])->name('tasks.gantt_task_update');
Route::get('tasks/members/{id}', [TaskController::class, 'members'])->name('tasks.members');
Route::get('tasks/project_tasks/{id}', [TaskController::class, 'projectTasks'])->name('tasks.project_tasks');

Route::resource('tasks', TaskController::class);

// Tatiller
Route::get('holidays/mark-holiday', [HolidayController::class, 'markHoliday'])->name('holidays.mark_holiday');
Route::post('holidays/mark-holiday-store', [HolidayController::class, 'markDayHoliday'])->name('holidays.mark_holiday_store');
Route::get('holidays/calendar', [HolidayController::class, 'calendar'])->name('holidays.calendar');
Route::post('holidays/apply-quick-action', [HolidayController::class, 'applyQuickAction'])->name('holidays.apply_quick_action');
Route::resource('holidays', HolidayController::class);

Route::resource('leads', LeadController::class);

/* İZİNLER */
Route::get('leaves/personal', [LeaveController::class, 'personalLeaves'])->name('leaves.personal');
Route::get('leaves/calendar', [LeaveController::class, 'leaveCalendar'])->name('leaves.calendar');
Route::post('leaves/data', [LeaveController::class, 'data'])->name('leaves.data');
Route::post('leaves/leaveAction', [LeaveController::class, 'leaveAction'])->name('leaves.leave_action');
Route::get('leaves/show-reject-modal', [LeaveController::class, 'rejectLeave'])->name('leaves.show_reject_modal');
Route::post('leaves/apply-quick-action', [LeaveController::class, 'applyQuickAction'])->name('leaves.apply_quick_action');
Route::resource('leaves', LeaveController::class);

// Mesajlar
Route::get('messages/fetch-user-list', [MessageController::class, 'fetchUserListView'])->name('messages.fetch_user_list');
Route::post('messages/fetch_messages/{id}', [MessageController::class, 'fetchUserMessages'])->name('messages.fetch_messages');
Route::resource('messages', MessageController::class);

// Sohbet Dosyaları
Route::get('message-file/download/{id}', [MessageFileController::class, 'download'])->name('message_file.download');

Route::resource('message-file', MessageFileController::class);

// Faturalar

/* ödemeler */
Route::get('invoices/offline-payment-modal', [InvoiceController::class, 'offlinePaymentModal'])->name('invoices.offline_payment_modal');
Route::get('invoices/stripe-modal', [InvoiceController::class, 'stripeModal'])->name('invoices.stripe_modal');
Route::post('invoices/save-stripe-detail/', [InvoiceController::class, 'saveStripeDetail'])->name('invoices.save_stripe_detail');
/* ödemeler */

Route::get('invoices/delete-image', [InvoiceController::class, 'deleteInvoiceItemImage'])->name('invoices.delete_image');
Route::get('invoices/show-image', [InvoiceController::class, 'showImage'])->name('invoices.show_image');
Route::post('invoices/store-offline-payment', [InvoiceController::class, 'storeOfflinePayment'])->name('invoices.store_offline_payment');
Route::post('invoices/store_file', [InvoiceController::class, 'storeFile'])->name('invoices.store_file');
Route::get('invoices/file-upload', [InvoiceController::class, 'fileUpload'])->name('invoices.file_upload');
Route::post('invoices/delete-applied-credit/{id}', [InvoiceController::class, 'deleteAppliedCredit'])->name('invoices.delete_applied_credit');
Route::get('invoices/applied-credits/{id}', [InvoiceController::class, 'appliedCredits'])->name('invoices.applied_credits');
Route::get('invoices/payment-reminder/{invoiceID}', [InvoiceController::class, 'remindForPayment'])->name('invoices.payment_reminder');
Route::post('invoices/send-invoice/{invoiceID}', [InvoiceController::class, 'sendInvoice'])->name('invoices.send_invoice');
Route::post('invoices/apply-quick-action', [InvoiceController::class, 'applyQuickAction'])->name('invoices.apply_quick_action');
Route::get('invoices/download/{id}', [InvoiceController::class, 'download'])->name('invoices.download');
Route::get('invoices/add-item', [InvoiceController::class, 'addItem'])->name('invoices.add_item');
Route::get('invoices/update-status/{invoiceID}', [InvoiceController::class, 'cancelStatus'])->name('invoices.update_status');
Route::get('invoices/get-client-company/{projectID?}', [InvoiceController::class, 'getClientOrCompanyName'])->name('invoices.get_client_company');
Route::post('invoices/fetchTimelogs', [InvoiceController::class, 'fetchTimelogs'])->name('invoices.fetch_timelogs');
Route::get('invoices/check-shipping-address', [InvoiceController::class, 'checkShippingAddress'])->name('invoices.check_shipping_address');

Route::get('invoices/toggle-shipping-address/{invoice}', [InvoiceController::class, 'toggleShippingAddress'])->name('invoices.toggle_shipping_address');
Route::get('invoices/shipping-address-modal/{invoice}', [InvoiceController::class, 'shippingAddressModal'])->name('invoices.shipping_address_modal');
Route::post('invoices/add-shipping-address/{clientId}', [InvoiceController::class, 'addShippingAddress'])->name('invoices.add_shipping_address');

Route::resource('invoices', InvoiceController::class);

// Tahminler
Route::get('estimates/delete-image', [EstimateController::class, 'deleteEstimateItemImage'])->name('estimates.delete_image');
Route::get('estimates/download/{id}', [EstimateController::class, 'download'])->name('estimates.download');
Route::post('estimates/send-estimate/{id}', [EstimateController::class, 'sendEstimate'])->name('estimates.send_estimate');
Route::get('estimates/change-status/{id}', [EstimateController::class, 'changeStatus'])->name('estimates.change_status');
Route::post('estimates/accept/{id}', [EstimateController::class, 'accept'])->name('estimates.accept');
Route::post('estimates/decline/{id}', [EstimateController::class, 'decline'])->name('estimates.decline');
Route::resource('estimates', EstimateController::class);

// Teklifler
Route::get('proposals/delete-image', [ProposalController::class, 'deleteProposalItemImage'])->name('proposals.delete_image');
Route::get('proposals/download/{id}', [ProposalController::class, 'download'])->name('proposals.download');
Route::post('proposals/send-proposal/{id}', [ProposalController::class, 'sendProposal'])->name('proposals.send_proposal');
Route::resource('proposals', ProposalController::class);

// Ödemeler
Route::post('payments/apply-quick-action', [PaymentController::class, 'applyQuickAction'])->name('payments.apply_quick_action');
Route::get('payments/download/{id}', [PaymentController::class, 'download'])->name('payments.download');
Route::resource('payments', PaymentController::class);

