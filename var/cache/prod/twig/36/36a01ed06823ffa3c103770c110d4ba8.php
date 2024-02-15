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

/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_4ff40b835580df33e6abd401a2e57ee2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["layoutTitle"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme", [], "Admin.Design.Feature"));
        // line 29
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_import"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_export_current"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  <div id=\"themes-logo-page\">


    ";
        // line 46
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 47
            echo "      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must select a shop from the above list if you wish to choose a theme.", [], "Admin.Design.Help"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if (($context["isInstalledRtlLanguage"] ?? null)) {
            // line 55
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 55)->display($context);
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_upload_logos")]);
        echo "
    ";
        // line 59
        if ((( !($context["isInstalledRtlLanguage"] ?? null) && ($context["isSingleShopContext"] ?? null)) && ($context["isMultiShopFeatureUsed"] ?? null))) {
            // line 60
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 60)->display($context);
            // line 61
            echo "    ";
        }
        // line 62
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body logo-configuration-card-body\">
        ";
        // line 67
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/logo_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 67)->display($context);
        // line 68
        echo "      </div>
      <div class=\"card-footer\">
        <button class=\"btn btn-primary float-right\">
          ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
        <div class=\"clearfix\">&nbsp;</div>
      </div>
    </div>
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["shopLogosForm"] ?? null), 'rest');
        echo "
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["shopLogosForm"] ?? null), 'form_end');
        echo "

    <div class=\"card\">
      <div class=\"card-header\" data-role=\"theme-shop\">
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My theme for %name% shop", ["%name%" => ($context["shopName"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body\">
        <div class=\"row\">
          ";
        // line 85
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 85, "125039750")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,         // line 86
($context["theme"] ?? null), "get", [0 => "name"], "method", false, false, false, 86), "themeDisplayName" => twig_get_attribute($this->env, $this->source,         // line 87
($context["theme"] ?? null), "get", [0 => "display_name"], "method", false, false, false, 87), "themeVersion" => twig_get_attribute($this->env, $this->source,         // line 88
($context["currentlyUsedTheme"] ?? null), "get", [0 => "version"], "method", false, false, false, 88), "themeAuthor" => twig_get_attribute($this->env, $this->source,         // line 89
($context["currentlyUsedTheme"] ?? null), "get", [0 => "author.name"], "method", false, false, false, 89), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,         // line 90
($context["theme"] ?? null), "get", [0 => "author.url"], "method", false, false, false, 90), "isActive" => true]));
        // line 103
        echo "
          ";
        // line 104
        if ( !twig_test_empty(($context["notUsedThemes"] ?? null))) {
            // line 105
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notUsedThemes"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 106
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 106, "754326932")->display(twig_array_merge($context, ["themeName" => twig_get_attribute($this->env, $this->source,                 // line 107
$context["theme"], "get", [0 => "name"], "method", false, false, false, 107), "themeDisplayName" => twig_get_attribute($this->env, $this->source,                 // line 108
$context["theme"], "get", [0 => "display_name"], "method", false, false, false, 108), "themeVersion" => twig_get_attribute($this->env, $this->source,                 // line 109
$context["theme"], "get", [0 => "version"], "method", false, false, false, 109), "themeAuthor" => twig_get_attribute($this->env, $this->source,                 // line 110
$context["theme"], "get", [0 => "author.name"], "method", false, false, false, 110), "themeAuthorUrl" => twig_get_attribute($this->env, $this->source,                 // line 111
$context["theme"], "get", [0 => "author.url"], "method", false, false, false, 111), "isActive" => false]));
                // line 137
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "          </div>

          ";
            // line 140
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/use_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 140)->display($context);
            // line 141
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/delete_theme_modal.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 141)->display($context);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 144
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminThemesListAfter", ["current_theme_name" => twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", [0 => "name"], "method", false, false, false, 144)]);
        echo "

        ";
        // line 146
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/layouts_configuration.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 146)->display($context);
        // line 147
        echo "      </div>
    </div>

  </div>
