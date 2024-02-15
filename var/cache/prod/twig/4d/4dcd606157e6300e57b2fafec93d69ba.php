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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig */
class __TwigTemplate_db78f8953f83487088789e2dd1859c89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'button_container' => [$this, 'block_button_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card_container.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"card theme-card\" data-role=\"theme-card-container\">
    <div class=\"active-card-overlay ";
        // line 30
        echo ((($context["isActive"] ?? null)) ? ("active") : (""));
        echo "\"></div>

    ";
        // line 32
        $this->displayBlock('image', $context, $blocks);
        // line 34
        echo "
    <div class=\"actions-container ";
        // line 35
        echo ((($context["isActive"] ?? null)) ? ("active") : (""));
        echo "\">
      ";
        // line 36
        $this->displayBlock('button_container', $context, $blocks);
        // line 38
        echo "    </div>
  </div>

  <div class=\"text-center theme-card-description\">
    <b class=\"theme-name\">
      ";
        // line 43
        echo twig_escape_filter($this->env, ($context["themeDisplayName"] ?? null), "html", null, true);
        echo "
    </b>
    <span class=\"theme-version\">
      ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Version", [], "Admin.Global"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["themeVersion"] ?? null), "html", null, true);
        echo "
    </span>
    <div class=\"theme-author\">
      <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["themeAuthorUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Designed by %s", ["%s" => ($context["themeAuthor"] ?? null)], "Admin.Design.Feature"), "html", null, true);
        echo "</a>
    </div>
  </div>
";
    }

    // line 32
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
    }

    // line 36
    public function block_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 36,  106 => 33,  102 => 32,  92 => 49,  84 => 46,  78 => 43,  71 => 38,  69 => 36,  65 => 35,  62 => 34,  60 => 32,  55 => 30,  52 => 29,  48 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/Partials/theme_card.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\Blocks\\Partials\\theme_card.html.twig");
    }
}
