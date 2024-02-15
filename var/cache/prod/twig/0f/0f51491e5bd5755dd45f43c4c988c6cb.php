<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d9453154e13925e6c0f12b35449f0887 */
class __TwigTemplate_fa70d5b6d0ddcdaac414799ae0d833c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/Prestashop8/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/Prestashop8/img/app_icon.png\" />

<title>Szablony > Szablon • Prestashop8</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.1.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '1c89008718100702f4c3dc114ba26a65';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '87de49d522b0ee6e8b220fe477b6e8dc';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/Prestashop8/_admin/index.php/improve/modules/manage?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A';
    var admin_notification_get_link = '/prestashop/Prestashop8/_admin/index.php/common/notifications?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/Prestashop8/_admin/index.php/common/notifications/ack?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A';
    var tab_";
        // line 41
        echo "modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_product_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/Prestashop8/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/Prestashop8/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/Prestashop8/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/Prestashop8\\/_admin\\/\";
var baseDir = \"\\/prestashop\\/Prestashop8\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/Prestashop8\\/_admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,#";
        // line 66
        echo "#0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/js/admin.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/js/tools.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/_admin/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/Prestashop8/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminthemes\"
  data-base-url=\"/prestashop/Prestashop8/_admin/index.php\"  data-token=\"trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminDashboard&amp;token=6236f05b21fa66e9f9ecaf48f3c70a76\"></a>
      <span id=\"shop_version\">8.1.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3adc057de21d5bddc7daa5cce734cf11\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/improve/modules/manage?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/catalog/categories/new?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/catalog/products-v2/create?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
                 data-i";
        // line 118
        echo "tem=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ecf971ea8ee7050a1ef38421423ab704\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/orders?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"156\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-A\"
        data-post-link=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminQuickAccesses&token=b5bf84d7ec032e41b964da472b9cdb2b\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Theme &amp; Logo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminQuickAccesses&token=b5bf84d7ec032e41b964da472b9cdb2b\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/Prestashop8/_admin/index.php?controller=AdminSearch&amp;token=a7e7b5f5263fece2895b6ab28c05f28f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\"";
        // line 158
        echo " id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"drop";
        // line 174
        echo "down-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3adc057de21d5bddc7daa5cce734cf11\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/improve/modules/manage?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/catalog/categories/new?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/catalog/products-v2/create?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ecf971ea8ee7050a1ef38421423ab704\"
             data-item=\"New voucher\"
   ";
        // line 212
        echo " >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/Prestashop8/_admin/index.php/sell/orders?token=c9fd47d78821c02c57a13e3ae0ad5c7e\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"180\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/?-A\"
      data-post-link=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminQuickAccesses&token=b5bf84d7ec032e41b964da472b9cdb2b\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Theme &amp; Logo - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminQuickAccesses&token=b5bf84d7ec032e41b964da472b9cdb2b\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &a";
        // line 256
        echo "mp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/maintenance/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Przerwa techniczna</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/Prestashop8/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab";
        // line 304
        echo "\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=b6df36ae49fc5c7c8246c0a056032093\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </d";
        // line 349
        echo "iv>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/Prestashop8/img/pr/default.jpg\" alt=\"MD\" /></span>
        <span class=\"employee_profile\">Witaj ponownie MD</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/employees/1/edit?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/Prestashop8/_admin/";
        // line 400
        echo "index.php?controller=AdminLogin&amp;logout=1&amp;token=bc5767355f97c2e4935251701b79f81c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/employees/toggle-navigation?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminDashboard&amp;token=6236f05b21fa66e9f9ecaf48f3c70a76\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.3</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminDashboard&amp;token=6236f05b21fa66e9f9ecaf48f3c70a76\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/orders/";
        // line 448
        echo "?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/orders/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/orders/invoices/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.";
        // line 478
        echo "php/sell/orders/credit-slips/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/orders/delivery-slips/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCarts&amp;token=b6df36ae49fc5c7c8246c0a056032093\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/catalog/products?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                   ";
        // line 510
        echo " <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/catalog/products?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/catalog/categories?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/catalog/monitoring/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
    ";
        // line 540
        echo "                          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminAttributesGroups&amp;token=8857d051f5f781022c3a7d1d6e7d19cd\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/catalog/brands/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/attachments/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCartRules&amp;token=ecf971ea8ee70";
        // line 567
        echo "50a1ef38421423ab704\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/stocks/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/customers/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
       ";
        // line 600
        echo "                         <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/customers/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/addresses/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCustomerThreads&amp;token=df5ad160d0b65fa00baa38055bc8a5ae\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
       ";
        // line 630
        echo "                       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCustomerThreads&amp;token=df5ad160d0b65fa00baa38055bc8a5ae\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/sell/customer-service/order-messages/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminReturn&amp;token=53a7a6b260d4dbcd95883a3b2f0b47ef\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashop/Prestashop8/_";
        // line 660
        echo "admin/index.php?controller=AdminStats&amp;token=3adc057de21d5bddc7daa5cce734cf11\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/modules/manage?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
    ";
        // line 698
        echo "                          <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/modules/manage?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> ";
        // line 724
        echo "Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/mail_theme/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/cms-pages/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/modules/positions/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
         ";
        // line 756
        echo "                       <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminImages&amp;token=f52a1106f3f4c4b691d8c9fa5cde653b\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/modules/link-widget/list?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCarriers&amp;token=600d533ca8da0908f2be8f8f35a28216\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              ";
        // line 786
        echo "
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminCarriers&amp;token=600d533ca8da0908f2be8f8f35a28216\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/shipping/preferences/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/payment/payment_methods?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                 ";
        // line 817
        echo "             <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/payment/payment_methods?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/payment/preferences?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/international/localization/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                           ";
        // line 847
        echo "         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/international/localization/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/international/zones/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/international/taxes/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                   ";
        // line 877
        echo "                         
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/international/translations/settings?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/preferences/preferences?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" da";
        // line 913
        echo "ta-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/preferences/preferences?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/order-preferences/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/product-preferences/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/customer-preferences/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Customer Settings
                                </a>
                              ";
        // line 940
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/contacts/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/shop/seo-urls/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminSearchConf&amp;token=515fb1689607f131db90cf2d293dafdc\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvance";
        // line 972
        echo "dParameters\">
                    <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/system-information/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/system-information/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/performance/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                 ";
        // line 1001
        echo "                           
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/administration/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/emails/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/import/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/employees/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Team
                                </a>
                            ";
        // line 1029
        echo "  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/sql-requests/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/logs/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/webservice-keys/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <l";
        // line 1058
        echo "i class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/feature-flags/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/Prestashop8/_admin/index.php/configure/advanced/security/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\" aria-current=\"page\">Theme &amp; Logo</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Szablony &gt; Szablon          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-d";
        // line 1108
        echo "esc-configuration-add\"
                  href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/import?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"                  title=\"Dodaj Szablon\"                                  >
                  <i class=\"material-icons\">add</i>                  Dodaj Szablon
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/export?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"                  title=\"Eksportuj obecny szablon\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Eksportuj obecny szablon
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/Prestashop8/_admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminThemes%253Fversion%253D8.1.3%2526country%253Dpl/Pomoc?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-fl";
        // line 1145
        echo "oating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/import?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"              title=\"Dodaj Szablon\"            >
              Dodaj Szablon
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/prestashop/Prestashop8/_admin/index.php/improve/design/themes/export?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"              title=\"Eksportuj obecny szablon\"            >
              Eksportuj obecny szablon
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/Prestashop8/_admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminThemes%253Fversion%253D8.1.3%2526country%253Dpl/Pomoc?_token=trma9Hd1rlubaxwy9UOtk4MN5wolQvHoynYGSpmw9-A\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1180
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/prestashop/Prestashop8/_admin/index.php?controller=AdminDashboard&amp;token=6236f05b21fa66e9f9ecaf48f3c70a76\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1214
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1180
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__d9453154e13925e6c0f12b35449f0887";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1379 => 1214,  1358 => 1180,  1347 => 83,  1338 => 1214,  1298 => 1180,  1261 => 1145,  1222 => 1108,  1170 => 1058,  1139 => 1029,  1109 => 1001,  1078 => 972,  1044 => 940,  1015 => 913,  977 => 877,  945 => 847,  913 => 817,  880 => 786,  848 => 756,  814 => 724,  786 => 698,  746 => 660,  714 => 630,  682 => 600,  647 => 567,  618 => 540,  586 => 510,  552 => 478,  520 => 448,  470 => 400,  417 => 349,  370 => 304,  320 => 256,  274 => 212,  234 => 174,  216 => 158,  174 => 118,  134 => 83,  115 => 66,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d9453154e13925e6c0f12b35449f0887", "");
    }
}