";
    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/themes.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 156,  229 => 154,  225 => 153,  217 => 147,  215 => 146,  210 => 144,  207 => 143,  204 => 142,  201 => 141,  199 => 140,  195 => 138,  181 => 137,  179 => 111,  178 => 110,  177 => 109,  176 => 108,  175 => 107,  173 => 106,  155 => 105,  153 => 104,  150 => 103,  148 => 90,  147 => 89,  146 => 88,  145 => 87,  144 => 86,  143 => 85,  136 => 81,  129 => 77,  125 => 76,  117 => 71,  112 => 68,  110 => 67,  104 => 64,  100 => 62,  97 => 61,  94 => 60,  92 => 59,  88 => 58,  85 => 57,  82 => 56,  79 => 55,  77 => 54,  74 => 53,  67 => 49,  63 => 47,  61 => 46,  56 => 43,  52 => 42,  47 => 26,  45 => 29,  43 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_4ff40b835580df33e6abd401a2e57ee2___125039750 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 85
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 85);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 93
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "              <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", [0 => "preview"], "method", false, false, false, 94), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentlyUsedTheme"] ?? null), "get", [0 => "display_name"], "method", false, false, false, 94), "html", null, true);
        echo "\">
            ";
    }

    // line 96
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "              <button class=\"btn action-button\">
                <i class=\"material-icons icon-current-theme\">done</i>
                ";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My current theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </button>
            ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 99,  312 => 97,  308 => 96,  298 => 94,  294 => 93,  283 => 85,  235 => 156,  229 => 154,  225 => 153,  217 => 147,  215 => 146,  210 => 144,  207 => 143,  204 => 142,  201 => 141,  199 => 140,  195 => 138,  181 => 137,  179 => 111,  178 => 110,  177 => 109,  176 => 108,  175 => 107,  173 => 106,  155 => 105,  153 => 104,  150 => 103,  148 => 90,  147 => 89,  146 => 88,  145 => 87,  144 => 86,  143 => 85,  136 => 81,  129 => 77,  125 => 76,  117 => 71,  112 => 68,  110 => 67,  104 => 64,  100 => 62,  97 => 61,  94 => 60,  92 => 59,  88 => 58,  85 => 57,  82 => 56,  79 => 55,  77 => 54,  74 => 53,  67 => 49,  63 => 47,  61 => 46,  56 => 43,  52 => 42,  47 => 26,  45 => 29,  43 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Theme/index.html.twig */
class __TwigTemplate_4ff40b835580df33e6abd401a2e57ee2___754326932 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 106
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", 106);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                  <img src=\"";
        echo twig_escape_filter($this->env, ($context["baseShopUrl"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "get", [0 => "preview"], "method", false, false, false, 115), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "get", [0 => "display_name"], "method", false, false, false, 115), "html", null, true);
        echo "\">
                ";
    }

    // line 117
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "                  <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_enable", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("enable-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn action-button js-display-use-theme-modal\" ";
        // line 120
        echo (( !($context["isSingleShopContext"] ?? null)) ? ("disabled") : (""));
        echo ">
                      <i class=\"material-icons\">
                        present_to_all
                      </i>
                      <span>";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "</span>
                    </button>
                  </form>
                  <form action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_delete", ["themeName" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"token\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-theme"), "html", null, true);
        echo "\"/>
                    <button type=\"button\" class=\"btn delete-button js-display-delete-theme-modal\">
                      <i class=\"material-icons\">
                        delete
                      </i>
                    </button>
                  </form>
                ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 128,  416 => 127,  410 => 124,  403 => 120,  399 => 119,  394 => 118,  390 => 117,  380 => 115,  376 => 114,  365 => 106,  316 => 99,  312 => 97,  308 => 96,  298 => 94,  294 => 93,  283 => 85,  235 => 156,  229 => 154,  225 => 153,  217 => 147,  215 => 146,  210 => 144,  207 => 143,  204 => 142,  201 => 141,  199 => 140,  195 => 138,  181 => 137,  179 => 111,  178 => 110,  177 => 109,  176 => 108,  175 => 107,  173 => 106,  155 => 105,  153 => 104,  150 => 103,  148 => 90,  147 => 89,  146 => 88,  145 => 87,  144 => 86,  143 => 85,  136 => 81,  129 => 77,  125 => 76,  117 => 71,  112 => 68,  110 => 67,  104 => 64,  100 => 62,  97 => 61,  94 => 60,  92 => 59,  88 => 58,  85 => 57,  82 => 56,  79 => 55,  77 => 54,  74 => 53,  67 => 49,  63 => 47,  61 => 46,  56 => 43,  52 => 42,  47 => 26,  45 => 29,  43 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/index.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\index.html.twig");
    }
}
